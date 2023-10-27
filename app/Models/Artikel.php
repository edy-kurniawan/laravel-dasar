<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    use HasFactory;

    // Mendefinisikan nama table
    protected $table = 'artikel';

    // Mendefinisikan kolom yang bisa diisi
    protected $fillable = [
        'judul',
        'tanggal',
        'slug',
        'thumbnail',
        'isi',
    ];
}
