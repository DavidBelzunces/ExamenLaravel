<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Maileable extends Mailable
{
    use Queueable, SerializesModels;


    public $mensaje;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($mensaje)
    {
        $this->$mensaje = $mensaje;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build($mensaje)
    {
        return $this->view('mailRecibido');
    }
}