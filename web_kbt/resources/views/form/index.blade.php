<x-layouts.app>
    <div class=" mb-5 fw-bold mt-5 bc-primary-rgb" style=""><h2 class="text-center">PEMESANAN RENTAL MOBIL</h2>
    <h1 class="text-center text-primary" style="font:bold  " >RenGO</h1></div>

<div class="container my-5">

        @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
        @endif
    <div class="row align-items-start">
        <div class="col">
            <div>
            <h3> Rental Mobil  Dan Terpercaya</h3>
            <h5>Pilihan pertama rental mobil RenGo hadir untuk memberikan pelayanan terbaik dalam perjalanan Anda dengan puluhan armada yang prima dan berkualitas.</h5>
            <h5 class="h55 mt-3"> Persyaratan Utama:</h5>
            <ul class="lii">
                <li > Memiliki KTP</li>
                <li> Memiliki SIM A Aktip</li>
                <li> KTM ( Bagi Mahasiswa)</li>
            </ul>
            <h5 class="h55"> Persyaratan Khusus Untuk Sewa Lepas Kunci</h5>
            <ul class="lii">
                <li> Poto Copy KTP / SIM</li>
                <li> Poto Copy KTM untuk Mahasiswa</li>
            </ul>
            </div>
        </div>
        <div class="col">
            <form class="row" action="{{ route('forms.store') }}" method="POST">
            @csrf
                <div class="mb-3">
                  <label for="name" class="form-label">Nama</label>
                  <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="mb-3">
                 <label for="phone" class="form-label">Nomor HP</label>
                 <input type="text" class="form-control" id="phone" name="phone" required>
                </div>
                <div class="mb-3">
                  <label for="alamat" class="form-label">Alamat</label>
                  <input type="text" class="form-control" id="alamat" name="alamat" required>
                </div>
                <div class="mb-3">
                   <label for="mobil_id" class="form-label">Pilih Mobil</label>
                   <select name="mobil_id" id="mobil_id" class="form-select" required>
                   <option disabled selected>-- Pilih Mobil --</option>
                   @foreach ($mobils as $mobil)
                     <option value="{{ $mobil->id }}">{{ $mobil->nama }}</option>
                   @endforeach
                   </select>
                </div>
                <div class="mb-3">
                  <label for="waktu" class="form-label">Tanggal Mulai Sewa</label>
                <input type="date" class="form-control" id="waktu" name="waktu" required>
                </div>
                <div class="mb-3">
                     <label for="lama_sewa" class="form-label">Lama Sewa</label>
                    <select class="form-select" id="lama_sewa" name="lama_sewa" required>
                    <option disabled selected>Pilih durasi</option>
                    @for($i = 1; $i <= 6; $i++)
                     <option value="{{ $i }}">{{ $i }} Hari</option>
                    @endfor
                    <option value="7">1 Minggu</option>
                    </select>
                </div>
                <div class="mb-3">
                   <label class="form-label">Harga Per Hari</label>
                   <input type="text" class="form-control" id="harga" readonly>
                </div>
                <div class="mb-3">
                   <label class="form-label">Total Harga</label>
                   <input type="text" class="form-control" id="total" readonly>
                </div>

                <div class="mb-3">
                    <label for="pesan" class="form-label">Pesan Tambahan</label>
                    <textarea class="form-control" id="pesan" name="pesan" rows="3"></textarea>
                </div>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end"><button type="submit" class="btn btn-dark">Kirim Pemesanan</button></div>
            </form>
        </div>
    </div>
</div>

  <script>
    document.addEventListener("DOMContentLoaded", function () {
      const mobilSelect = document.getElementById("mobil_id");
      const hargaInput = document.getElementById("harga");
      const lamaSewaSelect = document.getElementById("lama_sewa");
      const totalInput = document.getElementById("total");

      let hargaMobil = 0;

      mobilSelect.addEventListener("change", function () {
        fetch(`/mobil/${this.value}/harga`)
          .then(response => response.json())
          .then(data => {
            hargaMobil = data.harga;
            hargaInput.value = "Rp" + hargaMobil.toLocaleString("id-ID");
            hitungTotal();
          });
      });

      lamaSewaSelect.addEventListener("change", function () {
        hitungTotal();
      });

      function hitungTotal() {
        const lama = parseInt(lamaSewaSelect.value);
        if (hargaMobil && lama) {
          const total = hargaMobil * lama;
          totalInput.value = "Rp" + total.toLocaleString("id-ID");
        }
      }
    });
  </script>
</x-layouts.app>
