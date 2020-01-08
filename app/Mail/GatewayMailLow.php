<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class GatewayMailLow extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('no-reply@disnakersolo.gov.id')
               ->subject('PENDAFTARAN LOWONGAN '.strtoupper($this->data['perusahaan']).' SUKSES!')
               ->view('admin/content/view_email_daftar_low')
               ->with([
                        'perusahaan' => $this->data['perusahaan'],
                        'pelamar' => $this->data['pelamar'],
                        'posisi' => $this->data['posisi'],
                        'gaji' => $this->data['gaji'],
                        'image' => $this->data['image'],
                        'email' => $this->data['email']
                    ]);

    }
}
