<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class HasilMbtiMail extends Mailable
{
    use Queueable, SerializesModels;

    public $nama;
    public $tipembti;
    public $jurusan_ukdc;
    public $jurusan;
    public $pdfPath;

    public function __construct($nama, $tipembti, $jurusan_ukdc, $jurusan, $pdfPath)
    {
        $this->nama = $nama;
        $this->tipembti = $tipembti;
        $this->jurusan_ukdc = $jurusan_ukdc;
        $this->jurusan = $jurusan;
        $this->pdfPath = $pdfPath;
    }

    public function build()
    {
        return $this->subject('Hasil Tes MBTI Anda')
            ->view('emails.hasilmbti') // text ringan saja
            ->attach($this->pdfPath, [
                'as' => 'Hasil-MBTI-Anda.pdf',
                'mime' => 'application/pdf',
            ]);
    }
}
