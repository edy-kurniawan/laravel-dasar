<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    use HasFactory;

    // tabel yang digunakan
    protected $table = 'artikel';

    // kolom yang dapat diisi
    protected $fillable = [
        'judul',
        'tanggal',
        'thumbnail',
        'slug',
        'isi',
    ];
}

// model laravel itu mengadopsi konsep jamak
// 1 siswa => student, banyak siswa => students
// artikel => artikels
