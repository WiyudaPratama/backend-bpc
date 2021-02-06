<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gallery BPC(Budidarma Programming Club)</title>

  <link rel="stylesheet" href="{{ url('/frontend/library/bootstrap/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ url('/frontend/library/aos/aos.css') }}">

  <link rel="stylesheet" href="{{ url('/frontend/style/style.css') }}">
</head>
<body>
  
  <!-- Navbar -->
  @include('includes.navbar')

  <main>
    <section class="section-gallery">
      <div class="container">
        <div class="row justify-content-center mt-3">
          @foreach ($data as $item)
            <div class="col-12 col-md-4 p-1">
              <div class="card">
                <div class="card-body p-0">
                  <img src="{{ url('/storage/gallery/', $item->image) }}" alt="" class="img-thumbnail card-img-top">
                  <p class="text-center">{{ $item->judul }}</p>
                </div>
              </div>
            </div>
          @endforeach
        </div>
      </div>
    </section>
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