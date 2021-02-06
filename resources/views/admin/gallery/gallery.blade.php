@extends('layouts.admin.dashboard')
@section('title', 'Gallery')

@section('content')
  <h1 class="h3 text-gray-800">Gallery BPC</h1>
  <a href="{{ route('gallery.create') }}" class="btn btn-primary"><i class="fas fa-plus"></i>Tambah Gallery</a>
  <table class="table table-bordered table-responsive-sm">
    <thead>
      <tr>
        <th>#</th>
        <th>Gambar</th>
        <th>Judul</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
      @php
          $i=1;
      @endphp
      @foreach ($data as $item)
        <tr>
          <th>{{ $i++ }}</th>
          <td><img src="{{ url('storage/gallery', $item->image) }}" alt="" height="100px"></td>
          <td>{{ $item->judul }}</td>
          <td>
            <a href="{{ route('gallery.edit', $item->id) }}" class="btn btn-info"><i class="fas fa-edit"></i> Edit</a>
            <form action="{{ route('gallery.destroy', $item->id) }}" method="POST" class="d-inline">
              @csrf
              @method('delete')
              <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i> Hapus</button>
            </form>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
@endsection