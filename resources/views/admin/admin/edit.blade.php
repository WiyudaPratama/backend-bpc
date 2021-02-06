@extends('layouts.admin.dashboard')
@section('title', 'Edit Status Pengurus')

@section('content')
  <h1 class="h3 text-gray-800">Edit Status Pengurus</h1>
  <div class="row justify-content-center">
    <div class="col-12 col-md-6">
      <div class="card shadow mt-3">
        <div class="card-body">
          <form action="{{ route('admin.update', $data->id) }}" method="POST">
            @csrf
            @method('put')
            <div class="form-group">
              <label for="status">Status</label>
              <select name="status" id="status" class="form-control">
                <option>--pilih status--</option>
                @foreach ($status as $item)
                  @if ($data->status == $item)
                    <option value="{{ $item }}" selected>{{ $item }}</option>
                  @else
                    <option value="{{ $item }}">{{ $item }}</option>
                  @endif
                @endforeach
              </select>
              <a href="{{ route('admin.index') }}" class="btn btn-warning mt-3"><i class="fas fa-sign-out-alt"></i> Kembali</a>
              <button type="submit" class="btn btn-primary mt-3"><i class="fas fa-edit"></i> Ubah Status</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection