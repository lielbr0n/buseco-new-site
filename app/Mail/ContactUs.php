<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Address;

class ContactUs extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public function __construct($contactUsQuery)
    {
        $this->fullName = $contactUsQuery['fullname'];
        $this->contactEmail = $contactUsQuery['email'];
        $this->municipality = $contactUsQuery['municipality'];
        $this->subjectBody = $contactUsQuery['subject'];
        $this->messageBody = $contactUsQuery['message'];
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            from: new Address($this->contactEmail, $this->fullName),
            replyTo: [
                new Address($this->contactEmail, $this->fullName),
            ],
            subject: 'CONTACT US - '. strtoupper($this->subjectBody),
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'contact-us.email-template-contact-us',
            with: [
                'fullname' => strtoupper($this->fullName),
                'contactEmail' => $this->contactEmail,
                /*'municipality' => strtoupper($this->municipality),*/
                'subjectBody' => strtoupper($this->subjectBody),
                'messageBody' => strtoupper($this->messageBody),
            ],
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
