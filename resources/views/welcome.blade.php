<!DOCTYPE html>
<html lang="en">

<!-- Basic -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<!-- Mobile Metas -->
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Site Metas -->
<title>SD ITQ AR-Rahman</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">

<!-- Site Icons -->
<link rel="shortcut icon" href="smartedu/images/logos.png" type="image/x-icon" />
<link rel="apple-touch-icon" href="smartedu/images/apple-touch-icon.png">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="smartedu/css/bootstrap.min.css">
<!-- Site CSS -->
<link rel="stylesheet" href="smartedu/style.css">
<!-- ALL VERSION CSS -->
<link rel="stylesheet" href="smartedu/css/versions.css">
<!-- Responsive CSS -->
<link rel="stylesheet" href="smartedu/css/responsive.css">
<!-- Custom CSS -->
<link rel="stylesheet" href="smartedu/css/custom.css">

<!-- Modernizer for Portfolio -->
<script src="smartedu/js/modernizer.js"></script>

<style>
    .carousel-control-prev.custom-prev,
    .carousel-control-next.custom-next {
        width: 50px;
        height: 50px;
        background-color: #fbb03b;
        /* Set the background color as shown in the image */
        border: none;
        border-radius: 5px;
        /* Slightly rounded corners */
        opacity: 1;
        display: flex;
        align-items: center;
        justify-content: center;
        position: absolute;
        top: 50%;
        /* Position the button vertically center */
        transform: translateY(-50%);
        /* Adjust to exact center */
    }

    .carousel-control-prev.custom-prev:hover,
    .carousel-control-next.custom-next:hover {
        background-color: #e9a039;
        /* Slightly darker color on hover */
    }

    .carousel-control-prev.custom-prev span,
    .carousel-control-next.custom-next span {
        font-size: 24px;
        /* Increase the size of the arrow icons */
        color: white;
        /* White color for the arrows */
    }

    .carousel-control-prev.custom-prev {
        left: 10px;
        /* Position from the left */
    }

    .carousel-control-next.custom-next {
        right: 10px;
        /* Position from the right */
    }
</style>
</head>

