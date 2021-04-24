{{-- Extends layout --}}
@extends('layout.default_blog')

{{-- Content --}}
@section('content-top-side')

    <div class="card card-custom w-100 mb-5">
        <div class="card-body">
          <div class="owl-carousel owl-theme">
            <div style="height:400px;"class="w-100 d-flex align-items-center justify-content-center">
              <h1>Produk terbaru</h1>
             </div>
            <div style="height:400px;"class="w-100 d-flex align-items-center justify-content-center">
              <h1>Produk terbaru</h1>
             </div>
            <div style="height:400px;"class="w-100 d-flex align-items-center justify-content-center">
              <h1>Produk terbaru</h1>
             </div>
            <div style="height:400px;"class="w-100 d-flex align-items-center justify-content-center">
              <h1>Produk terbaru</h1>
             </div>
          </div>
        </div>
    </div>

@endsection
@section('content')
  <div class="card card-custom gutter-b">
   <div class="card-body">
     <div class="row">
       <div class="col-12">
         <div class="card card-custom">
             <div class="card-header flex-wrap border-0 pt-6 pb-0">
                 <div class="card-title">
                     <h3 class="card-label">Produk</h3>
                 </div>
                 <div class="card-toolbar">
                     <a href="/list/produk" class="btn btn-sm btn-outline-primary font-weight-bold">
                          Lainnya <i class="flaticon2-right-arrow icon-sm"></i>
                     </a>
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
       </div>
       <div class="col-12">
         <div class="card card-custom">
             <div class="card-header flex-wrap border-0 pt-6 pb-0">
                 <div class="card-title">
                     <h3 class="card-label">Buku</h3>
                 </div>
                 <div class="card-toolbar">
                     <a href="/list/buku" class="btn btn-sm btn-outline-primary font-weight-bold">
                          Lainnya <i class="flaticon2-right-arrow icon-sm"></i>
                     </a>
                 </div>
             </div>
             <div class="card-body">
               <div class="row">
                 <div class="col-md-4">
                   <div class="card card-custom gutter-b">
                     <a href="#">
                       <img class="card-img-top" src="http://bit.ly/sampleImg" alt="Card image cap">
                     </a>
                     <div class="card-body">
                       <a href="#">
                         <h3 class="card-label">Buku 1</h3>
                       </a>
                       <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                     </div>
                   </div>
                 </div>
                 <div class="col-md-4">
                   <div class="card card-custom gutter-b">
                     <a href="#">
                       <img class="card-img-top" src="http://bit.ly/sampleImg" alt="Card image cap">
                     </a>
                     <div class="card-body">
                       <a href="#">
                         <h3 class="card-label">Buku 2</h3>
                       </a>
                       <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                     </div>
                   </div>
                 </div>
                 <div class="col-md-4">
                   <div class="card card-custom gutter-b">
                     <a href="#">
                       <img class="card-img-top" src="http://bit.ly/sampleImg" alt="Card image cap">
                     </a>
                     <div class="card-body">
                       <a href="#">
                         <h3 class="card-label">Buku 3</h3>
                       </a>
                       <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                     </div>
                   </div>
                 </div>
               </div>
             </div>
         </div>
       </div>
       <div class="col-12">
         <div class="card card-custom">
             <div class="card-header flex-wrap border-0 pt-6 pb-0">
                 <div class="card-title">
                     <h3 class="card-label">Kerajinan</h3>
                 </div>
                 <div class="card-toolbar">
                     <a href="/list/kerajinan" class="btn btn-sm btn-outline-primary font-weight-bold">
                          Lainnya <i class="flaticon2-right-arrow icon-sm"></i>
                     </a>
                 </div>
             </div>
             <div class="card-body">
               <div class="row">
                 <div class="col-md-4">
                   <div class="card card-custom gutter-b">
                     <a href="#">
                       <img class="card-img-top" src="http://bit.ly/sampleImg2" alt="Card image cap">
                     </a>
                     <div class="card-body">
                       <a href="#">
                         <h3 class="card-label">Kerajinan 1</h3>
                       </a>
                       <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                     </div>
                   </div>
                 </div>
                 <div class="col-md-4">
                   <div class="card card-custom gutter-b">
                     <a href="#">
                       <img class="card-img-top" src="http://bit.ly/sampleImg2" alt="Card image cap">
                     </a>
                     <div class="card-body">
                       <a href="#">
                         <h3 class="card-label">Kerajinan 2</h3>
                       </a>
                       <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                     </div>
                   </div>
                 </div>
                 <div class="col-md-4">
                   <div class="card card-custom gutter-b">
                     <a href="#">
                       <img class="card-img-top" src="http://bit.ly/sampleImg2" alt="Card image cap">
                     </a>
                     <div class="card-body">
                       <a href="#">
                         <h3 class="card-label">Kerajinan 3</h3>
                       </a>
                       <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                     </div>
                   </div>
                 </div>
               </div>
             </div>
         </div>
       </div>
     </div>
   </div>
  </div>

    <div class="card card-custom gutter-b mt-3">
     <div class="card-header">
      <div class="card-title">
       <h3 class="card-label">
        Artikel
       </h3>
      </div>
      <div class="card-toolbar">
          <a href="/list/artikel" class="btn btn-sm btn-outline-primary font-weight-bold">
               Lainnya <i class="flaticon2-right-arrow icon-sm"></i>
          </a>
      </div>
     </div>
     <div class="card-body">
      <div class="row">
        <div class="col-md-5">
          <div class="card card-custom gutter-b">
            <a href="#">
              <img class="card-img-top" src="http://bit.ly/sampleArticleImg" alt="Card image cap">
            </a>
           <div class="card-body">
             <h3 class="card-label">
              Artikel Terbaru
             </h3>
             <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
           </div>
          </div>
        </div>
        <div class="col-md-7">
          <div class="row">
            <div class="col-md-12">
              <div class="card card-custom gutter-b">
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-4">
                      <div class="card card-custom">
                        <a href="#">
                          <img class="card-img-top" src="http://bit.ly/sampleArtivleImg2" alt="Card image cap">
                        </a>
                    </div>
                  </div>
                  <div class="col-md-8">
                    <a href="#">
                      <h3 class="card-label">Judul Artikel 1</h3>
                    </a>
                   <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-12">
              <div class="card card-custom gutter-b">
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-4">
                      <div class="card card-custom">
                        <a href="#">
                          <img class="card-img-top" src="http://bit.ly/sampleArtivleImg2" alt="Card image cap">
                        </a>
                    </div>
                  </div>
                  <div class="col-md-8">
                    <a href="#">
                      <h3 class="card-label">Judul Artikel 2</h3>
                    </a>
                   <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  </div>
                  </div>
                </div>
              </div>
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
