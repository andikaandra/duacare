@extends('layouts.landing')

@section('style')
  <style>
    .icon-gradient{
      font-size: 50px;
      background: -webkit-linear-gradient(#eee, #333);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
    }
    #misi-ul {
      list-style: none;
    }

    #accord-ul li:before {
      content: '✓';
    }
  </style>
@endsection

@section('content')
  <!--================Hero Banner SM Area Start =================-->
  <section class="hero-banner-sm visimisi-banner magic-ball magic-ball-banner" id="parallax-1" data-anchor-target="#parallax-1" data-300-top="background-position: 0px -80px" data-top-bottom="background-position: 0 100px">
    <div class="container">
      <div class="hero-banner-sm-content">
        <h1>Tentang Duacare</h1>
        {{-- <p>Duacare adalah organisasi sosial alumni SMAN 2 Lumajang yang berpegang teguh pada semboyan “Dare to care!</p> --}}
      </div>
    </div>
  </section>
  <!--================Hero Banner SM Area End =================-->


  <!--================About Area Start =================-->
  <section class="section-padding magic-ball magic-ball-sm magic-ball-about">
    <div class="container">
      <div class="row">
        <div class="col-lg-5 col-md-6 mb-4 mb-md-0">
          <div class="about-img text-center wow bounceInLeft" data-wow-duration="1.0s" data-wow-delay="0.5s">
            <img class="img-fluid" src="{{ asset('duacare-image/logo-icon.png') }}" alt="Duacare Image" style="max-height: 350px; width: auto;">
          </div>
        </div>
        <div class="col-lg-7 col-md-6 align-self-center about-content wow bounceInRight" data-wow-duration="1.0s" data-wow-delay="0.5s">
          <h2 style="color: grey; margin-bottom: 0; font-size: 42px">Duacare</h2>
          <p class="text-justify" style="line-height: 2.0">adalah Organisasi sosial alumni SMA 2 lumajang yang berpegang teguh pada semboyan “Dare to care!” Duacare adalah charity organization yang dibentuk pada 26 Juli 2008 oleh alumni SMA Negeri 2 Lumajang. Yang mana kegiatan dari duacare sendiri dekat hubungannya dengan kegiatan sosial dan kemanusiaan. Duacare telah menjadi organisasi yang legal berdasarkan Akta Pendirian yang ditandatangani Notaris Irwan Rosman, S.H., M.Kn. No. 49 tanggal 10 Juni 2009.</p>
          <a class="button" href="#more">Pelajari lebih lanjut</a>
        </div>
      </div>
    </div>
  </section>
  <!--================About Area End =================-->


  <!--================Testimonial section Start =================-->
  <section class="bg-gray section-padding magic-ball magic-ball-testimonial pb-xl-5" id="more">
    <div class="container mb-4">
      <div class="section-intro text-center pb-90px">
        <i class="fas fa-bullseye icon-gradient"></i>
        <h2>Visi Misi & Tujuan</h2>
        <hr>
      </div>
      <div class="ziehharmonika">
        <h3>Visi</h3>
        <div>
            Terwujudnya kepedulian segenap keluarga besar alumni SMA Negeri 2 Lumajang terhadap sesama
        </div>
        <h3>Misi</h3>
        <div>
          <ul id="accord-ul">
            <li>Membangun silaturahmi antar alumni SMA Negeri 2 Lumajang</li>
            <li>Menumbuhkan rasa saling peduli</li>
            <li>Menumbuhkan jiwa kreatif</li>
            <li>Meningkatkan kemampuan berorganisasi anggota.</li>
          </ul>
        </div>
        <h3>Tujuan</h3>
        <div>
          <ul id="accord-ul">
            <li>Meningkatkan komunikasi antar alumni</li>
            <li>Mengembangkan dan memberdayakan sumber daya insani sehingga terwujud kepedulian antar sesama dalam ruang ligkup yang tidak terbatas dan dapat melaksanakan kewajiban sebagai umat manusia untuk saling membantu</li>
            <li>Membantu meningkatkan kesejahteraan masyarakat</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <section class="section-margin">
    <div class="container">
      <div class="section-intro text-center pb-90px">
        <i class="fas fa-medal icon-gradient"></i>
        <h2>Founder Duacare</h2>
        <hr>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-3 col-sm-6">
            <div class="our-team">
                <div class="pic">
                    <img src="{{ asset('duacare-image/founder/asadah.jpg') }}" alt="">
                </div>
                <div class="team-content">
                    <h3 class="title text-white">Asadah Sukmawati</h3>
                    <small>asadah023@yahoo.co.id</small>
                    <ul class="social">
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="our-team">
                <div class="pic">
                    <img src="{{ asset('duacare-image/founder/beny.jpeg') }}" alt="">
                </div>
                <div class="team-content">
                    <h3 class="title text-white">Benny Firmansyah</h3>
                    <small>benny.firmansyah@bpk.go.id</small>
                    <ul class="social">
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="our-team">
                <div class="pic">
                    <img src="{{ asset('duacare-image/founder/crismalla.jpeg') }}" alt="">
                </div>
                <div class="team-content">
                    <h3 class="title text-white">Chrismalla abya</h3>
                    <small>nyik_malla@yahoo.co.id</small>
                    <ul class="social">
                    </ul>
                </div>
            </div>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-3 col-sm-6">
            <div class="our-team">
                <div class="pic">
                    <img src="{{ asset('duacare-image/founder/maeda.jpeg') }}" alt="">
                </div>
                <div class="team-content">
                    <h3 class="title text-white">Maeda Dicky Candra</h3>
                    <small>maedadcandra@gmail.com</small>
                    <ul class="social">
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="our-team">
                <div class="pic">
                    <img src="{{ asset('duacare-image/founder/mety.jpg') }}" alt="">
                </div>
                <div class="team-content">
                    <h3 class="title text-white">Metty Agustisari</h3>
                    <small>mety.agustisari@yahoo.com</small>
                    <ul class="social">
                    </ul>
                </div>
            </div>
        </div>
      </div>
    </div>
  </section>

  <section class="bg-gray section-padding magic-ball magic-ball-testimonial pb-xl-5">
    <div class="container">
      <div class="section-intro text-center pb-90px">
        <i class="far fa-question-circle icon-gradient"></i>
        <h2>Wilayah Operasional</h2>
        <p>Di setiap region, terdapat regional manager yang bertanggung jawab terhadap kegiatan atau alumni pada region tersebut.</p>
      </div>
      <img class="img-fluid" id="map-region" src="{{ asset('duacare-image/peta1.png') }}" alt="">
      <p class="mt-4 text-center text-muted font-wight-lighter"><span class="regions mx-2">Lumajang</span><span class="regions mx-2">- <span class="mx-2"></span>Jember</span><span class="regions mx-2">- <span class="mx-2"></span>Surabaya</span><span class="regions mx-2">- <span class="mx-2"></span>Malang</span><span class="regions mx-2">- <span class="mx-2"></span>Jogja Jateng</span><span class="regions mx-2">- <span class="mx-2"></span>Jabodetabek Bandung</span></p>
    </div>
  </section>


  <section class="section-margin">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12 col-md-8">
          <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/xvKIcf1xuBQ" allowfullscreen></iframe>
          </div>          
        </div>
      </div>
    </div>
  </section>

  @include('partials.contact')

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
    $('.ziehharmonika').ziehharmonika({
      collapsible: true,
      prefix: '★',
    });

    $('.ziehharmonika h3:eq(0)').ziehharmonika('open', true);

  </script>
@endsection