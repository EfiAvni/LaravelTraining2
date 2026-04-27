<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ogrenci extends Model
{
    protected $table = 'ogrenciler';

    protected $fillable = [
        'ad',
        'soyad',
        'sinif_id',
        'ogrenci_no',
        'tc_kimlik_no',
        'durum'
    ];
}
