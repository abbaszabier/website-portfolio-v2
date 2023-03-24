<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>

    <!-- Tailwind CSS -->
    {{-- <link rel="stylesheet" href="{{ asset('css/tailwindcss.css') }}"> --}}

    <!-- My CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/skins/color-1.css') }}">

    <title>Abbaszabier | {{ $title }}</title>
  </head>
  <body>
    <!-- Main Container Start -->
    <div class="main-container">
        <!-- Aside Start -->
        @include('partials.navbar')
        <!-- Aside End -->
        <!-- Main Content Start -->
        <div class="main-content" style="background-color: aqua">
            <!-- Home Section Start -->
              <section class="home section" id="homes">
                  <div class="container-sm ">
                      @yield('main')
                  </div>
              </section>
              <div class="nav-bottom">
                  <a href="/" class="{{ ($title==="Home") ? 'active' :'' }}"><i class="{{ ($title==="Home") ? 'bi bi-house-fill' :'bi bi-house' }}"></i></a>
                  <a href="/about"class="{{ ($title==="About") ? 'active' :'' }}"><i class="{{ ($title==="About") ? 'bi bi-person-fill' :'bi bi-person' }}" ></i></a>
                  <a href="/services"class="{{ ($title==="Services") ? 'active' :'' }}"><i class=" {{ ($title==="Services") ? '<bi bi-file-earmark-text-fill' :'bi bi-file-earmark-text' }}"></i> </a>
                  <a href="/portfolio" class="{{ ($title==="Portfolio") ? 'active' :'' }}"><i class="{{ ($title==="Portfolio") ? 'bi bi-grid-fill' :'bi bi-grid' }}"></i></a>
                  <a href="/contact" class="{{ ($title==="Contact") ? 'active' :'' }}"><i class="{{ ($title==="Contact") ? 'bi bi-telephone-plus-fill ' :'bi bi-telephone-plus' }}"></i></a>
              </div>
            <!-- Home Section End -->
        </div>
        <!-- Main Content End -->
    </div>
    <!-- Main Container End -->

    <!-- JS Files -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/0.147.0/three.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vanta/0.5.24/vanta.net.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.12/typed.min.js" referrerpolicy="no-referrer"></script>
    <script src="js/script.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>