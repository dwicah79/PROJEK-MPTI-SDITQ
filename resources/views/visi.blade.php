<!DOCTYPE html>
<html lang="en">

<head>
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
    <style>
        .carousel-control-prev.custom-prev,
        .carousel-control-next.custom-next {
            width: 50px;
            height: 50px;
            background-color: #fbb03b;
            border: none;
            border-radius: 5px;
            opacity: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
        }

        .carousel-control-prev.custom-prev:hover,
        .carousel-control-next.custom-next:hover {
            background-color: #e9a039;
        }

        .carousel-control-prev.custom-prev span,
        .carousel-control-next.custom-next span {
            font-size: 24px;
            color: white;
        }

        .carousel-control-prev.custom-prev {
            left: 10px;
        }

        .carousel-control-next.custom-next {
            right: 10px;
        }

        .hmv-box .container {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
        }

        .hmv-box .inner-hmv {
            flex: 1;
            max-width: 45%;
            margin: 10px;
            box-sizing: border-box;
        }
    </style>
</head>

<body class="host_version">
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

    <div class="hmv-box">
        <div class="container">
            @foreach ($Visimisi as $data)
                <div class="inner-hmv">
                    <div class="icon-box-hmv"><i class="flaticon-eye"></i></div>
                    <h3>Visi</h3>
                    <div class="tr-pa">V</div>
                    <p>{{ $data->visi }}</p>
                </div>
                <div class="inner-hmv">
                    <div class="icon-box-hmv"><i class="flaticon-achievement"></i></div>
                    <h3>Misi</h3>
                    <div class="tr-pa">M</div>
                    <p>{{ $data->misi }}</p>
                </div>
            @endforeach
        </div>
    </div>

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <h3>Tentang Kami</h3>
                        </div>
                        <p>SDITQ Ar-Rahman adalah sekolah dasar Islam terpadu yang berkomitmen untuk memberikan
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
                <div class="footer-left">
                    <p class="footer-links">
                        <a href="#">Home</a>
                        <a href="#">About</a>
                        <a href="#">FAQ</a>
                        <a href="#">Contact</a>
                    </p>
                </div>
                <div class="footer-center">
                    <p class="footer-company-name">All Rights Reserved. &copy; 2018 <a
                            href="{{ '/' }}">SDIT AR-RAHMAN</a> Design By : <a
                            href="https://www.instagram.com/faridhalputraa/" target="_blank">Faridhal Putra
                            Maulana</a></p>
                </div>
            </div>
        </div><!-- end container -->
    </div><!-- end copyrights -->

    <a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

    <!-- ALL JS FILES -->
    <script src="smartedu/js/all.js"></script>
    <!-- ALL PLUGINS -->
    <script src="smartedu/js/custom.js"></script>

</body>

</html>
