<x-layouts.app>
<div class="search-section text-center py-5 bg-light">
    <h1 class="fw-bold">RENTAL MOBIL ONLINE TERBAIK</h1>
    <a href="#" class="btn btn-warning mt-3">Daftarkan Mobil</a>
</div>
<div class="container">
  <div class="row row-cols-2 row-cols-lg-3 g-2 g-lg-3">
    <div class="col">
    @foreach ($mobils as $mobil)
  <div class="col">
      <div class="p-3 border mt-4 bg-light">
         <h1>{{ $mobil->nama }}</h1>
         <img src="{{ asset('storage/img/' . $mobil->Foto) }}" alt="{{ $mobil->nama }}" class="img-fluid mb-3">
         <p><strong>Nomor Polisi:</strong> {{ $mobil->nopolisi }}</p>
         <p><strong>Merek:</strong> {{ $mobil->merek }}</p>
         <p><strong>Jenis:</strong> {{ $mobil->jenis }}</p>
         <p><strong>Kapasitas:</strong> {{ $mobil->kapasitas }} orang</p>
         <p><strong>Harga:</strong> Rp{{ number_format($mobil->harga, 0, ',', '.') }} / hari</p>
      </div>
  </div>
  @endforeach
    </div>
    <div class="col">
      <div class="p-3 border bg-light">Row column</div>
    </div>
    <div class="col">
      <div class="p-3 border bg-light">Row column</div>
    </div>
    <div class="col">
      <div class="p-3 border bg-light">Row column</div>
    </div>
    <div class="col">
      <div class="p-3 border bg-light">Row column</div>
    </div>
    <div class="col">
      <div class="p-3 border bg-light">Row column</div>
    </div>
    <div class="col">
      <div class="p-3 border bg-light">Row column</div>
    </div>
    <div class="col">
      <div class="p-3 border bg-light">Row column</div>
    </div>
    <div class="col">
      <div class="p-3 border bg-light">Row column</div>
    </div>
    <div class="col">
      <div class="p-3 border bg-light">Row column</div>
    </div>
  </div>

</div>
</x-layouts.app>
