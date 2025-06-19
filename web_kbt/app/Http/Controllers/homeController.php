<?php

namespace App\Http\Controllers;

use App\mobil;
use Illuminate\Http\Request;

class homeController extends Controller
{
     public function index(Request $request)
    {
        //
         $mobils = mobil::all();

         $query = mobil::query();

    if ($request->filled('nama')) {
        $query->where('nama', 'like', '%' . $request->nama . '%');
    }

    if ($request->filled('harga')) {
        $harga = (int) str_replace('.', '', $request->harga); // jika dari dropdown manual
        $query->where('harga', '>', $harga);
    }

    if ($request->filled('jenis') && $request->jenis != 'Pilih Tipe Mobil') {
        $query->where('jenis', 'like', '%' . $request->jenis . '%');
    }

    $mobils = $query->get();

    return view('home.index', compact('mobils'));
       // return view('home.index', compact('mobils'));

    }
    public function show($id)
{
    $mobil = Mobil::findOrFail($id);
    return view('mobils.show', compact('mobils'));
}
}
