<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class OrderMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $total = '';
    public $address = '';
    public $shipping ='';
    public function __construct($total, $address ,$shipping)
    {
    
        $this->total = $total;
        $this->address = $address;
        $this->shipping =$shipping;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $total = '';
        $address = '';
        $shipping = '';
        return $this->subject('New Order Placement')->view('emails.order', compact('total','address','shipping'));
    }
}
