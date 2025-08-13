<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuestionWeight extends Model
{
    use HasFactory;
    protected $table = 'question_weights';
    public $timestamps = false;
    protected $fillable = [
        'kode_soal',
        'indikator',
        'bobot',
    ];
}
