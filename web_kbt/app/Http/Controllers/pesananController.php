<?php

namespace App\Http\Controllers;
use App\form;
use Illuminate\Http\Request;

class pesananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $forms = form::with('mobil')->get(); // pastikan relasi 'mobil' sudah dibuat
      return view('pesanan.index', compact('forms'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
          $validated = $request->validate([
        'nama' => 'required|string',
        'mobil' => 'required|string',
        'nomor_hp' => 'required|string',
        'alamat' => 'required|string',
        'tanggal_sewa' => 'required|date',
        'lama_sewa' => 'required|integer',
        'total_harga' => 'required|string',
        'pesan' => 'nullable|string',
       
    ]);

    // $validated['status'] = 'diproses'; // status default saat pesan baru

    // Pemesanan::create($validated);

    return redirect('/pesanan')->with('success', 'Pemesanan berhasil dibuat.');
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
}
