<x-layouts.app>
<div class="search-section text-center py-5 bg-light">
    <h1 class="fw-bold">RENTAL MOBIL ONLINE TERBAIK</h1>
    <a href="{{url('/form')}}" class="btn btn-dark mt-3">Pesan Sekarang</a>
</div>
<div class="container">
    <div class=" container overflow-hidden">
        <div class=" row gx-2 ">
            @foreach ($mobils as $mobil)
            <div class=" col-4">
                <div class="  p-3 border border-primary border-2 rounded mt-4 ">
                    <h1 class="text-center fs-3">{{ $mobil->nama }}</h1>
                    <img src="{{ asset( 'img/'.$mobil->foto) }}" alt=" "class="img rounded mx-auto d-block mb-3">
                     {{-- <p><strong>Nomor Polisi:</strong> {{ $mobil->nopolisi }}</p> --}}
                    <div class="container ">
                        <div class="row gy-5 ">
                        <div class="col-6">
                        <p><strong>Merek:</strong> {{ $mobil->merek }}</p>
                        <p><strong>Kapasitas:</strong> {{ $mobil->Kapasitas }} orang</p>
                        </div><div class="col-6">
                        <p><strong>Jenis:</strong> {{ $mobil->jenis }}</p>
                        <p><strong>Harga:</strong> Rp{{ number_format($mobil->harga, 0, ',', '.') }} / hari</p>
                        </div></div>
                    </div>
                    <a  href="{{url('/form')}}" class="btn rounded mx-auto d-block m-3 btn-dark  " type="button">Pesan Sekarang</a>

                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
</x-layouts.app>
