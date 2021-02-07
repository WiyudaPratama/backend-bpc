<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title') BPC(Budidarma Programming Club)</title>

  <link rel="stylesheet" href="{{ url('/frontend/library/bootstrap/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ url('/frontend/library/aos/aos.css') }}">

  <link rel="stylesheet" href="{{ url('/frontend/style/style.css') }}">
</head>
<body>
  
  <!-- Navbar -->
  @include('includes.navbar')

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
  <script src="{{ url('/frontend/library/smoot-scroll/smooth-scroll.polyfills.min.js') }}"></script>
  <script>
    var easeInOutCubic = new SmoothScroll('[data-easing="easeInOutCubic"]', {
      easing: 'easeInOutCubic',
      speed: 800,
      speedAsDuration: true
    });
  </script>
</body>
</html>