<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Quotation extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->user = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        
        return $this->from('dont-reply@prajamitramandiri.com')
                ->markdown('emails.quotationMail')
                ->attachFromStorage($this->user['lampiran'])
                ->with([
                        'nama' => $this->user['nama'],
                        'email' => $this->user['email'],
                        'perusahaan' => $this->user['perusahaan'],
                        'phone' => $this->user['phone'],
                        'service' => $this->user['service'],
                        // 'lampiran' => $this->user['lampiran'],
                        'pesan' => $this->user['pesan']
                    ]);
    }
    
}
