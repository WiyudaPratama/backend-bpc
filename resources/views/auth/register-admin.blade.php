@extends('layouts.auth')
@section('title', 'Registrasi Admin')

@section('content')
<div class="row justify-content-center">
  <div class="col-xl-10 col-lg-12 col-md-9">
    <div class="card o-hidden border-0 shadow-lg mt-3">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-5 d-flex align-items-center">
            <img src="{{ asset('/frontend/images/register-ilustration.jpg') }}" class="img-fluid" alt="Registration Ilustration">
          </div>
          <div class="col-lg-7">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900">Registrasi Pengurus BPC</h1>
                <p>Silahkan Registrasi Untuk Menjadi Bagian Dari Kepengurusan BPC</p>
              </div>
              <form class="user" method="post" action="{{ route('register-admin-process') }}">
                @csrf
                <div class="form-group">
                  <input id="email" type="email" class="form-control form-control-user @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autofocus autocomplete="email" placeholder="Email Address">

                  @error('email')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
                <div class="form-group">
                  <textarea name="visi" id="visi" rows="3" class="form-control @error('visi') is-invalid @enderror" autocomplete="visi" placeholder="Enter Your Visi">{{ old('visi') }}</textarea>

                  @error('visi')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
                <div class="form-group">
                  <textarea name="misi" id="misi" rows="3" class="form-control @error('misi') is-invalid @enderror" autocomplete="misi" placeholder="Enter Your Misi">{{ old('misi') }}</textarea>

                  @error('misi')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
                <button type="submit" class="btn btn-primary btn-user btn-block">
                  {{ __('Registrasi') }}
                </button>
                <hr>
              </form>
              <hr>
              <div class="text-center">
                <a class="small" href="{{ route('login') }}">Already have an account? Login!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection