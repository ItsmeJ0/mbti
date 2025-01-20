<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
    use HasFactory;
    
    protected $table = 'pengguna';
    protected $primaryKey = 'id';
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
    protected $fillable = [
        'nama',
        'E',
        'I',
        'N',
        'S',
        'T',
        'F',
        'J',
        'P',
        'hasil',
    ];
    public static function SimpanData($jawabanI)
    {}
}
