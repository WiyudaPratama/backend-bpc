@extends('layouts.home')

@section('title', 'Home')

@section('content')
  <!-- Kenapa BPC -->
  <div class="container">
    <section class="section-bpc pt-5 pb-5" id="bpc">
      <div class="row justify-content-center">
        <div class="col-11 col-lg-6 d-flex align-items-center left-content">
          <div class="row">
            <div class="col-lg-12" data-aos="fade-up">
              <h1>Kenapa Harus Memilih BPC</h1>
              <p>Murah, Asyik, Seru, Dan Dibimbing <br> Oleh Mentor Yang Handal</p>
            </div>
          </div>
        </div>
        <div class="col-11 col-lg-6 right-content">
          <div class="row">
            <div class="col-6 col-lg-4 mb-4 icon" data-aos="fade-up">
              <img src="/frontend/images/modules.png" alt="">
              <p>Studi Kasus</p>
            </div>
            <div class="col-6 col-lg-4 mb-4 icon" data-aos="fade-up">
              <img src="/frontend/images/notebook.png" alt="">
              <p>Modul</p>
            </div>
            <div class="col-6 col-lg-4 mb-4 icon" data-aos="fade-up">
              <img src="/frontend/images/assistance.png" alt="">
              <p>Konsultasi</p>
            </div>
            <div class="col-6 col-lg-4 mb-4 icon" data-aos="fade-up">
              <img src="/frontend/images/presentation.png" alt="">
              <p>offline</p>
            </div>
            <div class="col-6 col-lg-4 mb-4 icon" data-aos="fade-up">
              <img src="/frontend/images/project-management.png" alt="">
              <p>Projek</p>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <!-- Kelas -->
  <section class="section-kelas pt-5 pb-5 pb-5" id="kelas">
    <div class="container">
      <div class="row mb-5 text-center">
        <div class="col-12">
          <h1>Kelas Kami</h1>
        </div>
      </div>
      <div class="row justify-content-center">
        @foreach ($data as $item)
          <div class="col-12 col-lg-4 pb-3" data-aos="zoom-in">
            <div class="card">
              <div class="card-body">
                <h2>Rp. {{ $item->harga }} / <span>Semester</span></h2>
                <h4>{{ $item->kelas }}</h4>
                <div class="dropdown-divider"></div>
                <div class="fasilitas">
                  <p>Fasilitas yang didapat</p>
                  <div class="fasilitas-item">
                    <img src="/frontend/images/checklist32.png" alt="" class="float-left">
                    <p>Konsultasi Mentor</p>
                    <img src="/frontend/images/checklist32.png" alt=""class="float-left">
                    <p>Studi kasus</p>
                    <img src="/frontend/images/checklist32.png" alt=""class="float-left">
                    <p>Modul</p>
                  </div>
                </div>
                <div class="dropdown-divider"></div>
                <div class="checkout">
                  @auth
                    <a href="{{ route('checkout-process',$item->slug) }}" class="btn btn-checkout btn-block text-center">Checkout</a>
                  @endauth
                  @guest
                    <a href="{{ route('login') }}" class="btn btn-checkout btn-block text-center">Login or Register</a>
                  @endguest
                </div>
              </div>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </section>

  <!-- Kata mereka -->
  <section class="section-kata-mereka pt-5 pb-5" id="kata-mereka">
    <div class="container">
      <div class="row text-center pb-5">
        <div class="col-12">
          <h1>Apa Kata Mereka?</h1>
        </div>
      </div>
      <div class="row justify-content-center pb-5">
        <div class="col-12 col-lg-4 mt-3" data-aos="fade-up">
          <div class="card">
            <div class="card-body">
              <p>Terimakasih BPC, Mentor nya keren-keren dan materi yang diajarkan keren banger.</p>
              <hr>
              <div class="profil d-flex align-items-center">
                <img src="/frontend/images/avatar-2.png" alt="" class="float-left rounded-circle shadow mr-3">
                <p>Sayana</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-lg-4 mt-3" data-aos="fade-up">
          <div class="card">
            <div class="card-body">
              <p>Terimakasih BPC, Mentor nya keren-keren dan materi yang diajarkan keren banger.</p>
              <hr>
              <div class="profil d-flex align-items-center">
                <img src="/frontend/images/avatar-3.png" alt="" class="float-left rounded-circle shadow mr-3">
                <p>Sabrina</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-lg-4 mt-3" data-aos="fade-up">
          <div class="card">
            <div class="card-body">
              <p>Terimakasih BPC, Mentor nya keren-keren dan materi yang diajarkan keren banger.</p>
              <hr>
              <div class="profil d-flex align-items-center">
                <img src="/frontend/images/avatar-2.png" alt="" class="float-left rounded-circle shadow mr-3">
                <p>Sayana</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="load-more text-center" data-aos="fade-up">
        <a href="#" class="btn btn-load-more">LIHAT LEBIH BANYAK</a>
      </div>
    </div>
  </section>
@endsection