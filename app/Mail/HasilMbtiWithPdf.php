<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class HasilMbtiWithPdf extends Mailable
{
    public $nama;
    public $tipe;
    public $pdfPath;

    public function __construct($nama, $tipe, $pdfPath)
    {
        $this->nama = $nama;
        $this->tipe = $tipe;
        $this->pdfPath = $pdfPath;
    }

    public function build()
    {
        return $this->subject('Hasil Tes MBTI Anda')
            ->view('emails.pdfhasilmbti') // text ringan saja
            ->attach($this->pdfPath, [
                'as' => 'Hasil-MBTI-Anda.pdf',
                'mime' => 'application/pdf',
            ]);
    }
}
