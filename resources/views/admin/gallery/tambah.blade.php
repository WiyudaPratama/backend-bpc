@extends('layouts.admin.dashboard')
@section('title', 'Tambah Gallery')

@section('content')
  <h1 class="h3 text-gray-800">Tambah Gallery</h1>
  <div class="row justify-content-center">
    <div class="col-12 col-md-6">
      <div class="card shadow">
        <div class="card-body">
          <form action="{{ route('gallery.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <label for="gambar">Gambar</label>
              <input type="file" name="gambar" id="gambar" class="form-control-file @error('gambar') is-invalid @enderror" value="{{ old('gambar') }}">
              @error('gambar')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="form-group">
              <label for="judul">Judul</label>
              <input type="text" name="judul" id="judul" class="form-control @error('judul') is-invalid @enderror" value="{{ old('judul') }}">
              @error('judul')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
            <a href="{{ route('gallery.index') }}" class="btn btn-warning"><i class="fas fa-sign-out-alt"></i>Kembali</a>
            <button type="submit" class="btn btn-primary"><i class="fas fa-plus"></i>Tambah Gallery</button>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection