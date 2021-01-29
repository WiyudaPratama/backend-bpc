@extends('layouts.admin.dashboard')
@section('title', 'Tambah Kelas')

@section('content')
  <h1 class="h3 tect-gray-800">Tambah Kelas</h1>
  <div class="row justify-content-center">
    <div class="col-12 col-md-6">
      <div class="card shadow">
        <div class="card-body">
          <form action="{{ route('study.store') }}" method="POST">
            @csrf
            <div class="form-group">
              <label for="kelas">Nama Kelas</label>
              <input type="text" name="kelas" id="kelas" class="form-control">
            </div>
            <div class="form-group">
              <label for="harga">Harga Kelas</label>
              <input type="number" name="harga" id="harga" class="form-control">
            </div>
            <a href="{{ route('study.index') }}" class="btn btn-warning"><i class="fas fa-sign-out-alt"></i> Kembali</a>
            <button type="submit" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah</button>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection