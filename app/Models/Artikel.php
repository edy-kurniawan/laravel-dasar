<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    use HasFactory;

    // inisialisasi nama tabel
    protected $table = 'artikel';

    // inisialisasi kolom yang bisa diisi
    protected $fillable = [
        'judul',
        'tanggal',
        'thumbnail',
        'slug',
        'isi',
    ];
}
