@extends('layouts.comment')
@section('title', 'Komentar Member')
@section('content')
  <section class="section-show-comment">
    <div class="container">
      <div class="row mt-5 justify-content-center">
        @foreach ($comments as $comment)
          <div class="col-12 col-md-4" data-aos="fade-up">
            <div class="card">
              <div class="card-body">
                <p>{{ $comment->comment }}</p>
                  <hr>
                  <div class="profil d-flex align-items-center">
                    <img src="{{ url('/storage/profile/', $comment->user->member->profil) }}" alt="" class="float-left rounded-circle mr-3 w-25">
                    <p>{{ $comment->user->name }}</p>
                  </div>
              </div>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </section>
@endsection