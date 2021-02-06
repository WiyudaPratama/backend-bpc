@extends('layouts.admin.dashboard')
@section('title', 'Ubah Kelas')

@section('content')
  <h1 class="h3 tect-gray-800">Ubah Kelas</h1>
  <div class="row justify-content-center">
    <div class="col-12 col-md-6">
      <div class="card shadow">
        <div class="card-body">
          <form action="{{ route('study.update', $data->id) }}" method="POST">
            @csrf
            @method('put')
            <div class="form-group">
              <label for="kelas">Nama Kelas</label>
              <input type="text" name="kelas" id="kelas" class="form-control @error('kelas') is-invalid @enderror" value="{{ $data->kelas }}">
              @error('kelas')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="form-group">
              <label for="harga">Harga Kelas</label>
              <input type="number" name="harga" id="harga" class="form-control @error('harga') is-invalid @enderror" value="{{ $data->harga }}">
              @error('harga')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
            <a href="{{ route('study.index') }}" class="btn btn-warning"><i class="fas fa-sign-out-alt"></i> Kembali</a>
            <button type="submit" class="btn btn-primary"><i class="fas fa-edit"></i> Ubah</button>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection