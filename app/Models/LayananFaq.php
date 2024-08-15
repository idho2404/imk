<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LayananFaq extends Model
{
    use HasFactory;

    protected $table = 'layanan_faq';

    protected $fillable = ['layanan'];

    public function faqs()
    {
        return $this->hasMany(Faq::class, 'id_layanan');
    }
}
