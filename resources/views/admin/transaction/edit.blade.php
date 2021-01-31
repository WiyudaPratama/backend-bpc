@extends('layouts.admin.dashboard')
@section('title', 'Edit Status Transaksi')

@section('content')
  <h1 class="h3 text-gray-800">Edit Status Transaksi</h1>
  <div class="row justify-content-center">
    <div class="col-12 col-md-6">
      <div class="card shadow">
        <div class="card-body">
          <form action="{{ route('transaction.update', $data->id) }}" method="POST">
            @csrf
            @method('put')
            <div class="form-group">
              <label for="transaction_status">Status</label>
              <select name="transaction_status" id="transaction_status" class="form-control">
                <option>--pilih status--</option>
                @foreach ($status as $item)
                  @if ($data->transaction_status == $item)
                    <option value="{{ $item }}" selected>{{ $item }}</option>
                  @else
                    <option value="{{ $item }}">{{ $item }}</option>
                  @endif
                @endforeach
              </select>
            </div>
            <a href="{{ route('transaction.index') }}" class="btn btn-warning"><i class="fas fa-sign-out-alt"></i> Kembali</a>
            <button type="submit" class="btn btn-primary"><i class="fas fa-edit"></i> Edit Status</button>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection