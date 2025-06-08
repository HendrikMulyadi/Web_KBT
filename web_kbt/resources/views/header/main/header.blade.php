<header>
      <nav class="navbar navbar-expand-lg bg-light ">
        <div class="container-fluid ">
          <a class="navbar-brand" >
          <img class="gambarnav" src="{{url('storage/img/STT-CIPASUNG.png')}}" alt="">
          <img class="gambarnav1" src="{{url('storage/img/merdeka.png')}}" alt="">
          <button class ="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
           aria-controls="navbarSupportedContent" aria-expanded="true" aria-label="Toggle navigation">
          <i class="bx bx-menu"></i></button>
          <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <ul  class="navbar-nav mb-2 mb-lg-0 ">
              <li class="nav-item">
                <a class="nav-link active" id="headerHome" aria-current="page" href="{{ url('/home') }}">Home</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Tentang STTC </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="{{ url('/profile') }}">Profil Kampus</a></li>
                  <li><a class="dropdown-item" href="{{ url('/visimisi') }}">Visi Misi</a></li>
                  <li><a class="dropdown-item" href="{{ url('/fasilitas') }}">Fasilitas</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link active" aria-current="page" href="{{ url('/pendaftaran') }}">Pendaftaran </a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" data-bs-auto-close="outside" data-bs-toggle="dropdown" >
                  Pendidikan
                </a>
                <ul class="dropdown-menu">

                  <li class="dropend">
                    <a class="dropdown-item dropdown-toggle mr" href="program.html"  data-bs-toggle="dropdown" >Program Studi</a>
                       <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{ url('/informatika') }}">Informatika</a></li>
                        <li><a class="dropdown-item" href="{{ url('/industri') }}">Teknik Industri</a></li>
                       </ul>
                  </li>
                  <li><a class="dropdown-item" href="{{ url('/aktivitas') }}">Aktivitas</a></li>
                  <li><a class="dropdown-item" href="{{ url('/akreditasi') }}">Akreditasi</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Mahasiswa
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="{{ url('/himpunan') }}">Himpunan</a></li>
                  <li><a class="dropdown-item" href="{{ url('/ukm') }}">UKM STTC</a></li>
                </ul>
              </li>
            </ul>
          </div></div>
        </div>
      </nav>
    </header>
