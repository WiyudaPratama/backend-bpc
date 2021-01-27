@extends('layouts.auth')

@section('title', 'Lupa Password')

@section('content')
<!-- Outer Row -->
<div class="row justify-content-center mt-5">
  <div class="col-xl-10 col-lg-12 col-md-9">
    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-6">
            <img src="{{ asset('/frontend/images/forgot_ilustration.jpg') }}" class="img-fluid" alt="Login Ilustration">
          </div>
          <div class="col-lg-6">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-2">Lupa Password?</h1>
                <p>Silahkan masukan email untuk melakukan proses reset password kamu!</p>
              </div>
              <form class="user" method="post" action="{{ route('password.email') }}">
                @csrf
                <div class="form-group">
                  <input id="email" type="email" class="form-control form-control-user @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Enter Email Address...">

                  @error('email')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
                <button type="submit" class="btn btn-primary btn-user btn-block">
                  {{ __('Kirim Link Reset Password') }}
                </button>
              </form>
              @if (session('status'))
                <div class="alert alert-success small mt-3 btn-user btn-block" role="alert">
                  {{ session('status') }}
                </div>
              @endif
              <hr>
              <div class="text-center">
                <a class="small" href="{{ route('register') }}">Create an Account!</a>
              </div>
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