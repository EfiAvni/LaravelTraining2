<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ogrenci;

class OgrenciController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'ad' => 'required',
            'soyad' => 'required',
            'sinif_id' => 'required',
            'ogrenci_no' => 'required',
            'tc_kimlik_no' => 'required|digits:11',
            'durum' => 'required'
        ]);

        Ogrenci::create([
            'ad' => $request->ad,
            'soyad' => $request->soyad,
            'sinif_id' => $request->sinif_id,
            'ogrenci_no' => $request->ogrenci_no,
            'tc_kimlik_no' => $request->tc_kimlik_no,
            'durum' => $request->durum
        ]);

        return back()->with('success', 'Öğrenci başarıyla eklendi.');

    }
}
