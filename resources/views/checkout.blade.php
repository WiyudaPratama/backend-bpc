@extends('layouts.checkout')

@section('title', 'Checkout')

@section('content')<!-- Checkout Kelas -->
<section class="section-checkout-kelas mb-5" id="checkout-kelas">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-12 pt-3">
        <div class="card">
          <div class="card-body">
            <h2>{{ $data->kelas }}</h2>
            <hr>
            <h3>Detail Kelas :</h3>
              <table class="table">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Nama</th>
                    <th>Kelas</th>
                    <th>Jadwal</th>
                    <th>Jam</th>
                    <th>Aksi</th>
                  </tr>
                  <tr>
                    <th>1</th>
                    <td>{{ Auth::user()->name }}</td>
                    <td>{{ $data->kelas }}</td>
                    <td>Pagi</td>
                    <td>08.00 - 10.30</td>
                    <td>
                      <a href="#"><img src="{{ url('/frontend/images/close-128.png') }}" alt="" class="w-25"></a>
                    </td>
                  </tr>
                </thead>
              </table>
            <hr>
            <h3>Buat Jadwal Kamu</h3>
            <form action="" method="POST">
              <div class="row">
                <div class="col-lg-4 col-12">
                  <div class="form-group">
                    <select name="jadwal" id="jadwal" class="form-control">
                      <option>--Pilih Jadwal--</option>
                      <option value="Pagi">Pagi</option>
                      <option value="Siang">Siang</option>
                      <option value="Sore">Sore</option>
                      <option value="Malam">Malam</option>
                    </select>
                  </div>
                </div>
                <div class="col-lg-4 col-12">
                  <select name="jam" id="jam" class="form-control">
                    <option>--Pilih Jam Masuk--</option>
                    <option value="08.30 - 10.30">08.30 - 10.30</option>
                    <option value="11.00 - 13.00">11.00 - 13.00</option>
                    <option value="14.00 - 16.00">14.00 - 16.00</option>
                    <option value="17.00 - 19.00">17.00 - 19.00</option>
                  </select>
                </div>
                <div class="col-lg-4 col-12">
                  <button type="submit" class="btn btn-jadwal d-block ml-auto"><i class="fas fa-plus"></i>Buat Jadwal</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-12 pt-3">
        <div class="card">
          <div class="card-body">
            <h3>Pembayaran</h3>
            <table class="table table-borderless">
              <tr>
                <th class="text-muted font-weight-normal">Harga Kelas</th>
                <td class="text-right font-weight-normal">Rp.{{ $data->harga }}</td>
              </tr>
              <tr>
                <th>Total Harga</th>
                <th class="text-right">Rp.{{ $data->harga }}</th>
              </tr>
            </table>
            <hr>
            <h3>Metode Pembayaran</h3>
            <table class="table table-borderless">
              <tr>
                <td><img src="{{ url('/frontend/images/exchange-128.png') }}" alt="" class="w-25"></td>
                <td class="text-right pt-4">Admin</td>
              </tr>
            </table>
            <div class="join">
              @if (Auth::user()->member->npm)
                <a href="{{ route('success-process', $data->id) }}" class="btn btn-checkout text-center btn-block py-3">Checkout</a>
              @else
                <a href="{{ route('profile') }}" class="btn btn-checkout text-center btn-block py-3">Please Complete Your Personal Information To Checkout This Class</a>
              @endif
            </div>
          </div>
        </div>
        <div class="text-center mt-3">
          <a href="{{ route('home') }}" class="text-muted">Cancel Checkout</a>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection