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
    <title>Warung Sederhana</title>
  </head>
  <body>
    <!-- Load Page -->
    <div class="page-load animate-slide-up" area-hidden="true">
        <div class="loadingio-spinner-eclipse-jf5e22bpfve"><div class="ldio-g0e1vuxutig">
            <div></div>
            </div></div>
    </div>
    <!-- Akhir Load Page -->

    <!-- Navigasi -->
    <section id="navbar">
      <nav class="navbar navbar-expand-md fixed-top navbar-dark">
        <div class="container-md">
          <a class="navbar-brand">
            <i class="bi bi-shop"></i>
            <h2 class="text-info text-uppercase">Warung Sederhana</h2>
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
              <li class="nav-item">
                <a href="#map" class="nav-link text-white"><i class="bi bi-box-arrow-in-right"></i> LOGIN</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- Akhir Navigasi -->

      <!-- Jumbtron -->
      <section id="beranda" class="h-100 jumbtron-content">
        <div class="container-md h-100">
          <div class="d-flex h-100 flex-column justify-content-center align-items-center text-center">
            <h1 id="opening" class="display-1 fw-bold text-white" data-aos="fade-up" data-aos-easing="ease" data-aos-delay="1300 text-dark" data-aos-duration="2000">Warung <span class="text-info">Nostalgia</span> Masakan <span class="text-info">Rumahan</span></h1>
            <p class="w-75 lead fw-normal text-white my-1" id="tulis"></p>
            <a id="buttonmenu" href="#menu" class="btn btn-lg btn-outline-light bg-transparent rounded-pill btn-jumbtron fw-bold mt-4 p-3 px-4 fs-6" data-aos="zoom-in" data-aos-duration="2000" data-aos-delay="500"> Harga mulai dari $4 </a>
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
      </section>
    <!-- Akhir Jumbtron -->

    <!-- Promo -->
    <section id="iklan" class="bg-info">
      <div class="container-md d-flex h-100 flex-column justify-content-center align-items-center text-center py-5">
        <div class="row mb-3 heading">
        <div class="col">
        <h1 class="display-4 fw-bold text-white mt-3" data-aos="zoom-in-down" data-aos-duration="1000"> Kami Menyediakan Segala Menu </h1>
        </div>
        </div>
        <p class="w-70 lead text-white my-1 fs-4" data-aos="zoom-in-up" data-aos-duration="1000">Gunakan kode <b>MAKANBANG</b> untuk mendapatkan potongan harga s&k berlaku.</p>
        <a href="#menu" target="_blank"><button data-aos="zoom-in" data-aos-duration="1500" data-aos-delay="300" type="submit" class="btn btn-lg btn-outline-light rounded-pill bg-white text-info mt-4 fs-6 p-2 px-4 btn-promo fw-bold">Selengkapnya.</button></a> 
      </div>
    </section>
    <!-- Akhir Promo -->

    <!-- Tentang -->
    <section id="tentang" class="py-5">
      <div class="container-md">
        <div class="d-flex justify-content-center align-items-center">
          <div class="d-flex-left w-50">
            <div class="mb-5 mt-4">
              <h2 class="fw-bold" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="1500">Tentang Kami <i class="bi bi-info-circle"></i></h2>
              <hr class="text-info" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="1500" />
              <p class="lead" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="1500">
                Warung Makan ini berdiri Sejak Tidak Ada Kursi, awal mula Warung Makan ini bernama warungku seiring waktu berjalan berubah menjadi Warung Sederhana. Kenapa diberi nama Warung Sederhana karena suatu hari orang lebih suka sesuatu yang mengingatkan rumah sendiri. Dari situ lah kami Terinspirasi merubah nama Warung Makan ini menjadi Warung Sederhana
              </p>
            </div>
            <div>
              <h2 class="fw-bold" data-aos="fade-up" data-aos-duration="2000">Kenapa Harus Warung Sederhana?</h2>
              <hr class="text-info" data-aos="fade-up" data-aos-duration="2000" />
              <ul class="fs-5 fw-light" data-aos="fade-up" data-aos-duration="2000">
                <li>Harga Terjangkau.</li>
                <p>Tentu di Warung Sederhana kamu bakal dapat harga makan jauh lebih murah dari tempat makan diluar sana!</p>
                <li class="py-1">Banyak Promo.</li>
                <p>Kami cukup banyak menawarkan Anda banyak nya Promo di Warung Sederhana, Apalagi dengan langsung datang ke tempat.</p>
                <li>Delicious.</li>
                <p>Harga yang ramah dikantong tentu rasa nya juga bukan main 99% Nagih.</p>
              </ul>
            </div>
          </div>
          <div class="d-flex-right w-50 d-none d-lg-block">
            <img class="img-fluid w-100" data-aos="zoom-in-up" data-aos-duration="2000" src="assets/images/tentang/mommy.png" alt="poto" title="ibu" srcset=""/>
          </div>
        </div>
      </div>
    </section>
    <!-- Akhir Tentang -->

    <!-- Card 1 -->
    <section id="joindiscord" class="bg-dark">
      <div class="joindiscord-img">
        <div class="container my-3 py-5">
          <div class="d-flex flex-column flex-md-row align-items-center justify-content-center joindiscord-content">
            <h2 class="text-white mb-md-0 mb-3 fw-bold">Follow Instagram</h2>
            <a href="https://www.instagram.com/riniehandoko/" target="_blank"><button href="#about" class="btn btn-lg btn-outline-info btn-joindiscord bg-transparent text-info rounded-pill p-2 px-4 fs-6">Here <i class="bi bi-instagram"></i></button></a>
          </div>
        </div>
      </div>
    </section>
    <!-- Akhir Card -->

    <!-- Menu -->
    <section id="menu">
      <div class="container-md text-center py-5">
        <div class="row mb-3 mt-4 heading">
          <div class="col" data-aos="fade-down" data-aos-duration="1500">
            <h1 class="fw-bold">Daftar Menu <i class="bi bi-card-list"></i></h1>
            <hr class="underline text-info"/>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 mb-3">
            <div class="card" data-aos="zoom-in" data-aos-delay="200" data-aos-duration="1000">
              <img src="assets/images/produk/1.webp" class="card-img-top" alt="https://unsplash.com/" title="Source : https://unsplash.com/" />
              <div class="card-body">
                <p class="card-text mb-0 text-center fw-bold">Fried Chiken</p>
                <p class="card-text text-center">Price : $7</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card" data-aos="zoom-in" data-aos-delay="200" data-aos-duration="1000">
              <img src="assets/images/produk/2.webp" class="card-img-top" alt="https://unsplash.com/" title="Source : https://unsplash.com/" />
              <div class="card-body">
                <p class="card-text mb-0 text-center fw-bold">Fried Rice</p>
                <p class="card-text text-center">Price : $6</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card" data-aos="zoom-in" data-aos-delay="200" data-aos-duration="1000">
              <img src="assets/images/produk/3.webp" class="card-img-top" alt="https://unsplash.com/" title="Source : https://unsplash.com/" />
              <div class="card-body">
                <p class="card-text mb-0 text-center fw-bold">Beef Burger</p>
                <p class="card-text text-center">Price : $5</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card" data-aos="zoom-in" data-aos-delay="200" data-aos-duration="1000">
              <img src="assets/images/produk/4.webp" class="card-img-top" alt="https://unsplash.com/" title="Source : https://unsplash.com/" />
              <div class="card-body">
                <p class="card-text mb-0 text-center fw-bold">Hot Coffe</p>
                <p class="card-text text-center">Price : $4</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card" data-aos="zoom-in" data-aos-delay="200" data-aos-duration="1000">
              <img src="assets/images/produk/5.webp" class="card-img-top" alt="https://unsplash.com/" title="Source : https://unsplash.com/" />
              <div class="card-body">
                <p class="card-text mb-0 text-center fw-bold">Juices</p>
                <p class="card-text text-center">Price : $6</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card" data-aos="zoom-in" data-aos-delay="200" data-aos-duration="1000">
              <img src="assets/images/produk/6.webp" class="card-img-top" alt="https://unsplash.com/" title="Source : https://unsplash.com/" />
              <div class="card-body">
                <p class="card-text mb-0 text-center fw-bold">Ice Chocolatte</p>
                <p class="card-text text-center">Price : $5</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card" data-aos="zoom-in" data-aos-delay="200" data-aos-duration="1000">
              <img src="assets/images/produk/7.webp" class="card-img-top" alt="https://unsplash.com/" title="Source : https://unsplash.com/" />
              <div class="card-body">
                <p class="card-text mb-0 text-center fw-bold">Kebab Turki</p>
                <p class="card-text text-center">Price : $6</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card" data-aos="zoom-in" data-aos-delay="200" data-aos-duration="1000">
              <img src="assets/images/produk/8.webp" class="card-img-top" alt="https://unsplash.com/" title="Source : https://unsplash.com/" />
              <div class="card-body">
                <p class="card-text mb-0 text-center fw-bold">Rendang</p>
                <p class="card-text text-center">Price : $10</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card" data-aos="zoom-in" data-aos-delay="200" data-aos-duration="1000">
              <img src="assets/images/produk/9.webp" class="card-img-top" alt="https://unsplash.com/" title="Source : https://unsplash.com/" />
              <div class="card-body">
                <p class="card-text mb-0 text-center fw-bold">Pizza</p>
                <p class="card-text text-center">Price : $7</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Akhir Menu -->

    <!-- Card 2 -->
    <section id="warung" class="bg-dark">
      <div class="warung-img">
        <div class="container my-3 py-5">
          <div class="d-flex flex-column flex-md-row align-items-center justify-content-center warung-content">
            <h2 class="text-white mb-md-0 mb-3 fw-bold">Order Now !!!</h2>
            <a href="https://p.kindpng.com/picc/s/3-32789_ministry-coming-soon-hd-png-download.png+" target="_blank"><button href="#about" class="btn btn-lg btn-outline-info btn-joindiscord bg-transparent text-info rounded-pill p-2 px-4 fs-6"><i class="bi bi-cart3"></i></button></a>
          </div>
        </div>
      </div>
    </section>
    <!-- Akhir Card -->

    <!-- Service -->
    <section id="services">
      <div class="container text-center my-5">
        <div class="mb-2 heading" data-aos="fade-down" data-aos-duration="1500">
          <h1 class="fw-bold">Our Services <i class="bi bi-clipboard-check"></i></h1>
          <hr class="underline text-info" />
        </div>
        <div class="row pt-5 g-md-0 g-4">
          <div class="col-lg-3 col-md-6" data-aos="fade-right" data-aos-duration="2000">
            <h1 class="display-5"><i class="bi bi-wifi"></i></h1>
            <div class="card-body">
              <h3 class="card-title pb-2 fw-bold">Free Wifi</h3>
              <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet.</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6" data-aos="fade-right" data-aos-duration="2000" data-aos-delay="200">
            <h1 class="display-5">
              <i class="bi bi-box-seam"></i>
            </h1>
            <div class="card-body">
              <h3 class="card-title pb-2 fw-bold">Delivery</h3>
              <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet.</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6" data-aos="fade-right" data-aos-duration="2000" data-aos-delay="400">
            <h1 class="display-5"><i class="bi bi-shop"></i></h1>
            <div class="card-body">
              <h3 class="card-title pb-2 fw-bold">Digital Marketing</h3>
              <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet.</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6" data-aos="fade-right" data-aos-duration="2000" data-aos-delay="600">
            <h1 class="display-5"><i class="bi bi-award"></i></h1>
            <div class="card-body">
              <h3 class="card-title pb-2 fw-bold">Branding</h3>
              <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Akhir Services -->

    <!-- FAQ -->
    <section id="faq" class="bg-dark" data-aos="zoom-in" data-aos-duration="1000">
      <div class="container text-center py-5">
        <div class="mb-4 mt-5 heading" data-aos="fade-down" data-aos-duration="2000" data-aos-delay="400">
          <h1 class="text-white fw-bold">Frequently Asked Questions <i class="bi bi-question-circle"></i></h1>
          <hr class="underline text-info">
        </div>
        <div class="accordion" id="questions">
          <div class="row">
            <div class="col-lg-6 mb-5">
              <!-- Item 1 -->
              <div class="accordion-item accordion-item-1" data-aos="zoom-in" data-aos-duration="2000" data-aos-delay="400">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#question-one">Di mana tepatnya Warteg berada?</button>
                </h2>
                <div id="question-one" class="accordion-collapse collapse" data-bs-parent="#questions">
                  <div class="accordion-body">Lokasi Restoran Rumah Makan tepat berada di Jl Kita Bisa No .01 Jakarta, Indonesia untuk lebih jelas klik <a href="#map">Disini</a>.</div>
                </div>
              </div>
              <!-- Item 2 -->
              <div class="accordion-item" data-aos="zoom-in" data-aos-duration="2000" data-aos-delay="400">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#question-two">Menu di Rumah Makan kisaran Harga berapa?</button>
                </h2>
                <div id="question-two" class="accordion-collapse collapse" data-bs-parent="#questions">
                  <div class="accordion-body">Untuk harga kita ga mahal - mahal karna ga laku ya kalo mahal, kamu bisa lihat di bagian <a href="#menu"> Menu</a> untuk lebih jelas.</div>
                </div>
              </div>
              <!-- Item 3 -->
              <div class="accordion-item" data-aos="zoom-in" data-aos-duration="2000" data-aos-delay="400">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#question-three">Apa yang perlu saya ketahui tentang Rumah Makan?</button>
                </h2>
                <div id="question-three" class="accordion-collapse collapse" data-bs-parent="#questions">
                  <div class="accordion-body">Kamu perlu tahu bahwa jika kamu datang makan langsung di Restoran bakal dapat Promo & Merchandise gratis.</div>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <!-- Item 4 -->
              <div class="accordion-item accordion-item-4" data-aos="zoom-in" data-aos-duration="2000" data-aos-delay="400">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#question-four">Bagaimana cara saya untuk menghubungi?</button>
                </h2>
                <div id="question-four" class="accordion-collapse collapse" data-bs-parent="#questions">
                  <div class="accordion-body">Kamu bisa menghubungi Kami lewat Email atau SMS untuk alamat Email dan Nomor Telepon sudah Kami cantukam di bawah klik <a href="#contact">Disini</a>.</div>
                </div>
              </div>
              <!-- Item 5 -->
              <div class="accordion-item" data-aos="zoom-in" data-aos-duration="2000" data-aos-delay="400">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#question-five">Pelayanan apa saja yang ada di Warteg Bahasa Inggris?</button>
                </h2>
                <div id="question-five" class="accordion-collapse collapse" data-bs-parent="#questions">
                  <div class="accordion-body">Untuk Pelayanan tentu Kami tawarkan yang terbaik untuk Anda, untuk melihat Pelayanan singkat klik <a href="#services">Disini</a>.</div>
                </div>
              </div>
              <!-- Item 6 -->
              <div class="accordion-item" data-aos="zoom-in" data-aos-duration="2000" data-aos-delay="400">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#question-six">Harga ongkos kirim untuk Layanan Delivery berapa?</button>
                </h2>
                <div id="question-six" class="accordion-collapse collapse" data-bs-parent="#questions">
                  <div class="accordion-body">Untuk Layanan Delivery kamu tidak perlu bayar ongkos kirim, cukup duduk cantik dirumah tunggu pesanan mu datang. Jadi order sekarang!</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Akhir FAQ -->

    <!-- Contact -->
    <section id="contact">
      <div class="container-md text-center py-5">
        <div class="mb-3 mt-4 heading">
          <h1 class="fw-bold" data-aos="fade-down" data-aos-duration="2000">Contact Us <i class="bi bi-telephone"></i></h1>
          <hr class="underline text-info" data-aos="fade-down" data-aos-duration="2000" />
        </div>
        <div class="d-flex flex-lg-row flex-column contact-flex mt-4 justify-content-between">
          <div class="contact-flex-left">
            <a href="https://www.google.com/maps/place/Monumen+Nasional/@-6.175392,106.827153,12z/data=!4m5!3m4!1s0x0:0x3d2ad6e1e0e9bcc8!8m2!3d-6.1753924!4d106.8271528?hl=id" target="_blank">
            <div class="d-flex align-items-center text-start" data-aos="fade-up" data-aos-duration="2000">
              <i class="fas fa-map-marker-alt text-white bg-info p-3 d-flex align-items-center justify-content-center me-3"></i>
              <div class="">
                <h5 class="text-uppercase mb-0 fw-bold">Alamat</h5>
                <p class="m-0">Jl Kita Bisa No. 01, Jakarta, Indonesia</p>
              </div>
            </div>
            </a>
            <a href="tel:+6285899999999" target="_blank">
            <div class="d-flex align-items-center my-4 text-start" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="200">
              <i class="fas fa-phone-alt text-white bg-info p-3 d-flex align-items-center justify-content-center me-3"></i>
              <div class="">
                <h5 class="text-uppercase mb-0 fw-bold">Nomor Telepon</h5>
                <p class="m-0">+62 858-XXXX-XXXX</p>
              </div>
            </div>
            </a>
            <a href="https://mail.google.com/mail/u/0/?view=cm&tf=1&fs=1&to=egyditya@gmail.com" target="_blank">
            <div class="d-flex align-items-center text-start" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="400">
              <i class="fas fa-envelope text-white bg-info p-3 d-flex align-items-center justify-content-center me-3"></i>
              <div class="">
                <h5 class="text-uppercase mb-0 fw-bold">Email</h5>
                <p class="m-0">egyditya@gmail.com</p>
              </div>
            </div>
          </div>
          </a>

          <div class="contact-flex-right w-50">
            <div class="alert alert-dismissible fade show d-none client-notif" role="alert" style="background-color: #0dcaf0;">
            <strong>Berhasil!</strong> Terima kasih, pesan Anda telah terkirim dan kami terima <i class="bi bi-heart-fill"></i>.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <form data-aos="fade-up" data-aos-duration="2000" data-aos-delay="400" name="warteg-contact-form">
              <div class="form-group">
                <input type="text" class="form-control form-control-lg font-weight-normal rounded-0 fs-6" placeholder="Your Name..." required id="nama" name="nama"/>
              </div>
              <div class="form-group my-3">
                <input type="email" class="form-control form-control-lg font-weight-normal rounded-0 fs-6" placeholder="Your Email..." required id="email" name="email"/>
              </div>
              <div class="form-group">
                <textarea placeholder="Subject..." class="form-control font-weight-normal rounded-0" rows="3" required id="pesan" name="pesan"></textarea>
              </div>

              <button type="submit" class="btn btn-kirim btn-info btn-lg d-block text-white rounded px-4 font-weight-light float-left mt-3">Kirim <i class="bi bi-send"></i> </button>
              <button class="btn btn-loading btn-info btn-lg d-block text-white rounded px-4 font-weight-light float-left mt-3 btn-primary d-none" type="button" disabled><span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Loading...</button>
            </form>
          </div>
        </div>
      </div>
    </section>
    <!-- Akhir Contact -->

    <!-- Map -->
    <section id="map" class="my-4 bg-dark" data-aos="zoom-in" data-aos-duration="1000">
      <div class="container-md text-center py-5">
        <div class="mb-4 mt-5 heading">
          <h1 class="text-light fw-bold" data-aos="fade-right" data-aos-duration="2000">Location Warung Sederhana <i class="bi bi-geo-alt"></i></h1>
          <hr class="underline text-info" data-aos="fade-right" data-aos-duration="2000"/>
        </div>
      <div class="container" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63466.17252504528!2d106.85619608108638!3d-6.179481928816805!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f5d2e764b12d%3A0x3d2ad6e1e0e9bcc8!2sMonumen%20Nasional!5e0!3m2!1sid!2sid!4v1644650885037!5m2!1sid!2sid"
          width="100%"
          height="400"
          style="border: 0"
          allowfullscreen=""
          loading="lazy"
        ></iframe>
      </div>
    </section>
    <!-- Akhir Map -->

    <!-- Footer -->
    <footer id="footer" class="py-4 bg-info position-relative">
      <div class="container-md text-center text-dark fs-6">
        <p class="my-0">&copy; Copyright <span class="fw-bold">Warung Sederhana</span>. All Rights Reserved.</p>
        <p class="my-0">
          Created & Design with
          <span class="fw-bold">Laravel</span> by
          <span class="fw-bold">Reynaldi Fakhri Pratama</span>
        </p>
      </div>
    </footer>
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
      gsap.to('#tulis', {duration: 2.5, delay: 1.5 , text: 'Berdiri sejak Tidak Ada Kursi.'})
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
  </body>
</html>
