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

<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

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

    <div class="all-title-box">
        <div class="container text-center">
            <h1>Kontak<span class="m_1">SD ITQ AR-RAHMAN Islamic Religious Education</span></h1>
        </div>
    </div>

    <div id="contact" class="section wb">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-md-12 col-sm-12">
                    <div class="contact_form">
                        <div id="message"></div>
                        <form id="contactform" class="" action="{{ route('keluh.store') }}"
                            name="contactform" method="post">
                            @csrf
                            <div class="row row-fluid">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <input type="text" name="nama" id="first_name" class="form-control"
                                        placeholder="Nama Lengkap">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <input type="text" name="alamt" id="alamt" class="form-control"
                                        placeholder="alamat">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <input type="email" name="email" id="email" class="form-control"
                                        placeholder="Email">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <input type="text" name="no" id="phone" class="form-control"
                                        placeholder="Nomor Telepon">
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <textarea class="form-control" name="isi" id="comments" rows="6" placeholder="Saran/Masukan"></textarea>
                                </div>
                                <div class="text-center pd">
                                    <button type="submit" value="SEND" id="submit"
                                        class="btn btn-light btn-radius btn-brd grd1 btn-block">Kirim</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div><!-- end col -->
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3944.0631994241653!2d118.73057784025585!3d-8.441402528223563!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2db58b23f701a2bf%3A0x6f00dc69552f5807!2sPerumahan%20Tolotongga!5e0!3m2!1sen!2sid!4v1715955791393!5m2!1sen!2sid"
                        width="600" height="500" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->

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
    <script src="smartedu/js/01-custom-places-example.js"></script>
    <!-- ALL PLUGINS -->
    <script src="smartedu/js/custom.js"></script>

</body>

</html>
