<x-layouts.app>
    <section class="hero bg-dark m-10 text-center text-white" >
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 p-5 text-start">
                    <h1 class="fw-bold">RENGO RENTAL MOBIL</h1>
                    <p class="fs-5">Rental Mobil Lepas Kunci </p>
                    <p>RenGO Rental Mobil hadir untuk memberikan pengalaman sewa mobil yang cepat, mudah, dan terpercaya.</p>
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('img/mobil.png') }}" alt="Rental Mobil" class="img-fluid ">
                </div>
            </div>
        </div>
    </section>

    {{-- TENTANG --}}
    <section class="py-5">
        <div class="container">
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
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Tambahkan interaksi jika diperlukan
        console.log('Website Woosh Rental Siap!');
    </script>
</x-layouts-app>
