<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Queue\SerializesModels;

class Enquiry extends Mailable
{
    use Queueable, SerializesModels;

    public $data;
    protected $recipient;

    /**
     * Create a new message instance.
     */
    public function __construct(array $data, string $recipient = null)
    {
        $this->data = $data;
        $this->recipient = $recipient; // store the recipient address
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            to: $this->recipient ? [new Address($this->recipient)] : [],
            subject: 'New enquiry from ' . $this->data['email'],
            from: new Address('no-reply@yourdomain.com', 'Website Contact Form'),
            replyTo: [
                new Address($this->data['email'], $this->data['first_name'] . ' ' . $this->data['last_name']),
            ]
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            markdown: 'public.enquiry',
            with: ['url' => env('APP_URL')],
        );
    }

    public function attachments(): array
    {
        return [];
    }
}
