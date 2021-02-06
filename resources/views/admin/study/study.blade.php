@extends('layouts.admin.dashboard')
@section('title', 'Study')

@section('content')
  <h1 class="h3 text-gray-800">Kelas BPC</h1>
  <a href="{{ route('study.create') }}" class="btn btn-primary mb-3"><i class="fas fa-plus"> Tambah Kelas</i></a>
  <table class="table table-bordered table-responsive-sm">
    <thead>
      <tr>
        <th>#</th>
        <th>Nama Kelas</th>
        <th>Harga</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
      @php
          $i = 1;
      @endphp
      @foreach ($data as $item)
        <tr>
          <th>{{ $i++ }}</th>
          <td>{{ $item->kelas }}</td>
          <td>{{ $item->harga }}</td>
          <td>
            <a href="{{ route('study.edit', $item->id) }}" class="btn btn-success"><i class="fas fa-edit"></i></a>
            <form action="{{ route('study.destroy', $item->id) }}" method="POST" class="d-inline">
              @csrf
              @method('delete')
              <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i></button>
            </form>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
@endsection