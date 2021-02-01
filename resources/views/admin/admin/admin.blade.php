@extends('layouts.admin.dashboard')
@section('title', 'Admin')

@section('content')
  <h1 class="h3 text-gray-800">Pengurus BPC</h1>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>#</th>
        <th>NPM</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Jurusan</th>
        <th>Status</th>
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
          <td>{{ $item->user->member->npm }}</td>
          <td>{{ $item->user->name }}</td>
          <td>{{ $item->user->email }}</td>
          <td>{{ $item->user->member->jurusan }}</td>
          <td>{{ $item->status }}</td>
          <td>
            <a href="{{ route('admin.show', $item->id) }}" class="btn btn-info"><i class="fas fa-info"></i></a>
            <a href="{{ route('admin.edit', $item->id) }}" class="btn btn-success"><i class="fas fa-edit"></i></a>
            <form action="{{ route('admin.destroy', $item->id) }}" method="POST" class="d-inline">
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