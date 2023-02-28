<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class sendMail extends Mailable
{
    use Queueable, SerializesModels;

    protected $data;
    protected $date;
    /**
     * Create a new message instance.
     */
    public function __construct($data)
    {
        $this->data = $data;
        // $this->date = $date;

    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Kodigo Empleabilidad Notificacion',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content()
    {
        return new Content(
            view: 'mail.sendMail',
            with: [
                "estudiantes" => $this->data
            ],
        );
        // return $this->view('view.mail.sendMail');
        // return $this->from(env("MAIL_FROM_ADDRESS"),env("MAIL_FROM_NAME"))
        //         ->view('view.mail.sendMail')
        //         ->with(["estudiante", $this->data]);
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
