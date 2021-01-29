<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Update Profile Member BPC(Budidarma Programming Club)</title>

  <link href="{{ url('/frontend/library/sb_admin/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="{{ url('/frontend/library/bootstrap/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ url('/frontend/library/aos/aos.css') }}">

  <link rel="stylesheet" href="{{ url('/frontend/style/style.css') }}">
</head>
<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
      <a href="{{ route('home') }}" class="navbar-brand">
        <img src="{{ url('/frontend/images/logo.png') }}" alt="Logo BPC">
      </a>
      <button class="navbar-toggler navbar-toggler-right bg-white" type="button" data-toggle="collapse" data-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-3">
          <li class="nav-item">
            <a href="{{ route('home') }}" class="nav-link">Dashboard</a>
          </li>
        </ul>
        <ul class="navbar-nav ml-auto mr-3">
          @if (Route::has('login'))
          @auth
            <li class="nav-item dropdown no-arrow">
              <a class="btn text-muted nav-link " type="button" id="userDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                {{ Auth::user()->name }}
                @if (Auth::user()->foto)
                  <img src="{{ Storage::url('profile-photos/'.Auth::user()->foto) }}" alt="" class="rounded-circle ml-2" width="40px">
                @else
                  <img src="https://ui-avatars.com/api/?name={{ Auth::user()->name }}" alt="" class="rounded-circle ml-2" width="40px">
                @endif
              </a>
              <div class="dropdown-menu p-0 dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="{{ route('profile')}}">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-muted"></i>
                  Profile
                </a>
                <div class="dropdown-divider"></div>
                <form action="{{ route('logout') }}" method="POST">
                  @csrf
                  <a class="dropdown-item pt-0 pb-2 btn-logout" href="{{ route('logout') }}"
                  onclick="event.preventDefault(); this.closest('form').submit();"><i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-muted"></i>Logout</a>
                </form>
              </div>
            </li>
            @else
            {{-- Mobile Button --}}
            <form class="form-inline d-sm-block d-md-none">
              @csrf
              <button class="btn btn-login my-2 my-sm-0" onclick="event.preventDefault(); location.href='{{ route('login') }}'">
                Masuk
              </button>
            </form>

            <!-- Desktop Button -->
            <form class="form-inline my-2 my-lg-0 d-none d-md-block mr-4">
              @csrf
              <button class="btn btn-login my-2 my-sm-0 px-4" onclick="event.preventDefault(); location.href='{{ route('login') }}'">
                Login
              </button>
            </form>

              @if (Route::has('register'))
                {{-- Mobile Button --}}
                <form class="form-inline d-sm-block d-md-none">
                  @csrf
                  <button class="btn btn-registrasi my-2 my-sm-0" onclick="event.preventDefault(); location.href='{{ route('register') }}'">
                    Registrasi
                  </button>
                </form>

                {{-- Desktop Button --}}
                <form class="form-inline my-2 my-lg-0 d-none d-md-block">
                  @csrf
                  <button class="btn btn-registrasi my-2 my-sm-0 px-4" onclick="event.preventDefault(); location.href='{{ route('register') }}'">
                    Registrasi
                  </button>
                </form>
              @endif
            @endauth
          @endif
        </ul>
      </div>
    </div>
  </nav>


  <main>
    <section class="section-profile">
      <div class="container">
        <div class="row mt-5 justify-content-center">
          <div class="col-12">
            <div class="row">
              <div class="col-12 col-lg-4 ">
                <h3>Profil Informasi Kamu</h3>
                <p>Silahkah Lengkapi Informasi Dari Profil Kamu Yang Belum Lengkap Sebelum Melakukan Trasaksi Kelas</p>
              </div>
              <div class="col-12 col-lg-8">
                <div class="card">
                  <div class="card-body">
                    <form action="{{ route('profile-update', $data->id) }}" method="POST" enctype="multipart/form-data">
                      @csrf
                      @method('PUT')
                      @if ($data->user->profil)
                        <img src="{{ Storage::url('profile-photos/'.$data->user->foto) }}" alt="" height="100px" width="100px" class="rounded-circle" id="profile_preview">
                      @else
                        <img src="https://ui-avatars.com/api/?name={{ $data->user->name }}" alt="" height="100px" width="100px" class="rounded-circle" id="profile_preview">
                      @endif
                      <div class="form-group">
                          <label for="foto">Pilih Foto Kamu</label>
                          <input type="file" name="foto" class="form-control" id="foto" onchange="preview_image(event)">
                      </div>
                      <input type="hidden" name="id_user" value="{{ $data->user->id }}">
                      <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" id="nama" value="{{ $data->user->name }}">
                        @error('nama')
                          <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                      </div>
                      <div class="form-group">
                        <label for="npm">NPM</label>
                        <input type="number" name="npm" class="form-control @error('npm') is-invalid @enderror" id="npm" value="{{ $data->npm }}">
                        @error('npm')
                          <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                      </div>
                      <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" value="{{ $data->user->email }}">
                        @error('email')
                          <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                      </div>
                      <div class="form-group">
                        <label for="jurusan">Jurusan</label>
                        <select name="jurusan" id="jurusan" class="form-control @error('jurusan') is-invalid @enderror">
                          <option>--pilih jurusan--</option>
                          @foreach ($jurusan as $j)
                            @if ($data->jurusan == $j)
                              <option value="{{ $j }}" selected>{{ $j }}</option>  
                            @else
                              <option value="{{ $j }}">{{ $j }}</option>  
                            @endif
                          @endforeach
                        </select>
                        @error('jurusan')
                          <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                      </div>
                      <div class="form-group">
                        <label for="kelas">Kelas</label>
                        <input type="text" name="kelas" class="form-control @error('kelas') is-invalid @enderror" id="kelas" value="{{ $data->kelas }}">
                        @error('kelas')
                          <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                      </div>
                      <div class="form-group">
                        <label for="no_telp">Nomor Telpon</label>
                        <input type="number" name="no_telp" class="form-control @error('no_telp') is-invalid @enderror" id="no_telp" value="{{ $data->no_telp }}">
                        @error('no_telp')
                          <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                      </div>
                      <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea name="alamat" id="alamat" rows="3" class="form-control @error('alamat') is-invalid @enderror"> {{ $data->alamat }}</textarea>
                        @error('alamat')
                          <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                      </div>
                      <button type="submit" class="btn btn-primary px-2 float-right">Simpan Perubahan</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

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
    function preview_image(event){
      var reader = new FileReader();
      reader.onload = function(){
        var output = document.getElementById('profile_preview');
        output.src = reader.result;
      }
      reader.readAsDataURL(event.target.files[0]);
    }
  </script>
</body>
</html>