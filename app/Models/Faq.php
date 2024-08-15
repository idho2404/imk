<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    use HasFactory;

    protected $table = 'faq';

    protected $fillable = ['id_layanan', 'pertanyaan', 'jawaban'];

    public function layananFaq()
    {
        return $this->belongsTo(LayananFaq::class, 'id_layanan');
    }
}
