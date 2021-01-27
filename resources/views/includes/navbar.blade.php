<nav class="navbar navbar-expand-lg navbar-light">
  <div class="container">
    <a href="#" class="navbar-brand">
      <img src="{{ url('/frontend/images/logo.png') }}" alt="Logo BPC">
    </a>
    <button class="navbar-toggler navbar-toggler-right bg-white" type="button" data-toggle="collapse" data-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto mr-3">
        <li class="nav-item mx-md-2">
          <a href="#" class="nav-link active">Home</a>
        </li>
        <li class="nav-item mx-md-2">
          <a href="#" class="nav-link">Activities</a>
        </li>
        <li class="nav-item mx-md-2">
          <a href="#" class="nav-link">Stories</a>
        </li>
        <li class="nav-item mx-md-2">
          <a href="#" class="nav-link">About</a>
        </li>
      </ul>
      <!-- Mobile Button -->
      <form class="form-inline d-sm-block d-md-none">
        <button class="btn btn-login my-2 my-sm-0">
          Masuk
        </button>
      </form>
      <form class="form-inline d-sm-block d-md-none">
        <button class="btn btn-registrasi my-2 my-sm-0">
          Registrasi
        </button>
      </form>

      <!-- Desktop Button -->
      <form class="form-inline my-2 my-lg-0 d-none d-md-block mr-4">
        <button class="btn btn-login my-2 my-sm-0 px-4">
          Login
        </button>
      </form>
      <form class="form-inline my-2 my-lg-0 d-none d-md-block">
        <button class="btn btn-registrasi my-2 my-sm-0 px-4">
          Registrasi
        </button>
      </form>
    </div>
  </div>
</nav>