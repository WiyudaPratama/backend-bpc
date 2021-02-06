@extends('layouts.admin.dashboard')
@section('title', 'Member')

@section('content')
<h1 class="h3 text-gray-800">Daftar Member</h1>
<table class="table table-bordered table-responsive-sm">
  <thead>
    <tr>
      <th>#</th>
      <th>Foto</th>
      <th>NPM</th>
      <th>Nama</th>
      <th>Email</th>
      <th>Jurusan</th>
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
        <td>
          @if ($item->member->profil)
            <img src="{{ url('/storage/profile/', $item->member->profil) }}" alt="Profil" width="70px">
          @else
            <img src="https://ui-avatars.com/api/?name={{ $item->name }}" alt="" class="rounded-circle">
          @endif
        </td>
        <td>{{ $item->member->npm }}</td>
        <td>{{ $item->name }}</td>
        <td>{{ $item->email }}</td>
        <td>{{ $item->member->jurusan }}</td>
        <td>
          <a href="{{ route('member.show', $item->id) }}" class="btn btn-info"><i class="fas fa-info"></i></a>
          <form action="{{ route('member.destroy', $item->id) }}" method="POST" class="d-inline">
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