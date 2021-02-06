@extends('layouts.admin.dashboard')
@section('title', 'Edit Gallery')

@section('content')
  <h1 class="h3 text-gray-800">Edit Gallery</h1>
  <div class="row justify-content-center">
    <div class="col-12 col-md-6">
      <div class="card shadow">
        <div class="card-body">
          <form action="{{ route('gallery.update', $data->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('put')
            <img src="{{ url('/storage/gallery', $data->image) }}" class="img-thumbnail" alt="">
            <input type="hidden" name="gambar_lama" value="{{ $data->image }}">
            <div class="form-group">
              <label for="gambar">Gambar</label>
              <input type="file" name="gambar" id="gambar" class="form-control-file @error('gambar') is-invalid @enderror">
              @error('gambar')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="form-group">
              <label for="judul">Judul</label>
              <input type="text" name="judul" id="judul" class="form-control @error('judul') is-invalid @enderror" value="{{ $data->judul }}">
              @error('judul')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
            <a href="{{ route('gallery.index') }}" class="btn btn-warning"><i class="fas fa-sign-out-alt"></i> Kembal</a>
            <button type="submit" class="btn btn-primary"><i class="fas fa-edit"></i> Edit Gallery</button>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection