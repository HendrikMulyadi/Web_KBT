<header>
    <!-- Bootstrap 5 Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
   <div class="container " style="height: 80px">
    <div class="container-fluid d-flex flex-row">
    <h1 class="navbar-brand text-primary fs-2 "  href="#">RenGo</h1>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class=" flex collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active fs-5" aria-current="page" href="{{ url('/home') }}">Beranda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active fs-5" href="{{ url('/tentang') }}">Tentang</a>
        </li>
         <li class="nav-item">
          <a class="nav-link active fs-5" href="{{ url('/layanan') }}">Layanan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active fs-5" href="{{ url('/kendaraan') }}">Mobil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active fs-5" href="{{ url('/kontak') }}">Kontak</a>
        </li>
      </ul>
    </div>
  </div></div>
</nav>

</header>
