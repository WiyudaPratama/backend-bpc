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
      @if (Route::has('login'))
        @auth
          <div class="nav-item dropdown no-arrow">
            <a class="btn text-muted nav-link " type="button" id="userDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              {{ Auth::user()->name }}
              @if (Auth::user()->foto)
                <img src="{{ Storage::url('profile-photos/'.Auth::user()->foto) }}" alt="" class="rounded-circle ml-2" width="40px">
              @else
                <img src="https://ui-avatars.com/api/?name={{ Auth::user()->name }}" alt="" class="rounded-circle ml-2" width="40px">
              @endif
            </a>
            <div class="dropdown-menu p-0 dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
              {{-- <a class="dropdown-item" href="{{ route('profile')}}">
                <i class="fas fa-user fa-sm fa-fw mr-2 text-muted"></i>
                Profile
              </a> --}}
              <div class="dropdown-divider"></div>
              <form action="{{ route('logout') }}" method="POST">
                @csrf
                <a class="dropdown-item pt-0 pb-2 btn-logout" href="{{ route('logout') }}"
                onclick="event.preventDefault(); this.closest('form').submit();"><i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-muted"></i>Logout</a>
              </form>
            </div>
          </div>
        @else 
          <form class="form-inline d-sm-block d-md-none">
            <button class="btn btn-login my-2 my-sm-0" type="button" onclick="event.preventDefault(); location.href='{{ url('login') }}';">
              Masuk
            </button>
          </form>
          <form class="form-inline d-sm-block d-md-none">
            <button class="btn btn-registrasi my-2 my-sm-0" type="button" onclick="event.preventDefault(); location.href='{{ url('register') }}';">
              Registrasi
            </button>
          </form>
          @if (Route::has('register'))
            <!-- Desktop Button -->
            <form class="form-inline my-2 my-lg-0 d-none d-md-block mr-4">
              <button class="btn btn-login my-2 my-sm-0 px-4" type="button" onclick="event.preventDefault(); location.href='{{ url('login') }}';">
                Login
              </button>
            </form>
            <form class="form-inline my-2 my-lg-0 d-none d-md-block">
              <button class="btn btn-registrasi my-2 my-sm-0 px-4" type="button" onclick="event.preventDefault(); location.href='{{ url('register') }}';">
                Registrasi
              </button>
            </form>
          @endif
        @endauth
      @endif
    </div>
  </div>
</nav>