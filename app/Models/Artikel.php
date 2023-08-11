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
        'slug',
        'kategori_id'
    ];

    // mendefinisikan relasi has one ke tabel kategori
    // has one = 1 artikel memiliki 1 kategori
    // has many = 1 kategori memiliki banyak artikel
    public function kategori()
    {
        return $this->hasOne(Kategori::class, 'id', 'kategori_id');
    }
}
