@extends('layouts.admin.dashboard')
@section('title', 'Transaksi Kelas')

@section('content')
  <h1 class="h3 text-gray-800">Transaksi Kelas</h1>
  <table class="table bordered">
    <thead>
      <tr>
        <th>#</th>
        <th>NPM</th>
        <th>Nama</th>
        <th>Kelas</th>
        <th>Harga</th>
        <th>Status</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
      @php
          $i =1;
      @endphp
      @foreach ($data as $item)
        <tr>
          <th>{{ $i++ }}</th>
          <td>{{ $item->user->member->npm }}</td>
          <td>{{ $item->user->name }}</td>
          <td>{{ $item->study->kelas }}</td>
          <td>{{ $item->transaction_total }}</td>
          <td>{{ $item->transaction_status }}</td>
          <td>
            <a href="{{ route('transaction.edit', $item->id) }}" class="btn btn-success"><i class="fas fa-edit"></i></a>
            <form action="{{ route('transaction.destroy', $item->id) }}" method="POST" class="d-inline">
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