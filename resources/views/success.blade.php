<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Success Checkout</title>

  <link rel="stylesheet" href="{{ url('/frontend/library/bootstrap/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ url('/frontend/library/aos/aos.css') }}">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,300;1,400;1,500;1,600&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="{{ url('/frontend/style/style.css') }}">
</head>
<body>
  
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light p-0">
    <div class="container">
      <div class="navbar-nav ml-auto mr-auto mr-sm-auto mr-md-auto mr-lg-0">
        <a href="#" class="navbar-brand">
          <img src="{{ url('/frontend/images/logo.png') }}" alt="Logo BPC">
        </a>
      </div>
      <ul class="navbar-nav mr-auto d-none d-lg-block">
        <span class="text-white">| &nbsp; Saturday Is Programming Day</span>
      </ul>
    </div>
  </nav>

  <main>
    <section class="section-success d-flex align-items-center">
      <div class="col text-center">
        <img src="{{ url('/frontend/images/success.png') }}" alt="" class="shadow rounded-circle">
        <h1>Yay, Berhasil</h1>
        <p>Selamat anda telah berhasil mendaftar,
          <br>
          Goodluck <em>"Saturday Is Programming Day"</em>
        </p>
        <a href="{{ route('home') }}" class="btn btn-home-page px-5 mt-3">Home Page</a>
      </div>
    </section>
  </main>

  <script src="{{ url('/frontend/library/jquery/jquery-3.5.1.min.js') }}"></script>
  <script src="{{ url('/frontend/library/bootstrap/js/bootstrap.min.js') }}"></script>
  <script src="{{ url('/frontend/library/aos/aos.js') }}"></script>
  <script src="{{ url('/frontend/javascript/aos.js') }}"></script>
</body>
</html>