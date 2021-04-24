{{-- Extends layout --}}
@extends('layout.default_blog')
@section('content')
  <div class="card card-custom">
      <div class="card-header flex-wrap border-0 pt-6 pb-0">
          <div class="card-title">
              <h3 class="card-label">{{ $page_title }}</h3>
          </div>
      </div>
      <div class="card-body">
        <div class="row">
          <div class="col-md-4">
            <div class="card card-custom gutter-b">
              <a href="#">
                <img class="card-img-top" src="http://bit.ly/sampleBookImg" alt="Card image cap">
              </a>
              <div class="card-body">
                <a href="#">
                  <h3 class="card-label">Produk 1</h3>
                </a>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card card-custom gutter-b">
              <a href="#">
                <img class="card-img-top" src="http://bit.ly/sampleBookImg" alt="Card image cap">
              </a>
              <div class="card-body">
                <a href="#">
                  <h3 class="card-label">Produk 2</h3>
                </a>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card card-custom gutter-b">
              <a href="#">
                <img class="card-img-top" src="http://bit.ly/sampleBookImg" alt="Card image cap">
              </a>
              <div class="card-body">
                <a href="#">
                  <h3 class="card-label">Produk 3</h3>
                </a>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>
@endsection

{{-- Styles Section --}}
@section('styles')

@endsection

{{-- Scripts Section --}}
@section('scripts')
    <script src="{{ asset('js/pages/carousel.js') }}" type="text/javascript"></script>
@endsection
