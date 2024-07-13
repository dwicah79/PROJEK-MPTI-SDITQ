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
<link rel="apple-touch-icon" href="images/apple-touch-icon.png">

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
    .our-team {
        border: 1px solid #ddd;
        padding: 10px;
        margin-bottom: 30px;
        background: #f7f7f7;
        transition: all 0.3s ease;
        display: flex;
        flex-direction: column;
        align-items: left;
    }

    .our-team:hover {
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
    }

    .team-content {
        display: flex;
        flex-direction: column;
        align-items: left;
    }

    .team-img-details {
        display: flex;
        align-items: left;
        margin-bottom: 20px;
    }

    .team-img {
        margin-right: 20px;
    }

    .team-img img {
        border-radius: 50%;
    }

    .details p {
        margin: 5px 0;
    }

    .details {
        text-align: left;
    }

    .team-content h3 {
        font-size: 20px;
        font-weight: 700;
        margin: 10px 0;
    }

    .team-content .post {
        display: block;
        font-size: 14px;
        color: #777;
    }

    .org-chart {
        text-align: center;
    }

    .org-chart img {
        max-width: 100%;
        height: auto;
    }
</style>

<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

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
    <div class="all-title-box">
        <div class="container text-center">
            <h1>Guru<span class="m_1">SD ITQ AR-RAHMAN Islamic Religious Education</span></h1>
        </div>
    </div>

    <div id="teachers" class="section wb">
        <div class="container">
            <div class="row">
                @php $counter = 0; @endphp
                @foreach ($guru as $teacher)
                    <div class="col-lg-6 col-md-12 col-12">
                        <div class="our-team">
                            <div class="team">
                                <div class="team-img-details">
                                    <div class="team-img">
                                        <img src="{{ asset('foto_guru/' . $teacher->foto) }}"
                                            alt="Foto {{ $teacher->nama_guru }}" style="width: 150px; height: 150px;">
                                    </div>
                                    <div class="details">
                                        <p class="title">{{ $teacher->nama_guru }}</p>
                                        <h4 class="title">{{ $teacher->jabatan }}</h4>
                                        <p><strong>Jabatan Fungsional: &nbsp;</strong>
                                            <strong>{{ $teacher->fungsional }}</strong>
                                        </p>
                                        <p><strong>Email: &nbsp;</strong> <strong>{{ $teacher->email }}</strong></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @php    $counter++; @endphp
                        @if ($counter % 2 == 0)
                    </div>
                    <div class="row">
                @endif
            </div>
            @endforeach
        </div>
    </div>
    </div>

    <div id="organization" class="section wb">
        <div class="container">
            <div class="org-chart">
                <h1 class="text mb-5"><b>Struktur Organisasi</h1>
                <img src="{{ asset('assetsekolah/struktur.png') }}" alt="Struktur Organisasi">
            </div>
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

</body>

</html>
