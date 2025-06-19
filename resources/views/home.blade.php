{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Multi Auth</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    {{-- Navbar --}
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Galonku</a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto">
                    @if (Auth::check())
                        <li class="nav-item">
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <span class="navbar-text">{{ Auth::user()->nama_pengguna }}</span>
                                <button class="btn btn-outline-light" type="submit">Logout</button>
                            </form>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ route('login') }}">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ route('register') }}">Register</a>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    {{-- Konten --
    <div class="container mt-5">
        <h1 class="text-center">Halaman Utama</h1>
    </div>

    <!-- Bootstrap JS Bundle -
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html> --}}

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Galonku</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicons -->
    <link href="{{ asset('Arsha') }}/assets/img/favicon.png" rel="icon">
    <link href="{{ asset('Arsha') }}/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('Arsha') }}/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('Arsha') }}/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="{{ asset('Arsha') }}/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="{{ asset('Arsha') }}/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="{{ asset('Arsha') }}/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="{{ asset('Arsha') }}/assets/css/main.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Arsha
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Updated: Feb 22 2025 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

    @include('layout.header2')

    <main class="main">

        <!-- Hero Section -->
        <section id="hero" class="hero section dark-background">

            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center"
                        data-aos="zoom-out">
                        <h1>SELAMAT DATANG DI WEBSITE GALONKU</h1>
                        <p>Platform pemesanan air galon yang praktis, terpercaya, dan selalu siap mengantar kesegaran ke
                            rumah Anda!</p>
                        <div class="d-flex">
                            <a href="{{ route('login') }}" class="btn-get-started">Get Started</a>
                        </div>
                    </div>
                    <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="200">
                        <img src="{{ asset('Arsha') }}/assets/img/galong.png" class="img-fluid animated" alt="">
                    </div>
                </div>
            </div>

        </section><!-- /Hero Section -->


        <!-- About Section -->
        <section id="about" class="about section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Tentang Kami</h2>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row gy-4">

                    <div class="col-lg-8 mx-auto content text-center" data-aos="fade-up" data-aos-delay="100">
                        <p>
                            GalonKu adalah platform pemesanan air galon yang mengutamakan kenyamanan dan kepercayaan.
                            Kami
                            menyediakan layanan pengantaran air galon berkualitas tinggi langsung ke pintu rumah Anda.
                            Dengan
                            GalonKu, Anda tidak perlu khawatir tentang ketersediaan air bersih, karena kami selalu siap
                            memenuhi kebutuhan hidrasi Anda.
                        </p>
                    </div>


                </div>

            </div>

        </section><!-- /About Section -->



        <!-- Services Section -->
        <section id="services" class="services section light-background">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Produk</h2>

            </div><!-- End Section Title -->

            <div class="container">

                <div class="row gy-4">

                    <div class="row gy-4 justify-content-center">
                        <!-- Galon 1 -->
                        <div class="col-xl-3 col-md-4 col-sm-6 d-flex" data-aos="fade-up" data-aos-delay="100">
                            <div class="service-item position-relative text-center p-3 shadow-sm bg-white rounded">
                                <img src="assets/img/aquaa.png" class="img-fluid mb-2" alt="Galon 1">
                                <h4>Galon Aqua</h4>
                                <p>Air mineral segar dan terpercaya untuk kebutuhan sehari-hari.</p>
                            </div>
                        </div>

                        <!-- Galon 2 -->
                        <div class="col-xl-3 col-md-4 col-sm-6 d-flex" data-aos="fade-up" data-aos-delay="200">
                            <div class="service-item position-relative text-center p-3 shadow-sm bg-white rounded">
                                <img src="assets/img/vitt.png" class="img-fluid mb-2" alt="Galon 2">
                                <h4>Galon Vit </h4>
                                <p>Kualitas air terjamin dengan harga terjangkau.</p>
                            </div>
                        </div>

                        <!-- Galon 3 -->
                        <div class="col-xl-3 col-md-4 col-sm-6 d-flex" data-aos="fade-up" data-aos-delay="300">
                            <div class="service-item position-relative text-center p-3 shadow-sm bg-white rounded">
                                <img src="assets/img/cleo.png" class="img-fluid mb-2" alt="Galon 3">
                                <h4>Galon Cleo</h4>
                                <p>Air murni dengan kemasan higienis dan ringan.</p>
                            </div>
                        </div>

                        <!-- Galon 4 -->
                        <div class="col-xl-3 col-md-4 col-sm-6 d-flex" data-aos="fade-up" data-aos-delay="400">
                            <div class="service-item position-relative text-center p-3 shadow-sm bg-white rounded">
                                <img src="assets/img/clubbb.png" class="img-fluid mb-2" alt="Galon 4">
                                <h4>Galon Club</h4>
                                <p>Dikenal dengan rasa ringan dan kesegaran alami.</p>
                            </div>
                        </div>

                        <!-- Galon 5 -->
                        <div class="col-xl-3 col-md-4 col-sm-6 d-flex" data-aos="fade-up" data-aos-delay="500">
                            <div class="service-item position-relative text-center p-3 shadow-sm bg-white rounded">
                                <img src="assets/img/le_minerale.png" class="img-fluid mb-2" alt="Galon 5">
                                <h4>Galon Le Minerale</h4>
                                <p>Kaya mineral, cocok untuk keluarga aktif.</p>
                            </div>
                        </div>
                    </div>


                </div>

            </div>

        </section><!-- /Services Section -->





        <!-- Contact Section -->
        <section id="contact" class="contact section">

            <!-- Section Title -->
            <div class="container section-title text-center" data-aos="fade-up">
                <h2>Kontak</h2>
                <p></p>
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row justify-content-center gy-4">

                    <div class="col-lg-6">
                        <div class="info-wrap text-center">

                            <div class="info-item d-flex flex-column align-items-center text-center mb-4"
                                data-aos="fade-up" data-aos-delay="200">
                                <i class="bi bi-geo-alt fs-1 mb-2 text-primary"></i>
                                <div>
                                    <h3>Alamat</h3>
                                    <p>Jl. Poros Majene, Desa Lagi-agi, Kab. Campalagian</p>
                                </div>
                            </div>

                            <div class="info-item d-flex flex-column align-items-center text-center mb-4"
                                data-aos="fade-up" data-aos-delay="300">
                                <i class="bi bi-telephone fs-1 mb-2 text-success"></i>
                                <div>
                                    <h3>Telepon</h3>
                                    <p>+62-822-8970-6514</p>
                                </div>
                            </div>

                            <div class="info-item d-flex flex-column align-items-center text-center mb-4"
                                data-aos="fade-up" data-aos-delay="400">
                                <i class="bi bi-envelope fs-1 mb-2 text-danger"></i>
                                <div>
                                    <h3>Email</h3>
                                    <p>rahmatrahmadi920@gmail.com</p>
                                </div>
                            </div>

                            <div class="info-item d-flex flex-column align-items-center text-center"
                                data-aos="fade-up" data-aos-delay="500">
                                <i class="bi bi-clock fs-1 mb-2 text-warning"></i>
                                <div>
                                    <h3>Jam Kerja</h3>
                                    <p>Senin - Sabtu: 08.00 - 17.00</p>
                                </div>
                            </div>

                        </div><!-- End Info Wrap -->
                    </div>

                </div>

            </div>

        </section><!-- /Contact Section -->



    </main>

    @include('layout.footer2')

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="{{ asset('Arsha') }}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('Arsha') }}/assets/vendor/php-email-form/validate.js"></script>
    <script src="{{ asset('Arsha') }}/assets/vendor/aos/aos.js"></script>
    <script src="{{ asset('Arsha') }}/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="{{ asset('Arsha') }}/assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="{{ asset('Arsha') }}/assets/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="{{ asset('Arsha') }}/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="{{ asset('Arsha') }}/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

    <!-- Main JS File -->
    <script src="{{ asset('Arsha') }}/assets/js/main.js"></script>

</body>

</html>