<body class="host_version">
    <!-- LOADER -->
    <div id="preloader">
        <div class="loader-container">
            <div class="progress-br float shadow">
                <div class="progress__item"></div>
            </div>
        </div>
    </div>
    <!-- END LOADER -->

    <!-- Start header -->
    <header class="top-navbar">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ route('index') }}">
                    <img src="smartedu/images/logos.png" width="150px" height="80px" alt="" />
                </a>
                <a class="navbar-brand" href="{{ route('index') }}">
                    <h1 style="font-weight: bold;color: white;">SD ITQ AR-RAHMAN</h1>
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-host"
                    aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbars-host">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item {{ Request::route()->getName() == 'index' ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('index') }}">Beranda</a>
                        </li>
                        <li class="nav-item dropdown {{ Request::route()->getName() == 'abouts' ? 'active' : '' }}">
                            <a class="nav-link dropdown-toggle" href="#" id="aboutsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Profile
                            </a>
                            <div class="dropdown-menu" aria-labelledby="aboutsDropdown">
                                <a class="dropdown-item" href="{{ route('abouts') }}">Tentang Kami</a>
                                <a class="dropdown-item" href="{{ route('visi') }}">Visi dan Misi</a>
                                <a class="dropdown-item" href="{{ route('kontak') }}">Kontak</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown {{ Request::route()->getName() == 'abouts' ? 'active' : '' }}">
                            <a class="nav-link dropdown-toggle" href="#" id="aboutsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Akademis
                            </a>
                            <div class="dropdown-menu" aria-labelledby="aboutsDropdown">
                                <a class="dropdown-item" href="{{ route('kurikulum') }}">Kurikulum</a>
                                <a class="dropdown-item" href="{{ route('teacher') }}">Guru</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- End header -->

    <div id="carouselExampleControls" class="carousel slide bs-slider box-slider" data-ride="carousel"
        data-pause="hover" data-interval="false">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleControls" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleControls" data-slide-to="1"></li>
            <li data-target="#carouselExampleControls" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <div id="home" class="first-section" style="background-image:url('assetsekolah/banner1.jpg');">
                    <div class="dtab">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 text-right">
                                    <div class="big-tagline">
                                        <h2><strong>SD ITQ AR-RAHMAN </strong> </h2>
                                        <p class="lead">Menyediakan landasan pendidikan Islam yang kokoh, SD ITQ
                                            AR-RAHMAN menawarkan lebih dari sekadar kurikulum akademik. Kami membimbing
                                            siswa untuk memahami nilai-nilai Islam yang mendalam, memupuk kesadaran
                                            spiritual, dan mendorong pertumbuhan holistik. Bergabunglah dengan kami
                                            untuk meraih keunggulan akademik dan spiritual.</p>
                                        <a href="{{ route('kontak') }}" class="hover-btn-new"><span>Kontak
                                                Kami</span></a>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <a href="#overviews" class="hover-btn-new"><span>Baca Selengkapnya</span></a>
                                    </div>
                                </div>
                            </div><!-- end row -->
                        </div><!-- end container -->
                    </div>
                </div><!-- end section -->
            </div>
            <div class="carousel-item">
                <div id="home" class="first-section" style="background-image:url('assetsekolah/banner2.jpg');">
                    <div class="dtab">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 text-left">
                                    <div class="big-tagline">
                                        <h2>SD ITQ AR-Rahman </h2>
                                        <p class="lead" data-animation="animated fadeInLeft">Temukan kesempurnaan
                                            pendidikan di SD ITQ AR-Rahman! Kami menghadirkan lingkungan belajar yang
                                            merangsang, kurikulum yang inovatif, dan guru yang berkomitmen untuk
                                            menginspirasi setiap langkah perkembangan anak.</p>
                                        <a href="{{ route('kontak') }}" class="hover-btn-new"><span>Kontak
                                                Kami</span></a>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <a href="#overviews" class="hover-btn-new"><span>Baca Selengkapnya</span></a>
                                    </div>
                                </div>
                            </div><!-- end row -->
                        </div><!-- end container -->
                    </div>
                </div><!-- end section -->
            </div>
            <!-- Left Control -->
            <a class="new-effect carousel-control-prev" href="#carouselExampleControls" role="button"
                data-slide="prev">
                <span class="fa fa-angle-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>

            <!-- Right Control -->
            <a class="new-effect carousel-control-next" href="#carouselExampleControls" role="button"
                data-slide="next">
                <span class="fa fa-angle-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <div id="overviews" class="section lb">
        <div class="container">
            <div class="section-title row text-center">
                <div class="col-md-8 offset-md-2">
                    <h3>Tentang kami</h3>
                    <p class="lead">SD ITQ AR-RAHMAN Islamic Religious Education</p>
                </div>
            </div><!-- end title -->

            @php $count = 0; @endphp
            @foreach ($about as $tentang)
                @if ($count < 2)
                    <div class="row align-items-center">
                        <div class="col-12">
                            <div class="message-box">
                                <h2>{{ $tentang->judul }}</h2>
                                <p>{{ $tentang->isi }}</p>
                            </div><!-- end messagebox -->
                        </div><!-- end col -->
                        <!-- carousel -->
                        <div id="carouselExampleControls-{{ $count }}" class="carousel slide"
                            data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-100" src="{{ asset('gambar_about/' . $tentang->gambar) }}"
                                        alt="First slide" style="width: 500px; max-height : 500px;">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="{{ asset('gambar_about/' . $tentang->gambar2) }}"
                                        alt="Second slide" style="width: 500px; max-height : 500px;">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="{{ asset('gambar_about/' . $tentang->gambar3) }}"
                                        alt="Third slide" style="width: 500px; max-height : 500px;">
                                </div>
                            </div>
                            <a class="carousel-control-prev custom-prev"
                                href="#carouselExampleControls-{{ $count }}" role="button"
                                data-slide="prev">
                                <span class="fa fa-angle-left" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next custom-next"
                                href="#carouselExampleControls-{{ $count }}" role="button"
                                data-slide="next">
                                <span class="fa fa-angle-right" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div><!-- end row -->
                    @php        $count++; @endphp
                @endif
            @endforeach
        </div><!-- end container -->
    </div><!-- end section -->



    <section class="section lb page-section">
        <div class="container">
            <div class="section-title row text-center">
                <div class="col-md-8 offset-md-2">
                    <h3 class="text-black">Pencapain kami</h3>
                    <p class="lead text-black">Beberapa pencapain kami dari dulu hingga sekarang</p>
                </div>
            </div><!-- end title -->
            <div class="timeline">
                <div class="timeline__wrap">
                    <div class="timeline__items">
                        @if (isset($prestasi) && $prestasi->count() > 0)
                            @foreach ($prestasi as $data)
                                <div class="timeline__item">
                                    <div class="timeline__content img-bg-{{ $loop->iteration }}"
                                        style="background-color: #000000;">
                                        <h2 class="text-white">{{ $data->judul }}</h2>
                                        <p class="text-white">{{ $data->deskripsi }}</p>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <div class="timeline__item">
                                <div class="timeline__content img-bg-1" style="background-color: #000000;">
                                    <h2 class="text-white">2022</h2>
                                    <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                        Integer
                                        dignissim neque condimentum lacus dapibus. Lorem ipsum dolor sit amet,
                                        consectetur
                                        adipiscing elit.</p>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>



    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <h3>Tentang Kami</h3>
                        </div>
                        <p> SDITQ Ar-Rahman adalah sekolah dasar Islam terpadu yang berkomitmen untuk memberikan
                            pendidikan berkualitas dengan integrasi nilai-nilai Islam dan ilmu pengetahuan modern. Kami
                            berlokasi di lingkungan yang kondusif untuk belajar dan tumbuh, menyediakan fasilitas yang
                            memadai serta suasana yang mendukung perkembangan intelektual, spiritual, dan emosional
                            siswa.</p>
                    </div><!-- end clearfix -->
                </div><!-- end col -->

                <div class="col-lg-4 col-md-4 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <h3>Information Link</h3>
                        </div>
                        <ul class="footer-links">
                            <li><a href="{{ route('index') }}">Home</a></li>
                            <li><a href="{{ route('abouts') }}">About</a></li>
                            <li><a href="{{ route('kontak') }}">Contact</a></li>
                        </ul><!-- end links -->
                    </div><!-- end clearfix -->
                </div><!-- end col -->

                <div class="col-lg-4 col-md-4 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <h3>Contact Details</h3>
                        </div>

                        <ul class="footer-links">
                            <li><a href="mailto:#">sditqar2020@gmail.com</a></li>
                            <li><a href="#">www.yoursite.com</a></li>
                            <li>Jl Rajawali Perumahan Tolotongga Asri Kelurahan Ule Kecamatan Asakota Kota Bima NTB</li>
                            <li><a href="https://wa.me/+6285253332112" target="_blank"> +6285253332112</a></li>
                        </ul><!-- end links -->
                    </div><!-- end clearfix -->
                </div><!-- end col -->

            </div><!-- end row -->
        </div><!-- end container -->
    </footer><!-- end footer -->

    <div class="copyrights">
        <div class="container">
            <div class="footer-distributed">
                <div class="footer-center">
                    <p class="footer-company-name">All Rights Reserved. &copy; 2018 <a
                            href="{{ '/' }}">SDIT
                            AR-RAHMAN</a> Design By :
                        <a href="https://www.instagram.com/faridhalputraa/" target="_blank">Faridhal Putra Maulana</a>
                    </p>
                </div>
            </div>
        </div><!-- end container -->
    </div><!-- end copyrights -->

    <a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

    <!-- ALL JS FILES -->
    <script src="smartedu/js/all.js"></script>
    <!-- ALL PLUGINS -->
    <script src="smartedu/js/custom.js"></script>
    <script src="smartedu/js/timeline.min.js"></script>
    <script>
        timeline(document.querySelectorAll('.timeline'), {
            forceVerticalMode: 700,
            mode: 'horizontal',
            verticalStartPosition: 'left',
            visibleItems: 4
        });
    </script>
</body>

</html>
