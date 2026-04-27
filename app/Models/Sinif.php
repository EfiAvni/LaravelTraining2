<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sinif extends Model
{
    protected $table = 'siniflar';

    protected $fillable = [
        'sinif_adi',
        'rehber_ogretmen',
        'seviye',
        'durum',
        'sube',
        'aciklama'
    ];
}
