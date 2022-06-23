<?php

namespace App\Mail;

use App\Models\Talent;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class TalentsMail extends Mailable
{
    use Queueable, SerializesModels;

    public $talent;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Talent $talent)
    {
        $this->talent = $talent;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.talents')->subject('Cadastro Banco de Talentos');
    }
}
