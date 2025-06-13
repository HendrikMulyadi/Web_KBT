<x-layouts.app>
<div class="search-section ii text-center py-5 ">
    <h1 class="fw-bold">RENTAL MOBIL ONLINE TERBAIK</h1>
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
    <div>
        <p id="no-results" class="text-muted text-center" style="display: none;">Mobil tidak ditemukan.</p>
    </div>
    <div class="row gx-2">
            @foreach($mobils as $mobil)
            <div class="col-4 mt-3">
                <div class="card venue-card flex h-10 w-10 shadow-sm">
                        <img src="{{asset (('img/').$mobil->foto) }}" class="card-img-top img-fluid d-block mx-auto" style="width: 250px; height: 150px; object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title text-center fs-3"><strong>{{ $mobil->nama }}</strong></h5>
                            <p class="card-text text-center"><strong>🚗 {{ $mobil->merek }} |  {{ $mobil->Kapasitas }} Orang</strong></p>
                            <p class="card-text text-center"><strong>Harga mulai Rp{{ number_format((int) $mobil->harga, 0, ',', '.') }} / hari</strong></p>
                            <a href="{{ url('/form') }}" class="btn rounded mx-auto d-block m-3 btn-primary">Pesan Sekarang</a>
                        </div>
                </div>
            </div>
            @endforeach
    </div>
    <section class="py-5">
            <div class="row align-items-center mb-5">
                <div class="col-md-6">
                    <img src="{{ asset('img/kami.jpg') }}" class="img-fluid rounded" alt="Tim ">
                </div>
                <div class="col-md-6">
                    <h2 class="section-title text-center border-bottom pb-2 mb-3">Tentang RenGO Rental Mobil</h2>
                    <p><strong>RenGO Rental Mobil: Terpercaya dan Berkualitas</strong></p>
                    <p>Percayakan perjalanan Anda pada RenGo Rental Mobil. Kami menyediakan mobil Avanza, Hiace, Fortuner VRZ, dan Pajero dengan harga kompetitif.</p>

                </div>
            </div>

            <div class="row align-items-center">
                <div class="col-md-6">
                    <h3 class="section-title border-bottom pb-2 mb-3">Sejarah RenGo Rental Mobil</h3>
                    <p>Berawal dari tugas matakuliah Kewirausahaan Berbasis Teknologi, kami telah berkembang jadi penyedia rental mobil unggulan. Kami terus meningkatkan kualitas armada dan layanan.</p>
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('img/mobil.png') }}" class="img-fluid h-100 w-100 rounded" alt="">
                </div>
            </div>
            <div class="text-center mb-5 ">
        <h2 class="fw-bold">Layanan RenGo</h2>
        <p class="text-muted">Kami memberikan layanan, untuk memudahkan Anda dalam sewa mobil terdekat dengan stasiun kereta ataupun terminal bus.</p>
        <hr class="w-25 mx-auto border-2 border-dark">
            </div>

    <div class="row align-items-center mb-5">
        <div class="col-md-5 text-center">
            <img src="{{ asset('img/lepaskonci.jpg') }}" alt="Rental Mobil" class="img-fluid rounded">
        </div>
        <div class="col-md-7">
            <h4 class="fw-bold">Rental Mobil Lepas Kunci </h4>
            <p> Nikmati kemudahan dan fleksibilitas berkendara dengan layanan rental mobil lepas kunci dari kami.
                <strong class="text-primary">Tidak perlu repot dengan proses yang berbelit-belit</strong>,
                Anda bisa langsung membawa pulang mobil impian Anda. Cocok untuk perjalanan bisnis, liburan keluarga, atau kebutuhan pribadi lainnya.
            </p>

        </div>
    </div>

    <div class="row align-items-center mb-5 flex-md-row-reverse">
        <div class="col-md-5 text-center">
            <img src="{{ asset('img/wedding.jpg') }}" alt="Wedding Car" class="img-fluid rounded">
        </div>
        <div class="col-md-7">
            <h4 class="fw-bold">Paket Wedding Car</h4>
            <p> Buat momen pernikahan Anda semakin berkesan dengan layanan wedding car eksklusif dari kami. Kami menyediakan berbagai pilihan mobil mewah dan elegan untuk membuat hari spesial Anda sempurna.</p>

        </div>
    </div>

    <div class="row align-items-center mb-5">
        <div class="col-md-5 text-center">
            <img src="{{ asset('img/stasion.jpg') }}" alt="Bandara" class="img-fluid rounded">
        </div>
        <div class="col-md-7">
            <h4 class="fw-bold">Paket Jemput/Drop Stasiun atau terminal</h4>
            <p>Singkatkan perjalanan Anda dan nikmati kenyamanan maksimal dengan layanan jemput dan antar stasiun ataupun termina dari kami. Kami akan menjemput Anda tepat waktu dan mengantar Anda ke tujuan dengan aman dan nyaman.</p>

        </div>
    </div>
    <div class="row align-items-center mb-5 flex-md-row-reverse">
        <div class="col-md-5 text-center">
            <img src="{{ asset('img/sopir.png') }}" alt="Wedding Car" class="img-fluid rounded">
        </div>
        <div class="col-md-7">
            <h4 class="fw-bold">Paket Supir Propesional</h4>
            <p> Nikmati Perjalanan Lebih Nyaman Bersama Sopir Berpengalaman Kami Tidak ingin repot menyetir sendiri?</p>
            <p>Tenang, kami menyediakan layanan sewa mobil lengkap dengan sopir profesional yang ramah, tepat waktu, dan sudah berpengalaman dalam melayani pelanggan di berbagai kebutuhan. Mulai dari perjalanan bisnis, kunjungan keluarga, hingga city tour Tasikmalaya dan sekitarnya.</p>
        <li class="i">✅ Sopir ramah dan sopan</li>
        <li class="i">✅ Mengetahui rute terbaik & tercepat</li>
        <li class="i">✅ Siap antar jemput ke mana pun Anda butuh</li>
        <li class="i">✅ Cocok untuk perjalanan dinas, wisata, hingga acara penting</li>

        </div>
    </div>

</div>

  <!-- Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="/js/rental.js"></script>
</x-layouts.app>
