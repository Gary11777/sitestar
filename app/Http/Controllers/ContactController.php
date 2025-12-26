<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use App\Mail\ContactFormMail;

class ContactController extends Controller
{
    /**
     * Display the contact page.
     */
    public function show()
    {
        return view('pages.contact');
    }

    /**
     * Handle the contact form submission.
     * 
     * Security features:
     * - CSRF protection (handled by Laravel middleware)
     * - Honeypot field detection
     * - Rate limiting (5 requests per minute per IP)
     * - Cloudflare Turnstile verification
     * - Server-side validation and sanitization
     */
    public function submit(Request $request)
    {
        // Check honeypot field - if filled, it's likely a bot
        if ($request->filled('website')) {
            // Return success to not alert the bot, but don't actually process
            return response()->json([
                'success' => true,
                'message' => 'Thank you for your message!'
            ]);
        }

        // Rate limiting - 5 requests per minute per IP
        $key = 'contact-form:' . $request->ip();
        
        if (RateLimiter::tooManyAttempts($key, 5)) {
            $seconds = RateLimiter::availableIn($key);
            
            return response()->json([
                'success' => false,
                'message' => "Too many requests. Please try again in {$seconds} seconds."
            ], 429);
        }
        
        RateLimiter::hit($key, 60); // 60 seconds decay

        // Verify Cloudflare Turnstile if configured
        if (config('services.turnstile.secret_key')) {
            $turnstileResponse = $request->input('cf-turnstile-response');
            
            if (!$turnstileResponse) {
                return response()->json([
                    'success' => false,
                    'message' => 'Please complete the security verification.'
                ], 422);
            }

            $verified = $this->verifyTurnstile($turnstileResponse, $request->ip());
            
            if (!$verified) {
                return response()->json([
                    'success' => false,
                    'message' => 'Security verification failed. Please try again.'
                ], 422);
            }
        }

        // Validate the form data
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:100', 'min:2'],
            'email' => ['required', 'email', 'max:255'],
            'company' => ['nullable', 'string', 'max:100'],
            'message' => ['required', 'string', 'min:10', 'max:5000'],
        ], [
            'name.required' => 'Please enter your name.',
            'name.min' => 'Name must be at least 2 characters.',
            'name.max' => 'Name cannot exceed 100 characters.',
            'email.required' => 'Please enter your email address.',
            'email.email' => 'Please enter a valid email address.',
            'message.required' => 'Please enter your message.',
            'message.min' => 'Message must be at least 10 characters.',
            'message.max' => 'Message cannot exceed 5000 characters.',
        ]);

        // Sanitize inputs
        $validated['name'] = strip_tags($validated['name']);
        $validated['email'] = filter_var($validated['email'], FILTER_SANITIZE_EMAIL);
        $validated['company'] = $validated['company'] ? strip_tags($validated['company']) : null;
        $validated['message'] = strip_tags($validated['message']);

        try {
            // Send the email
            Mail::to(config('mail.from.address', 'info@sitestar.by'))
                ->send(new ContactFormMail($validated));

            Log::info('Contact form submission successful', [
                'name' => $validated['name'],
                'email' => $validated['email'],
                'ip' => $request->ip(),
            ]);

            return response()->json([
                'success' => true,
                'message' => 'Thank you for your message! We\'ll get back to you soon.'
            ]);

        } catch (\Exception $e) {
            Log::error('Contact form email failed', [
                'error' => $e->getMessage(),
                'name' => $validated['name'],
                'email' => $validated['email'],
            ]);

            return response()->json([
                'success' => false,
                'message' => 'Sorry, there was an error sending your message. Please try again later.'
            ], 500);
        }
    }

    /**
     * Verify Cloudflare Turnstile token.
     */
    private function verifyTurnstile(string $token, string $ip): bool
    {
        try {
            $response = Http::asForm()->post('https://challenges.cloudflare.com/turnstile/v0/siteverify', [
                'secret' => config('services.turnstile.secret_key'),
                'response' => $token,
                'remoteip' => $ip,
            ]);

            $result = $response->json();
            
            return $result['success'] ?? false;

        } catch (\Exception $e) {
            Log::error('Turnstile verification failed', ['error' => $e->getMessage()]);
            // In case of API failure, allow the submission (fail open)
            // You might want to change this behavior based on your security requirements
            return true;
        }
    }
}
