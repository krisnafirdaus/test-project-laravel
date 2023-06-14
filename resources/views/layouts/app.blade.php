<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <title>Perusahaan Pembelajaran Stir Mobil</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container">
        <a class="navbar-brand" href="#">Perusahaan Pembelajaran Stir Mobil</a>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="/jadwal">Jadwal</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/paketjasa">Paket Jasa</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/trainer">Trainer</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/">Kendaraan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/perusahaan">Perusahaan</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <main class="py-4">
        @yield('content')
    </main>

    <footer class="footer mt-auto py-3 bg-light">
      <div class="container text-center">
        <span class="text-muted">&copy; 2023 Perusahaan Pembelajaran Stir Mobil</span>
      </div>
    </footer>

    <!-- Bootstrap JavaScript -->
    <script src="{{ asset('js/app.js') }}"></script>
  </body>
</html>
