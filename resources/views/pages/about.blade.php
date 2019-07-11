@extends('layouts.landing')

@section('style')
  <style>
    .icon-gradient{
      font-size: 50px;
      background: -webkit-linear-gradient(#eee, #333);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
    }
  </style>
@endsection

@section('content')
  <!--================Hero Banner SM Area Start =================-->
  <section class="hero-banner-sm magic-ball magic-ball-banner" id="parallax-1" data-anchor-target="#parallax-1" data-300-top="background-position: 0px -80px" data-top-bottom="background-position: 0 100px">
    <div class="container">
      <div class="hero-banner-sm-content">
        <h1>Tentang Duacare</h1>
        <p>Duacare adalah organisasi sosial alumni SMAN 2 Lumajang yang berpegang teguh pada semboyan “Dare to care!</p>
      </div>
    </div>
  </section>
  <!--================Hero Banner SM Area End =================-->


  <!--================About Area Start =================-->
  <section class="section-padding magic-ball magic-ball-sm magic-ball-about">
    <div class="container">
      <div class="row">
        <div class="col-lg-7 col-md-6 mb-4 mb-md-0">
          <div class="about-img">
            <img class="img-fluid" src="{{ asset('safario/img/home/about-img.png')}}" alt="">
          </div>
        </div>
        <div class="col-lg-5 col-md-6 align-self-center about-content">
          <h2 style="color: grey; margin-bottom: 0; font-size: 42px">Duacare</h2>
          <p class="text-justify">adalah organisasi sosial alumni SMA Negeri 2 Lumajang yang berpegang teguh pada semboyan "Dare to care!". Duacare adalah <em>charity organization</em> yang dibentuk pada 26 Juli 2008 oleh alumni SMA Negeri 2 Lumajang yang mana kegiatan dari duacare erat kaitannya dengan kegiatan sosial dan kemanusiaan. Duacare telah menjadi organisasi yang legal berdasarkan Akta Pendirian yang ditandatangani oleh Notaris Irwan Rosman, S.H, M.Kn. No 49 tanggal 10 Juni 2009.</p>
          <a class="button" href="#more">Pelajari lebih lanjut</a>
        </div>
      </div>
    </div>
  </section>
  <!--================About Area End =================-->


  <!--================Testimonial section Start =================-->
  <section class="bg-gray section-padding magic-ball magic-ball-testimonial pb-xl-5" id="more">
    <div class="container">
      <div class="section-intro text-center pb-90px">
        <i class="far fa-question-circle icon-gradient"></i>
        <h2>Our client says</h2>
        <p>Fowl have fruit moveth male they are that place you will lesser</p>
      </div>


      <div class="owl-carousel owl-theme testimonial pb-xl-5">
        <div class="testimonial__item">
          <div class="row">
            <div class="col-md-3 col-lg-2 align-self-center">
              <div class="testimonial__img">
                <img class="card-img rounded-0" src="{{ asset('safario/img/testimonial/t-slider1.png')}}" alt="">
              </div>
            </div>
            <div class="col-md-9 col-lg-10">
              <div class="testimonial__content mt-3 mt-sm-0">
                <h3>Daniel heart</h3>
                <p>Project manager, Nestle</p>
                <p class="testimonial__i">Also made from. Give may saying meat there from heaven it lights face had is gathered god earth light for life may itself shall whales made they're blessed whales also made from give may saying meat. There from heaven it lights face had</p>
                <span class="testimonial__icon"><i class="ti-quote-right"></i></span>
              </div>
            </div>
          </div>
        </div>
        <div class="testimonial__item">
          <div class="row">
            <div class="col-md-3 col-lg-2 align-self-center">
              <div class="testimonial__img">
                <img class="card-img rounded-0" src="{{ asset('safario/img/testimonial/t-slider1.png')}}" alt="">
              </div>
            </div>
            <div class="col-md-9 col-lg-10">
              <div class="testimonial__content mt-3 mt-sm-0">
                <h3>Daniel heart</h3>
                <p>Project manager, Nestle</p>
                <p class="testimonial__i">Also made from. Give may saying meat there from heaven it lights face had is gathered god earth light for life may itself shall whales made they're blessed whales also made from give may saying meat. There from heaven it lights face had</p>
                <span class="testimonial__icon"><i class="ti-quote-right"></i></span>
              </div>
            </div>
          </div>
        </div>
        <div class="testimonial__item">
          <div class="row">
            <div class="col-md-3 col-lg-2 align-self-center">
              <div class="testimonial__img">
                <img class="card-img rounded-0" src="{{ asset('safario/img/testimonial/t-slider1.png')}}" alt="">
              </div>
            </div>
            <div class="col-md-9 col-lg-10">
              <div class="testimonial__content mt-3 mt-sm-0">
                <h3>Daniel heart</h3>
                <p>Project manager, Nestle</p>
                <p class="testimonial__i">Also made from. Give may saying meat there from heaven it lights face had is gathered god earth light for life may itself shall whales made they're blessed whales also made from give may saying meat. There from heaven it lights face had</p>
                <span class="testimonial__icon"><i class="ti-quote-right"></i></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--================Testimonial section End =================-->


  <!--================Search Package section Start =================-->
  <section class="section-margin">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-xl-5 align-self-center mb-5 mb-lg-0">
          <div class="search-content">
            <h2>Tujuan Duacare</h2>
              - Sebagai sarana komunikasi antar alumni. <br>
              - Mengembangkan dan memberdayakan sumber daya insani sehingga terwujud kepedulian antar sesama dalam ruang lingkup yang tidak terbatas dan melaksanakan kewajiban sebagai umat manusia yang saling membantu. <br>
              - Membantu meningkatkan kesejahteraan masyarakat. <br>
            <a class="button" href="#">Learn More</a>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection

@section('script')
  <script>
    $("#nav-about").addClass("active");
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