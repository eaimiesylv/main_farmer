<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Crypt;

class WelcomeMail extends Mailable
{
    use Queueable, SerializesModels;

    public $hash;
    public $url;
    public $type;
    public function __construct($hash,$type)
    {
       $this->hash=$hash; 
       $this->type=$type;
       $frontend_url = config('app.frontend_url');
       $this->url="{$frontend_url}/$hash";
    
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
       
        return new Envelope(
            subject: 'Welcome Mail',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        if($this->type == 'retail_customer'){
            $template='mail.retail_customer';
           
        }else{
            $template='mail.franchisee'; 
        }
        return new Content(
          $template
           // 'mail.welcome'
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
