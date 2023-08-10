<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    use HasFactory;

    // mendefinisikan nama table yang akan digunakan
    protected $table = 'artikel';

    // mendefinisikan kolom yang dapat diisi
    protected $fillable = [
        'judul',
        'tanggal',
        'thumbnail',
        'isi',
        'slug'
    ];
}
