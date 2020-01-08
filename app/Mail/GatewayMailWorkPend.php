<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class GatewayMailWorkPend extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        //
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
//        return $this->view('view.name');
        return $this->from('no-reply@disnakersolo.gov.id')
                   ->subject('PENDAFTARAN ACARA '.strtoupper($this->data['workshop']).' SUKSES!')
                   ->view('admin/content/view_email_daftar_work')
                   ->with([
                            'workshop' => $this->data['workshop'],
                            'pelamar' => $this->data['pelamar'],
                            'tanggal' => $this->data['tanggal'],
                            'kategori' => $this->data['kategori'],
                            'image' => $this->data['image'],
                            'maps' => $this->data['maps'],
                            'lokasi' => $this->data['lokasi']
                        ]);
    }
}
