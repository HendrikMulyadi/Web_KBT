<?php

namespace App\Http\Controllers;

use App\mobil;
use Illuminate\Http\Request;

class homeController extends Controller
{
     public function index()
    {
        //
         $mobils = mobil::all();
        return view('home.index', compact('mobils'));
    }
    public function show($id)
{
    $mobil = Mobil::findOrFail($id);
    return view('mobils.show', compact('mobils'));
}
}
