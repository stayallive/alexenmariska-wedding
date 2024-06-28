<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use App\Models\Invite\People;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Envelope;

class InviteUpdated extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(
        public readonly People $person,
    ) {}

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: "{$this->person} heeft zijn/haar RSVP bijgewerkt",
        );
    }

    public function content(): Content
    {
        return new Content(
            markdown: 'mail.invite-updated',
        );
    }
}
