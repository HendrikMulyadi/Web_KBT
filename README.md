# Web_KBT
<?php

// Struktur Laravel (direpresentasikan sebagai file dan konten utama)

// 1. MODEL: app/Models/Mobil.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mobil extends Model
{
    protected $fillable = [
        'merk', 'tipe', 'plat_nomor', 'harga_per_hari', 'status'
    ];
}

// 2. MIGRASI: database/migrations/xxxx_xx_xx_create_mobils_table.php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMobilsTable extends Migration
{
    public function up()
    {
        Schema::create('mobils', function (Blueprint $table) {
            $table->id();
            $table->string('merk');
            $table->string('tipe');
            $table->string('plat_nomor')->unique();
            $table->decimal('harga_per_hari', 10, 2);
            $table->enum('status', ['tersedia', 'disewa'])->default('tersedia');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('mobils');
    }
}

// 3. CONTROLLER: app/Http/Controllers/MobilController.php
namespace App\Http\Controllers;

use App\Models\Mobil;
use Illuminate\Http\Request;

class MobilController extends Controller
{
    public function index()
    {
        $mobils = Mobil::all();
        return view('mobils.index', compact('mobils'));
    }

    public function create()
    {
        return view('mobils.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'merk' => 'required',
            'tipe' => 'required',
            'plat_nomor' => 'required|unique:mobils',
            'harga_per_hari' => 'required|numeric',
        ]);

        Mobil::create($request->all());
        return redirect()->route('mobils.index')->with('success', 'Mobil berhasil ditambahkan.');
    }

    public function edit(Mobil $mobil)
    {
        return view('mobils.edit', compact('mobil'));
    }

    public function update(Request $request, Mobil $mobil)
    {
        $mobil->update($request->all());
        return redirect()->route('mobils.index')->with('success', 'Mobil berhasil diubah.');
    }

    public function destroy(Mobil $mobil)
    {
        $mobil->delete();
        return redirect()->route('mobils.index')->with('success', 'Mobil berhasil dihapus.');
    }
}

// 4. ROUTES: routes/web.php
use App\Http\Controllers\MobilController;

Route::get('/', function () {
    return redirect()->route('mobils.index');
});

Route::resource('mobils', MobilController::class);

// 5. VIEW: resources/views/layouts/app.blade.php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Rental Mobil</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="container mx-auto p-4">
        @yield('content')
    </div>
</body>
</html>

// 6. VIEW: resources/views/mobils/index.blade.php
@extends('layouts.app')

@section('content')
<h1 class="text-2xl font-bold mb-4">Daftar Mobil</h1>
<a href="{{ route('mobils.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded mb-4 inline-block">Tambah Mobil</a>
@if(session('success'))
    <div class="bg-green-100 text-green-800 p-2 rounded mb-2">{{ session('success') }}</div>
@endif
<table class="table-auto w-full bg-white rounded shadow">
    <thead>
        <tr class="bg-gray-200">
            <th class="px-4 py-2">Merk</th>
            <th class="px-4 py-2">Tipe</th>
            <th class="px-4 py-2">Plat Nomor</th>
            <th class="px-4 py-2">Harga/Hari</th>
            <th class="px-4 py-2">Status</th>
            <th class="px-4 py-2">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($mobils as $mobil)
        <tr>
            <td class="border px-4 py-2">{{ $mobil->merk }}</td>
            <td class="border px-4 py-2">{{ $mobil->tipe }}</td>
            <td class="border px-4 py-2">{{ $mobil->plat_nomor }}</td>
            <td class="border px-4 py-2">Rp{{ number_format($mobil->harga_per_hari, 0, ',', '.') }}</td>
            <td class="border px-4 py-2">{{ ucfirst($mobil->status) }}</td>
            <td class="border px-4 py-2">
                <a href="{{ route('mobils.edit', $mobil) }}" class="text-blue-500">Edit</a>
                <form action="{{ route('mobils.destroy', $mobil) }}" method="POST" class="inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="text-red-500 ml-2" onclick="return confirm('Hapus mobil ini?')">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection

// 7. VIEW: create.blade.php dan edit.blade.php serupa, dengan form input Tailwind
// Silakan lanjutkan atau minta saya lengkapi jika ingin tampilan form tambah/edit.
