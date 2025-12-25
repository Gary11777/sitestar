<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactMessage extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * @param array{name:string, email:string, company:?string, budget:?string, message:string, website:?string} $data
     */
    public function __construct(public readonly array $data)
    {
    }

    public function envelope(): Envelope
    {
        $name = (string) ($this->data['name'] ?? '');
        $email = (string) ($this->data['email'] ?? '');

        return new Envelope(
            replyTo: [new Address($email, $name)],
            subject: 'New SiteStar inquiry from '.$name,
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.contact-message',
            with: [
                'data' => $this->data,
            ],
        );
    }

    public function attachments(): array
    {
        return [];
    }
}
