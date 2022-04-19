<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <!-- Icon -->
    <link rel="icon" type="image/png" href="assets/images/icon/fococlipping-20220206-115758.png" sizes="16x16" />
    <!-- CSS Saya -->
    <link rel="stylesheet" href="assets/css/style.css" />
    <!-- Bootstrap Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css">
    <!-- Aos -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <!-- Scrooll Down -->
    <link rel="stylesheet" href="assets/css/scroll.css">
    <!-- Font Google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gideon+Roman&family=Montserrat&family=Oswald&family=Pacifico&family=Poppins&family=Roboto:wght@300&display=swap" rel="stylesheet">
    <!-- Load Page -->
    <link rel="stylesheet" href="assets/css/loadpage.css">
    <title>{{ $jumbo->title }}</title>
  </head>
  <body>
    <!-- Load Page -->
    <div class="page-load animate-slide-up" area-hidden="true">
        <div class="loadingio-spinner-eclipse-jf5e22bpfve"><div class="ldio-g0e1vuxutig">
            <div></div>
            </div></div>
    </div>
    <!-- Akhir Load Page -->

    <section id="navbar">
      <!-- include Navigasi -->
      <!-- Navigasi -->
    <nav class="navbar navbar-expand-md fixed-top navbar-dark">
      <div class="container-md">
        <a class="navbar-brand">
          <i class="bi bi-shop"></i>
          <h2 class="text-info text-uppercase">{{ $jumbo->title }}</h2>
        </a>
        <div class="collapse navbar-collapse" id="navmenu">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a href="#beranda" class="nav-link text-white">BERANDA</a>
            </li>
            <li class="nav-item">
              <a href="#tentang" class="nav-link text-white">TENTANG KAMI</a>
            </li>
            <li class="nav-item">
              <a href="#menu" class="nav-link text-white">MENU</a>
            </li>
            <li class="nav-item">
              <a href="#faq" class="nav-link text-white">FAQ</a>
            </li>
            <li class="nav-item">
              <a href="#contact" class="nav-link text-white">CONTACT</a>
            </li>
            <li class="nav-item">
              <a href="#map" class="nav-link text-white">LOCATION</a>
            </li>
            @auth
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Selamat Datang, {{ auth()->user()->name }}
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-window-reverse"></i> Dashboard</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li>
                    <form action="/logout" method="POST">
                      @csrf
                      <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-in-right"></i> Log Out</a></button>
                    </form>
                </ul>
              </li>
            @else
              <li class="nav-item">
                <a href="/login" class="nav-link text-white"><i class="bi bi-box-arrow-in-right"></i> LOGIN</a>
              </li>
            @endauth

          </ul>
        </div>
      </div>
    </nav>
<!-- Akhir Navigasi -->
      <!-- Akhir Navigasi -->

      <!-- include Jumbtron -->
      <section id="beranda" class="h-100 jumbtron-content">
        <div class="container-md h-100">
          <div class="d-flex h-100 flex-column justify-content-center align-items-center text-center">
            <h1 id="opening" class="display-1 fw-bold text-white" data-aos="fade-up" data-aos-easing="ease" data-aos-delay="1300 text-dark" data-aos-duration="2000">{{ $jumbo->slogan1}}</h1>
            <p class="w-75 lead fw-normal text-white my-1" id="t"></p>
            <a id="buttonmenu" href="#menu" class="btn btn-lg btn-outline-light bg-transparent rounded-pill btn-jumbtron fw-bold mt-4 p-3 px-4 fs-6" data-aos="zoom-in" data-aos-duration="2000" data-aos-delay="500"> Harga mulai dari 5000an </a>
            <div class="jam mt-4"  data-aos="flip-left" data-aos-duration="1000" data-aos-delay="1000">
            <div id="waktu" onload="showTime()"></div>
            </div>
            <div class="beban">
            <a href="#tentang"><p class="hero__scroll fw-bold" data-aos="fade-down" data-aos-easing="ease" data-aos-delay="1300 text-dark" data-aos-duration="2000">Scroll down
                    <i class="chevron bottom"></i>
                  </p>
            </a>
            </div>
          </div>
        </div>
    </section>
      <!-- Akhir Jumbtron -->
    </section>

    <!-- include Promo -->
    @include('frontend.partials.s_iklan')
    <!-- Akhir Promo -->


   <!-- Tentang -->
<section id="tentang" class="py-5">
  <div class="container-md">
    <div class="d-flex justify-content-center align-items-center">
      <div class="d-flex-left w-50">
        <div class="mb-5 mt-4">
          <h2 class="fw-bold" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="1500">Tentang Kami <i class="bi bi-info-circle"></i></h2>
          <hr class="text-info" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="1500" />
          {{ $about->body }}
        </div>
        <div>
          <h2 class="fw-bold" data-aos="fade-up" data-aos-duration="2000">Kenapa Harus {{ $jumbo->title }}?</h2>
          <hr class="text-info" data-aos="fade-up" data-aos-duration="2000" />
          {{ $about->body2 }}
        </div>
      </div>
      <div class="d-flex-right w-50 d-none d-lg-block">
        <img class="img-fluid w-100" data-aos="zoom-in-up" data-aos-duration="2000" src="assets/images/tentang/mommy.png" alt="poto" title="ibu" srcset=""/>
      </div>
    </div>
  </div>
