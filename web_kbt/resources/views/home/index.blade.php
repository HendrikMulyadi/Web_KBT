<x-layouts.app>
  <!-- Hero / Search Bar -->
  <div class="search-section text-center py-5 bg-light">
    <h1 class="fw-bold">RENTAL MOBIL ONLINE TERBAIK</h1>
    <a href="#" class="btn btn-warning mt-3">Daftarkan Mobil</a>
  </div>

  <div class="container mt-5">
    <!-- Search Filters -->
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
          <option>City Car</option>
        </select>
      </div>
      <div class="col-md-2">
        <button class="btn btn-danger w-100">Cari Mobil</button>
      </div>
    </div>

    <!-- Card List -->
    <div class="row">
      <!-- No results message -->
      <p id="no-results" class="text-muted text-center" style="display: none;">Mobil tidak ditemukan.</p>

      @foreach($mobils as $mobil)
        <div class="col-md-4 venue-card">
          <div class="card h-100 shadow-sm">
            <img src="{{url('/storage/img/Image.png') .$mobil->Foto }}" class="card-img-top" alt="{{ $mobil->nama }}">
            <div class="card-body">
              <h5 class="card-title">{{ $mobil->nama }}</h5>
              <p class="card-text">🚗 {{ $mobil->merek }} | 📍 {{ $mobil->harga }}</p>
              <p class="card-text">Harga mulai <strong>Rp{{ number_format((int) $mobil->harga, 0, ',', '.') }} / hari</p>
              <a href="{{ route('mobils.show', $mobil->id) }}" class="btn btn-primary">Lihat Detail</a>
            </div>
          </div>
        </div>
      @endforeach
      <div class="container mt-4">
         <h1>{{ $mobil->nama }}</h1>
         <img src="{{url('/storage/img/Image.png'). $mobil->foto }}" alt="{{ $mobil->nama }}" class="img-fluid mb-3">
         <p><strong>Nomor Polisi:</strong> {{ $mobil->nopolisi }}</p>
         <p><strong>Merek:</strong> {{ $mobil->merek }}</p>
         <p><strong>Jenis:</strong> {{ $mobil->jenis }}</p>
        <p><strong>Kapasitas:</strong> {{ $mobil->Kapasitas }} orang</p>
        <p><strong>Harga:</strong> Rp{{ number_format($mobil->harga, 0, ',', '.') }} / hari</p>
       </div>
    </div>
  </div>

  <!-- Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="/js/rental.js"></script>
</x-layouts.app>
