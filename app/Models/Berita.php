<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use HasFactory;

    public $incrementing = false;
    protected $table = 'berita';
    public $timestamps = false;
    protected $keyType = 'string';

    protected $fillable = [
        'id',
        'judul',
        'kategori_berita_id',
        'tanggal_berita',
        'tumbnail_berita',
        'narasi_berita',
        'klik',
        'author'
    ];

    public function kategoriBerita()
    {
        return $this->belongsTo(KategoriBerita::class, 'kategori_berita_id');
    }
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
