<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HasilMBTI extends Model
{
    use HasFactory;
    protected $table = 'hasil_mbti';
    protected $primaryKey = 'id';
    const CREATED_AT = 'created_at';
    public $timestamps = false;    
    protected $fillable = [
        'pengguna_id',
        'nilai_I',
        'nilai_E',
        'nilai_S',
        'nilai_N',
        'nilai_T',
        'nilai_F',
        'nilai_J',
        'nilai_P',
        'hasil_tipe'// contoh: 'ENTP'
    ];
    public function pengguna()
    {
        return $this->belongsTo(Pengguna::class);
    }
}
