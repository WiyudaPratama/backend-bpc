@extends('layouts.comment')
@section('title', "Berikan Komentar")

@section('content')
  <section class="section-comment">
    <div class="container">
      <div class="row mt-5 justify-content-center">
        <div class="col-12 col-lg-5 d-flex align-items-center left-content">
          <div class="row">
            <div class="col-lg-12">
              <h3>Berikan Tanggapanmu</h3>
              <p>Berikan tanggapan terbaikmu kepada kami, agar kami bisa memperbaiki apa yang masih kurang dari oraganisasi ini.</p>
            </div>
          </div>
        </div>
        <div class="col-12 col-lg-7 right-content">
          <form action="{{ route('comment.store') }}" method="POST">
            @csrf
            <div class="form-group">
              <label for="comment">Komentar</label>
              <textarea name="comment" id="comment" cols="20" rows="5" class="form-control @error('comment') is-invalid @enderror">{{ old('comment') }}</textarea>
              @error('comment')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
            <button type="submit" class="btn btn-primary">Berikan Komentar</button>
          </form>
        </div>
      </div>
    </div>
  </section>
@endsection