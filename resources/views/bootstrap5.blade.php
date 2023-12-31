<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    @livewireStyles
  </head>
  <body>
    <nav class="navbar nav-underline bg-white navbar-expand-lg">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"><i class="bi bi-windows"></i> Presensi App</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
              <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5>
              <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
              <ul class="navbar-nav justify-content-start align-items-center flex-grow-1 pe-3">
                <li class="nav-item">
                  <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" href="{{ url('dashboard') }}">Dashboard</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link {{ Request::is('jabatan') ? 'active' : '' }}" href="{{ url('jabatan') }}">Jabatan</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link {{ Request::is('karyawan') ? 'active' : '' }}" href="{{ url('karyawan') }}">Karyawan</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link {{ Request::is('profil') ? 'active' : '' }}" href="{{ url('profil') }}">Profil</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Dropdown
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li>
                      <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                  </ul>
                </li>
              </ul>
              <form class="d-flex mt-3" action="{{ route('logout') }}" method="post">
                @csrf
                <button class="btn btn-outline-danger rounded-circle" type="submit"><i class="bi-power"></i></button>
              </form>
            </div>
          </div>
        </div>
      </nav>
      <section id="profil" class="container d-flex align-items-center">
        <img src="{{ asset('storage/'.Auth::user()->avatar) ?? asset('no-profil.png') }}" style="width: 45px;aspect-ratio:1/1" class="rounded-circle" >
        <h4 class="lead text-uppercase ms-2">{{ Auth::user()->name }}</h4>
      </section>
    <main>
      @yield('konten')
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    @livewireScripts
  </body>
</html>