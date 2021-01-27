@extends('layouts.checkout')

@section('title', 'Checkout')

@section('content')<!-- Checkout Kelas -->
<section class="section-checkout-kelas mb-5" id="checkout-kelas">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-12 pt-3">
        <div class="card">
          <div class="card-body">
            <h2>HTML, CSS dan Bootstrap</h2>
            <hr>
            <h3>Kelas dibeli oleh :</h3>
            <p>Wiyuda Pratama Mahardika</p>
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
                <td class="text-right font-weight-normal">Rp.75000</td>
              </tr>
              <tr>
                <th>Total Harga</th>
                <th class="text-right">Rp.75000</th>
              </tr>
            </table>
            <div class="join">
              <a href="success.html" class="btn btn-checkout text-center btn-block py-3">Checkout</a>
            </div>
          </div>
        </div>
        <div class="text-center mt-3">
          <a href="index.html" class="text-muted">Cancel Checkout</a>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection