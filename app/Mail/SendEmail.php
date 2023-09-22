<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class SendEmail extends Mailable
{
    use Queueable, SerializesModels;
    public $data = [];
    /**
     * Create a new message instance.
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    public function build()
    {
        $subject = $this->data['subject'];
        $from_email = $this->data['email'];
        $from_name = $this->data['name'];
        $message = $this->data['message'];
        $attachment = $this->data['attachment'];
        
        $email = $this->from($from_email, $from_name)
                ->to('yourmurti@gmail.com')
                ->subject($subject." | ".$from_email)
                ->view('Mail')
                ->with('message', $message);
        if ($attachment) {
            $email->attach($attachment->getRealPath(), [
            'as' => $attachment->getClientOriginalName(),
            'mime' => $attachment->getClientMimeType(),
            ]);
        }    
        return $email;
    }
    /**
     * Get the message envelope.
     */
    // public function envelope(): Envelope
    // {
    //     return new Envelope(
    //         subject: 'Send Email',
    //     );
    // }

    // /**
    //  * Get the message content definition.
    //  */
    // public function content(): Content
    // {
    //     return new Content(
    //         view: 'view.name',
    //     );
    // }

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
