@extends('layouts.admin.dashboard')
@section('title', 'Detail Pengurus')

@section('content')
  <h1 class="h3 text-gray-800">Detail Pengurus</h1>
  <table class="table table-bordered">
    <tr>
      <th colspan="2">Foto</th>
    </tr>
    <tr>
      <th>NPM</th>
      <td>{{ $data->user->member->npm }}</td>
    </tr>
    <tr>
      <th>Nama</th>
      <td>{{ $data->user->name }}</td>
    </tr>
    <tr>
      <th>Email</th>
      <td>{{ $data->user->email }}</td>
    </tr>
    <tr>
      <th>Jurusan</th>
      <td>{{ $data->user->member->jurusan }}</td>
    </tr>
    <tr>
      <th>Kelas</th>
      <td>{{ $data->user->member->kelas }}</td>
    </tr>
    <tr>
      <th>Nomor Telepon</th>
      <td>{{ $data->user->member->no_telp }}</td>
    </tr>
    <tr>
      <th>Alamat</th>
      <td>{{ $data->user->member->alamat }}</td>
    </tr>
    <tr>
      <th>Visi & Misi</th>
      <td>
        <table class="table table-bordered">
          <tr>
            <th>Visi</th>
            <td>Misi</td>
          </tr>
          <tr>
            <th>{{ $data->visi }}</th>
            <td>{{ $data->misi }}</td>
          </tr>
        </table>
      </td>
    </tr>
    <tr>
      <th>Status</th>
      <td>{{ $data->status }}</td>
    </tr>
  </table>
  <a href="{{ route('admin.index') }}" class="btn btn-warning"><i class="fas fa-sign-out-alt"></i> Kembali</a>
@endsection