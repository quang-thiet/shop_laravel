<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class order_comfirm extends Mailable
{
    use Queueable, SerializesModels;
    public $data_order,$data_items , $subject ;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data_order,$data_items,$subject)
    {
        $this->data_order = $data_order;
        $this->data_items = $data_items;
        $this->subject = $subject;
        $this->queue =1;
    }

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope()
    {
        return new Envelope(
            subject: $this->subject,
        );
    }

    /**
     * Get the message content definition.
     *
     * @return \Illuminate\Mail\Mailables\Content
     */
    public function content()
    {
        return new Content(
            view: 'Email.order_confirm',
            with:[
                'order' => $this->data_order,
                'items' => $this->data_items,
            ],
           
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array
     */
    public function attachments()
    {
        return [];
    }
}
