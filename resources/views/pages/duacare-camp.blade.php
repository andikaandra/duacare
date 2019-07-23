@extends('layouts.landing')

@section('style')
<style>
#owl-carousel-camp .item{
  margin: 3px;
}
#owl-carousel-camp .item img{
  display: block;
  width: 100%;
  height: auto;
}
</style>
@endsection

@section('content')
  <!--================Hero Banner SM Area Start =================-->
  <section class="hero-banner-sm magic-ball magic-ball-banner" id="parallax-1" data-anchor-target="#parallax-1" data-300-top="background-position: 0px -80px" data-top-bottom="background-position: 0 100px">
    <div class="container">
      <div class="hero-banner-sm-content">
        <h1>Duacare Camp</h1>
      </div>
    </div>
  </section>

  <section class="section-padding magic-ball magic-ball-sm magic-ball-about">
    <div class="container">
      <div class="row">
        <div class="col-lg-5 col-md-6 mb-4 mb-md-0">
          <div class="about-img text-center wow bounceInLeft" data-wow-duration="1.0s" data-wow-delay="0.5s">
            <img class="img-fluid" src="{{ asset('safario/img/home/camp.png') }}" alt="Duacare Image" style="max-height: 350px; width: auto;">
          </div>
        </div>
        <div class="col-lg-7 col-md-6 align-self-center about-content wow bounceInRight" data-wow-duration="1.0s" data-wow-delay="0.5s">
          <h2 style="color: grey; margin-bottom: 0; font-size: 42px">Duacare Camp</h2>
          <p class="text-justify" style="line-height: 2.0">adalah kegiatan yang dilaksanakan setiap 2 tahun sekali untuk agenda internal dimana seluruh anggota duacare dapat ikut bergabung, teridiri dari berbagai acara untuk mempererat tali silaturahmi antar sesama anggota duacare dari berbagai angkatan.</p>
          <a class="button" href="#more">Lihat Keseruannya</a>
        </div>
      </div>
    </div>
  </section>

  <section class="bg-gray section-padding magic-ball magic-ball-testimonial pb-xl-5" id="more">
    <div class="container">
      <div class="section-intro text-center pb-90px">
        <i class="far fa-question-circle icon-gradient"></i>
        <h2>Duacare Camp</h2>
      </div>
      <div class="owl-carousel owl-theme" id="owl-carousel-camp">
        <div class="item"><img src="{{ asset('safario/img/home/camp.png') }}" alt=""></div>
        <div class="item"><img src="{{ asset('safario/img/home/dgts.png') }}" alt=""></div>
        <div class="item"><img src="{{ asset('safario/img/home/beasiswa.png') }}" alt=""></div>
        <div class="item"><img src="{{ asset('safario/img/home/camp.png') }}" alt=""></div>
        <div class="item"><img src="{{ asset('safario/img/home/camp.png') }}" alt=""></div>
        <div class="item"><img src="{{ asset('safario/img/home/dfr.png') }}" alt=""></div>
        <div class="item"><img src="{{ asset('safario/img/home/camp.png') }}" alt=""></div>
        <div class="item"><img src="{{ asset('safario/img/home/camp.png') }}" alt=""></div>
      </div>
    </div>
  </section>
  {{-- @include('partials.contact') --}}

@endsection

@section('script')
  <script>
    $(document).ready(function() {
      $("#owl-demo").owlCarousel({
            loop: true,
            margin: 30,
            lazyLoad: true,
            items: 1,
            nav: true,
            dots: true,
            autoplay: true,
            autoplayTimeout: 5000,
            autoplayHoverPause: true,
            responsiveClass: true,
            slideSpeed: 300,
            paginationSpeed: 500,
            responsive: {
                0: {
                    items: 1
                }
            }
      });
     
    });

    $("a").on('click', function(event) {
      if (this.hash !== "") {
        event.preventDefault();
        var hash = this.hash;

        $('html, body').animate({
          scrollTop: $(hash).offset().top - $('nav').height()
        }, 800, function(){
     
        window.location.hash = hash;
        });
      }
    });
  </script>
@endsection