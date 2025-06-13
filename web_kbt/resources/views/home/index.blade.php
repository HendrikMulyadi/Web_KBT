<x-layouts.app>
<div class="search-section text-center py-5 bg-light">
    <h1 class="fw-bold">RENTAL MOBIL ONLINE TERBAIK</h1>
    <a href="#" class="btn btn-warning mt-3">Daftarkan Mobil</a>
</div>
<div class="container mt-5">
    <div class="row g-3 mb-4">
        <div class="col-md-4">
        <input type="text" class="form-control" placeholder="Cari nama mobil">
        </div>
        <div class="col-md-3">
            <select class="form-select">
            <option selected>Pilih Harga</option>
            <option>Rp >300.000</option>
            <option>Rp >500.000</option>
            <option>Rp >1.000.000</option>
            </select>
        </div>
        <div class="col-md-3">
        <select class="form-select">
            <option selected>Pilih Tipe Mobil</option>
            <option>MPV</option>
            <option>SUV</option>
            <option>Minibus</option>
        </select>
        </div>
        <div class="col-md-2">
            <button class="btn btn-danger w-100">Cari Mobil</button>
        </div>
    </div>
        <p id="no-results" class="text-muted text-center" style="display: none;">Mobil tidak ditemukan.</p>
        <div class="row gx-2">
            @foreach($mobils as $mobil)
            <div class="col-4">
                <div class="card flex h-10 w-10 shadow-sm">
                        <img src="{{asset (('img/').$mobil->foto) }}" class="card-img-top ft">
                        <div class="card-body">
                            <h5 class="card-title text-center"><strong>{{ $mobil->nama }}</strong></h5>
                            <p class="card-text text-center"><strong>🚗 {{ $mobil->merek }} | 📍 {{ $mobil->harga }}</strong></p>
                            <p class="card-text"><strong>Harga mulai Rp{{ number_format((int) $mobil->harga, 0, ',', '.') }} / hari</strong></p>
                            <a href="{{ url('/form') }}" class="btn rounded mx-auto d-block m-3 btn-primary">Pesan Sekarang</a>
                        </div>
                </div>
            </div>
            @endforeach
        </div>
</div>

  <!-- Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="/js/rental.js"></script>
</x-layouts.app>
