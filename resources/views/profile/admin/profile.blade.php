@extends('layouts.admin.dashboard')
@section('title', 'Profile Pengurus')
@section('content')
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
                  <form action="{{ route('admin-profile-update', $data->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    @if ($data->profil)
                      <img src="{{ url('/storage/profile/'.$data->profil) }}" alt="" height="100px" width="100px" class="rounded-circle" id="profile_preview">
                    @else
                      <img src="https://ui-avatars.com/api/?name={{ $data->user->name }}" alt="" height="100px" width="100px" class="rounded-circle" id="profile_preview">
                    @endif
                    <div class="form-group">
                        <label for="foto">Pilih Foto Kamu</label>
                        <input type="file" name="foto" class="form-control" id="foto" onchange="preview_image(event)">
                    </div>
                    <input type="hidden" name="foto_lama" value="{{ $data->profil }}">
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

@push('preview-images')
    <script>
      function preview_image(event){
      var reader = new FileReader();
      reader.onload = function(){
        var output = document.getElementById('profile_preview');
        output.src = reader.result;
      }
      reader.readAsDataURL(event.target.files[0]);
    }
    </script>
@endpush
@endsection