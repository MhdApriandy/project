
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>LKP Media Com - Binjai</title>

  <!-- Bootstrap core CSS -->
  <link href="{{ asset('user/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

  <!-- Custom fonts googleapis for this template -->
  <link href="{{ asset('user/vendor/googleapis/open-sans.css')}}" rel="stylesheet">
  <link href="{{ asset('user/vendor/googleapis/josefin-slab.css')}}" rel="stylesheet">
  <link href="{{ asset('admin/vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template -->
  <link href="{{ asset('user/css/business-casuals.css')}}" rel="stylesheet">
  <style type="text/css">
  body {
    font-family: "Open Sans", Helvetica, Arial, sans-serif;
    background: url('{{ asset('user/img/com.jpg')}}') no-repeat center center fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    background-size: cover;
    -o-background-size: cover;
  }
</style>
</head>

<body>
  <div class="tagline-upper text-center text-heading text-shadow text-white mt-5 d-none d-lg-block">Media Com</div>
  <div class="tagline-lower text-center text-expanded text-shadow text-uppercase text-white mb-5 d-none d-lg-block">Jln. Danau Baratan I | Binjai | 061-8820365</div>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light bg-faded py-lg-4">
    <div class="container">
      <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="#">LKP Media Com</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="{{ route('beranda.index')}}">Beranda
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item px-lg-4 dropdown">
            <a class="nav-link text-uppercase text-expanded dropdown-toggle" data-toggle="dropdown" href="#">Profil<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li class="nav-item px-lg-4"><a href="{{ route('kata_pengantar.index')}}" class="nav-link text-uppercase text-expanded">Kata Pengantar</a></li>
              <li class="nav-item px-lg-4"><a href="{{ route('visi_misi.index')}}" class="nav-link text-uppercase text-expanded">Visi Misi</a></li>
              <li class="nav-item px-lg-4"><a href="{{ route('struktur.index')}}" class="nav-link text-uppercase text-expanded">Struktur</a></li>
            </ul>
          </li>
          <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="{{ route('galeri.index')}}">Galeri</a>
          </li>
          <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="{{ route('info.index')}}">Info</a>
          </li>
          <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="{{ route('e_book.index')}}">E-Book</a>
          </li>
          <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="{{ route('pendaftaran.create')}}">Pendaftaran</a>
          </li>
          <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="{{ route('hubungi_kami.index')}}">Hubungi Kami</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container">

    @yield('content')

  </div>
  <!-- /.container -->

  <footer class="bg-faded  py-3">
    <div class="container">
      <div class="text-center">
        <a href="#" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>&nbsp;
        <a href="#" target="_blank"><i class="fa fa-whatsapp" aria-hidden="true"></i></a>&nbsp;
        <a href="#" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>&nbsp;
        <a href="#1234567890" oninvalid=""><i class="fa fa-phone" aria-hidden="true"> 1234567890</i></a></div>
        <div class="m-0 text-center">Copyright &copy; LKP Media Com 2018</div>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="{{ asset('user/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{ asset('user/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

  </body>

  </html>
