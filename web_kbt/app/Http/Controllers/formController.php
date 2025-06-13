<?php

namespace App\Http\Controllers;

use App\form;
use App\mobil;
use Illuminate\Http\Request;

class formController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    $mobils = mobil::all(); // Ambil semua data mobil dari database
    return view('form.index', compact('mobils'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $mobils = Mobil::all();
    return view('form.index', compact('mobils'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
      $mobil = Mobil::findOrFail($request->mobil_id);
        $total = $mobil->harga * $request->lama_sewa;

        Form::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'alamat' => $request->alamat,
            'mobil_id' => $request->mobil_id,
            'waktu' => $request->waktu,
            'pesan' => $request->pesan,
            'harga' => $mobil->harga,
            'lama_sewa' => $request->lama_sewa,
            'total' => $total,
        ]);

        return redirect('/form')->with('success', 'Form berhasil dikirim!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    public function getHargaMobil($id)
    {
        $mobil = Mobil::findOrFail($id);
        return response()->json(['harga' => $mobil->harga]);
    }
}
