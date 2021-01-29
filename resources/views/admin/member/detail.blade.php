@extends('layouts.admin.dashboard')
@section('title', 'Detail Member')

@section('content')
  <h1 class="h3 text-gray-800">Detail Member</h1>
  <table class="table table-bordered">
    <tr>
      <th colspan="2">Foto</th>
    </tr>
    <tr>
      <th width="30%">NPM</th>
      <td>{{ $data->member->npm }}</td>
    </tr>
    <tr>
      <th width="30%">Nama</th>
      <td>{{ $data->name }}</td>
    </tr>
    <tr>
      <th width="30%">Email</th>
      <td>{{ $data->email }}</td>
    </tr>
    <tr>
      <th width="30%">Jurusan</th>
      <td>{{ $data->member->jurusan }}</td>
    </tr>
    <tr>
      <th width="30%">Kelas</th>
      <td>{{ $data->member->kelas }}</td>
    </tr>
    <tr>
      <th width="30%">Nomor Telpon</th>
      <td>{{ $data->member->no_telp }}</td>
    </tr>
    <tr>
      <th width="30%">Alamat</th>
      <td>{{ $data->member->alamat }}</td>
    </tr>
  </table>
  <a href="{{ route('member.index') }}" class="btn btn-warning"><i class="fas fa-sign-out-alt"></i> Kembali</a>
@endsection