<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactFormRequest;
use App\Mail\ContactMessage;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Mail;
use Illuminate\View\View;

class ContactController extends Controller
{
    public function show(): View
    {
        return view('pages.contact');
    }

    public function submit(ContactFormRequest $request): RedirectResponse
    {
        $data = $request->validated();

        if (! empty($data['website'] ?? null)) {
            return redirect()->route('contact')->with('success', 'Thanks — we’ll get back to you shortly.');
        }

        $toAddress = trim((string) config('mail.contact_to.address'));
        $toName = trim((string) config('mail.contact_to.name'));

        if ($toAddress === '') {
            $toAddress = trim((string) config('mail.from.address', 'hello@example.com'));
        }

        $recipient = $toName !== '' ? [$toAddress => $toName] : $toAddress;

        Mail::to($recipient)->send(new ContactMessage($data));

        return redirect()->route('contact')->with('success', 'Thanks for reaching out — we’ll reply soon.');
    }
}
