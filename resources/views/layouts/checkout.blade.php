<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title') BPC(Budidarma Programming Club)</title>

  <link rel="stylesheet" href="{{ url('/frontend/library/bootstrap/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ url('/frontend/library/aos/aos.css') }}">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,300;1,400;1,500;1,600&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="{{ url('/frontend/style/style.css') }}">
</head>
<body>
  
  <!-- Navbar -->
  @include('includes.navbar')

  <!-- Header -->
  @include('includes.header-checkout')

  <main>
    @yield('content')
  </main>
  
  <hr>

  {{-- Footer --}}
  @include('includes.footer')

  <script src="{{ url('/frontend/library/jquery/jquery-3.5.1.min.js') }}"></script>
  <script src="{{ url('/frontend/library/bootstrap/js/bootstrap.min.js') }}"></script>
  <script src="{{ url('/frontend/library/aos/aos.js') }}"></script>
  <script src="{{ url('/frontend/javascript/aos.js') }}"></script>
</body>
</html>