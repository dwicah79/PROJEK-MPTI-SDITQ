<!doctype html>
<html lang="en">

<head>
    <style>
        .custom-table {
            background-color: #97A3AB;
            /* Light gray background */
        }

        /* Custom Pagination Styling */
        .pagination {
            display: flex;
            justify-content: center;
            /* Align to the center */
        }

        .page-item {
            margin: 0 5px;
            /* Add some space between the items */
        }

        .page-item .page-link {
            padding: 5px 10px;
            /* Adjust the padding */
            font-size: 14px;
            /* Adjust the font size */
            border-radius: 3px;
            /* Optional: Make corners rounded */
        }

        .page-item .page-link:hover {
            background-color: #e9ecef;
            /* Optional: Add hover effect */
        }

        .page-item.active .page-link {
            background-color: #007bff;
            /* Active page background color */
            color: #fff;
            /* Active page text color */
            border-color: #007bff;
            /* Active page border color */
        }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SD ITQ AR-Rahman</title>
    <link rel="shortcut icon" type="image/png" href="{{ asset('smartedu/images/logos.png') }}" />
    <link rel="stylesheet" href="{{ asset('admin/src/assets/css/styles.min.css') }}" />
</head>

<body>
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        <!-- Sidebar Start -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div>
                <div class="brand-logo d-flex align-items-center justify-content-between">
                    <a href="{{ route('dashboard') }}" class="text-nowrap logo-img">
                        <a class="navbar-brand" href="{{ route('dashboard') }}">
                            <img src="smartedu/images/logos.png" width="70px" height="50px" alt="" />
                        </a>
                        <a class="navbar-brand" href="{{ route('dashboard') }}">
                            <h1 style="font-weight: bold;color: black; font-size: 16px;">SD ITQ AR-RAHMAN</h1>
                        </a>
                        <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
                            <i class="ti ti-x fs-8"></i>
                        </div>
                </div>
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
                    <ul id="sidebarnav">
                        <li class="nav-small-cap">
                            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                            <span class="hide-menu">Home</span>
                        </li>
                        <li class="sidebar-item {{ Request::route()->getName() == 'dashboard' ? 'active' : '' }}">
                            <a class="sidebar-link" href="{{ route('dashboard') }}" aria-expanded="false">
                                <span>
                                    <i class="ti ti-layout-dashboard"></i>
                                </span>
                                <span class="hide-menu">Dashboard</span>
                            </a>
                        <li class="sidebar-item">
                            <a class="sidebar-link {{ Request::is('guru') == 'guru' ? 'active' : '' }}"
                                href="{{ route('guru.index') }}" aria-expanded="false">
                                <span>
                                    <i class="ti ti-article"></i>
                                </span>
                                <span class="hide-menu">Data Guru</span>
                            </a>
                        <li class="sidebar-item">
                            <a class="sidebar-link {{ Request::is('about') == 'about' ? 'active' : '' }}"
                                href="{{ route('about.index') }}" aria-expanded="false">
                                <span>
                                    <i class="ti ti-article"></i>
                                </span>
                                <span class="hide-menu">Data About</span>
                            </a>
                        <li class="sidebar-item">
                            <a class="sidebar-link {{ Request::is('history') == 'history' ? 'active' : '' }}"
                                href="{{ route('history.index') }}" aria-expanded="false">
                                <span>
                                    <i class="ti ti-article"></i>
                                </span>
                                <span class="hide-menu">Data orang tanya</span>
                            </a>
                        <li class="sidebar-item">
                            <a class="sidebar-link {{ Request::is('prestasi') == 'prestasi' ? 'active' : '' }}"
                                href="{{ route('prestasi.index') }}" aria-expanded="false">
                                <span>
                                    <i class="ti ti-article"></i>
                                </span>
                                <span class="hide-menu">Data Prestasi</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link {{ Request::is('visi') == 'visi' ? 'active' : '' }}"
                                href="{{ route('visimisi.index') }}" aria-expanded="false">
                                <span>
                                    <i class="ti ti-article"></i>
                                </span>
                                <span class="hide-menu">Data visi misi</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!--  Sidebar End -->
        <!--  Main wrapper -->
        <div class="body-wrapper">
            <!--  Header Start -->
            <header class="app-header">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <ul class="navbar-nav">
                        <li class="nav-item d-block d-xl-none">
                            <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse"
                                href="javascript:void(0)">
                                <i class="ti ti-menu-2"></i>
                            </a>
                        </li>
                    </ul>
                    <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
                        <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
                            <li class="nav-item dropdown">
                                <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <span
                                        class="d-none d-lg-inline text-gray-600 small">{{ Auth::user()->name }}</span>
                                    <img src="{{ asset('admin/src/assets/images/profile/user-1.jpg') }}" alt=""
                                        width="35" height="35" class="rounded-circle ml-4">
                                </a>
                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up"
                                    aria-labelledby="drop2">
                                    <div class="message-body">
                                        <a href="{{ route('logout') }}"
                                            class="btn btn-outline-primary mx-3 mt-2 d-block">Logout</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
            <!--  Header End -->
            <div class="container-fluid">
                <!--  Row 1 -->
                <div class="row">
                </div>
                <div class="row">
                    <div class="col-lg-12 d-flex align-items-stretch">
                        <div class="card w-100">
                            <div class="card-body p-4">
                                <table class="table table-striped table-bordered style=" background-color=#97A3AB">
                                    <h5 class="card-title fw-semibold mb-4">
                                        @yield('title')
                                    </h5>
                                    <div class="table-responsive">
                                        @yield('item')
                                    </div>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="py-6 px-6 text-center">
                <p class="mb-0 fs-4">Design and Developed by <a href="https://www.instagram.com/faridhalputraa/"
                        target="_blank" class="pe-1 text-primary text-decoration-underline">Faridhal Putra Maulana</a>
            </div>
        </div>
    </div>
    </div>
    <script src="{{ asset('admin/src/assets/libs/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('admin/src/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('admin/src/assets/js/sidebarmenu.js') }}"></script>
    <script src="{{ asset('admin/src/assets/js/app.min.js') }}"></script>
    <script src="{{ asset('admin/src/assets/libs/apexcharts/dist/apexcharts.min.js') }}"></script>
    <script src="{{ asset('admin/src/assets/libs/simplebar/dist/simplebar.js') }}"></script>
    <script src="{{ asset('admin/src/assets/js/dashboard.js') }}"></script>
</body>

</html>