</section>
<!-- Akhir Tentang -->


    <!-- Card sosial media instagram -->
    @include('frontend.partials.sosmed')
    <!-- Akhir Card -->

    <!-- layout Menu makanan bang-->
    @if ($menus->count())
    
    <!-- Menu -->


    <section id="menu">
      <div class="container-md text-center py-5">
        <div class="row">
            <div class="row mb-3 mt-4 heading">
                <div class="col" data-aos="fade-down" data-aos-duration="1500">
                    <h1 class="fw-bold">Daftar Menu <i class="bi bi-card-list"></i></h1>
                    <hr class="underline text-info"/>
                </div>
            </div>
        </div>
      </div>
      <div class="row">
        <div class="row mb-3 mt-4">
            <div class="col ms-3" data-aos="fade-down" data-aos-duration="1500">
                <h1 class="fw-bold text-start">Makanan <i class="bi bi-card-list"></i></h1>
                <hr class="underline text-info"/>
            </div>
        </div>
      </div>
      <div class="row">
      @foreach ($menus as $menu)
        @if ($menu->category->name == 'makanan')
        @include('frontend.partials.menu',array('menus'=>'menu'))
        @endif
        
      @endforeach
      </div>
      <div class="row">
        <div class="row mb-3 mt-4">
            <div class="col ms-3" data-aos="fade-down" data-aos-duration="1500">
                <h1 class="fw-bold text-start">Minuman <i class="bi bi-card-list"></i></h1>
                <hr class="underline text-info"/>
            </div>
        </div>
      </div>
      <div class="row">
      @foreach ($menus as $menu)
        @if ($menu->category->name == 'minuman')
        @include('frontend.partials.menu',array('menus'=>'menu'))
        @endif
        
      @endforeach
      </div>
      
    </section>
    <!-- Akhir Menu -->
    
    @else
        <p class="text-center fs-4">TIDAK ADA MENU</p>
    @endif
    <!-- Akhir Menu -->

    <!-- pemesanan dalam container card -->
    @include('frontend.partials.order_card')
    <!-- Akhir Card -->

    <!-- include bagian service -->
    {{-- @include('frontend.partials.service') --}}
    <!-- Akhir Services -->

    <!-- include bagian FAQ -->
    <section id="faq" class="bg-dark" data-aos="zoom-in" data-aos-duration="1000">
      <div class="container text-center py-5">
        <div class="mb-4 mt-5 heading" data-aos="fade-down" data-aos-duration="2000" data-aos-delay="400">
          <h1 class="text-white fw-bold">Frequently Asked Questions <i class="bi bi-question-circle"></i></h1>
          <hr class="underline text-info">
        </div>
        <div class="accordion" id="questions">
          <div class="row">
            <div class="col-lg mb-5">
              <div id='accordion' class='accordion'>
               @foreach ($faqs as $faq)
              
                <h3>{{ $faq->tanya }}</h3>
                 <div class="">
                       {{ $faq->jawab }}
                 </div>
                 @endforeach
               </div>
               
              
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Akhir FAQ -->

    <!-- Contact -->
    @include('frontend.partials.contact')
    <!-- Akhir Contact -->

    <!-- Map -->
    @include('frontend.partials.maps')
    <!-- Akhir Map -->

    <!-- Footer -->
    @include('frontend.partials.footer')
    <!-- Akhir Footer -->

    <!-- Contact -->
    <script>
    const scriptURL = 'https://script.google.com/macros/s/AKfycbzIbUdcbgsGBBCxocT-1oA_oKn00oGCShxfeOorO5IQhhLTgtmFltuM-FgD9iiOkw/exec'
    const form = document.forms['warteg-contact-form']
    const btnKirim = document.querySelector('.btn-kirim');
    const btnLoading = document.querySelector('.btn-loading');
    const clientNotif = document.querySelector('.client-notif');

    form.addEventListener('submit', e => {
      e.preventDefault()
      // tombol kirim di klik
      //tampilkan tombol loading, hilangkan tombol kirim
      btnLoading.classList.toggle('d-none');
      btnKirim.classList.toggle('d-none');
      fetch(scriptURL, { method: 'POST', body: new FormData(form)})
      .then(response => {
        //tampilkan tombol kirim, hilangkan tombol loading
        btnLoading.classList.toggle('d-none');
        btnKirim.classList.toggle('d-none');
        // tapilkan alert
        clientNotif.classList.toggle('d-none');
        //reset form jika berhasil kirim
        form.reset();
        console.log('Success!', response)
      })
      .catch(error => console.error('Error!', error.message))
    })
    </script>
    <!-- Akhir Contact -->

    <!-- GSAP Animasi -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/TextPlugin.min.js"></script>
    <script>
      gsap.registerPlugin(TextPlugin);
      gsap.to('#tulis', {duration: 2.5, delay: 1.5 , text: 'Berdiri di sekitar tahun 2000an'})
    </script>
    <!-- Akhir Animasi Gsap -->

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- Akhir Bottstrap -->

    <!-- AOS Animasi -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init({
        once: true,
      });
    </script>
    <!-- Akhir Animasi AOS -->

    <!-- Loadpage -->
    <script src="assets/src/loadpage.js"></script>
    <!-- Akhir Load Page -->

    <!-- Waktu -->
    <script src="assets/src/clock.js"></script>
    <!-- Akhir Waktu -->

    <!-- Navbar -->
    <script src="assets/src/navbar.js"></script>
    <!-- Akhir navbar -->

{{-- acordion --}}
    <script src='https://code.jquery.com/jquery-3.1.1.min.js'></script>
    <script src='https://code.jquery.com/ui/1.12.1/jquery-ui.min.js'></script>
    <link href='https://code.jquery.com/ui/1.12.1/themes/cupertino/jquery-ui.css' rel='stylesheet'>

      <script>
      $(document).ready(function() {
 
      $( '#accordion' ).accordion({
      active: false,
      collapsible: true
      });

      })
      </script>
  </body>
</html>
