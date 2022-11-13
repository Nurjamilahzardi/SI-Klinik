@extends('layout.main')

@section('container')



<link rel="stylesheet" type="text/css" href="css\carousel.css">
<link rel="stylesheet" type="text/css" href="css\carousel.rtl.css">
<main>

  <div id="carouselStandar" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselStandar" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselStandar" data-bs-slide-to="1" aria-label="Slide 2"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/klinik1.jpg" class="d-block w-100" alt="gambar">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>
        

        <div class="container">
          <div class="carousel-caption text-start">
            <h1 class="text-primary">SELAMAT DATANG DI SISTEM INFORMASI KLINIK</h1>
            <p class="text-secondary">APLIKASI INI DIKHUSUSKAN UNTUK PASIEN RAWAT JALAN </p>
            <p><a class="btn btn-lg btn-primary" href="/register">Sign up today</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/bg2.jpg" class="d-block w-100" alt="gambar">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>

        <div class="container">
          <div class="carousel-caption">
            <h1 class="text-dark">"Menjaga kesehatan merupakan kewajiban bagi setiap orang yang menginginkan hidup dengan bahagia"</h1>
    
          </div>
        </div>
      </div>
    </div>
    <div class="container">
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselStandar" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselStandar" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
    </div>
    
  </div>


  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container marketing">

    <!-- Three columns of text below the carousel -->
    <div class="row">
      <div class="col-lg-4">
         
        <img src="img/dokter1.jpg" class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em"></text></svg>

        <h2 class="fw-normal">Dokter</h2>
        <p>Mempekerjakan dokter yang handal dibidangnya</p>
        <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <img src="img/obat.jpg" class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em"></text></svg>

        <h2 class="fw-normal">Obat</h2>
        <p>Menggunakan obat yang sesuai dengan penyakitnya</p>
        <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <img src="img/poliklinik.jpg" class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em"></text></svg>

        <h2 class="fw-normal">Poliklinik</h2>
        <p>Menempatkan pasien sesuai dengan penyakitnya</p>
        <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->


    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7 ms-0 order-md-2">

        <h2 class="mt-4">SI KLINIK
Adalah Sistem Informasi Manajemen Klinik, Apotek dan Puskesmas yang bertujuan untuk membantu proses administrasi mulai dari registrasi pasien, penyimpanan data rekam medis, pemesanan ke unit penunjang stok obat, perhitungan jasa medis dan billing system (kasir).</p>
      </div>
      <div class="col-md-5 order-md-1 mt-3">

        <img src="img/klinik.jpg" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em"></text></svg>

      </div>
    </div>

  <!-- FOOTER -->
  <footer class="container">
    <div class="mb-3 mt-4"><p class="float-end"><a href="#">Back to top</a></p>
    <p>&copy; 2022 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
        
    </div>
    
  </footer>
</main>


    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      
  </body>
</html>


@endsection
