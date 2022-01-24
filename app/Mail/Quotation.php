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
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        $file = \Storage::path($this->payment->photo);

        return $this->from('mail@gmail.com')
                    ->markdown('emails.payment')
                    ->with([
                        'name'          => $this->payment->name,
                        'amount'        => $this->payment->amount,
                        'bank'          => $this->payment->bank,
                        'transfer_date' => $this->payment->transfer_date
                    ])
                    ->attach($file);
    


        // return $this->markdown('emails.quotationMail');


    }
}
