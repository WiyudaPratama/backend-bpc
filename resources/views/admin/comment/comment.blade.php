@extends('layouts.admin.dashboard')
@section('title', 'Komentar Member')
@section('content')
  <h1 class="h3 text-gray-800">Komentar Member</h1>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>#</th>
        <th>Nama</th>
        <th>Komentar</th>
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
          <td>{{ $item->user->name }}</td>
          <td>{{ $item->comment }}</td>
          <td>
            <form action="{{ route('comment.destroy', $item->id) }}" method="POST">
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