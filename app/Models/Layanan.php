<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Layanan extends Model
{
    use HasFactory;

    public $incrementing = true;
    protected $table = 'layanan';
    public $timestamps = false;
    protected $keyType = 'string';

    protected $fillable = [
        'id',
        'icon',
        'judul_layanan',
        'deskripsi',
        'slug',
        'persyaratan',
        'mekanisme_prosedur',
        'waktu_penyelesaian',
        'biaya_tarif',
        'produk_pelayanan'
    ];
}
