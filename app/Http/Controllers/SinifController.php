<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\Sinif;


class SinifController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            "rehber_ogretmen" => "required",
            "seviye" => "required",
            "sube" => "required",
        ]);

        $sinifad = ($request->seviye . $request->sube);

        Sinif::create([
            "aciklama"=> $request->aciklama,
            "durum"=> 1,
            "rehber_ogretmen"=> $request->rehber_ogretmen,
            "seviye"=> $request->seviye,
            "sube"=> $request->sube,
            "sinif_adi"=> $sinifad,
        ]);

        return back()->with('success', 'Sınıf başarıyla eklendi.');
    }

    public function index()
    {
        $siniflar = Sinif::orderBy('seviye', 'asc')
            ->orderBy('sube', 'asc')
            ->get();

        return view('admin.siniflar', compact('siniflar'));
    }
}
