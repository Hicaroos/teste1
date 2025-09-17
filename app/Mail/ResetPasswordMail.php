<?php
namespace App\Mail;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ResetPasswordMail extends Mailable
{
    use Queueable, SerializesModels;

    public string $resetUrl;

    public function __construct(string $token)
    {

        $this->resetUrl = route('password.reset', ['token' => $token]);
    }

    public function envelope(): Envelope
    {
        return new Envelope(subject: 'Redefinição de Senha');
    }

    public function content(): Content
    {
    
        return new Content(view: 'emails.password-reset');
    }
}