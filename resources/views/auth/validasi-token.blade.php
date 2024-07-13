<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SD ITQ AR-Rahman</title>
    <link rel="shortcut icon" type="{{ asset('admin/src/assets/image/png') }}"
        href="{{ asset('admin/assets/images/logos/favicon.png') }}" />
    <link rel="stylesheet" href="{{ asset('admin/src/assets/css/styles.min.css') }}" />
</head>

<body>
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        <div
            class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
            <div class="d-flex align-items-center justify-content-center w-100">
                <div class="row justify-content-center w-100">
                    <div class="col-md-8 col-lg-6 col-xxl-3">
                        <div class="card mb-0">
                            <div class="card-body">
                                <p class="text-center">Masukan Password Baru</p>
                                @error('loginError')
                                    <div class="alert alert-danger">
                                        <strong>Error</strong>
                                        <p>{{ $message }}</p>
                                    </div>
                                @enderror
                                @if ($message = Session::get('success'))
                                    <div class="alert alert-success" role="alert" id="messageAlert">
                                        <strong>Berhasil</strong>
                                        <p>{{ $message }}</p>
                                    </div>

                                    <script>
                                        setTimeout(function() {
                                            var messageAlert = document.getElementById('messageAlert');
                                            messageAlert.style.display = 'none';
                                        }, 3000);
                                    </script>
                                @endif
                                @if ($message = Session::get('failed'))
                                    <div class="alert alert-danger" role="alert" id="messageAlert">
                                        <strong>Gagal</strong>
                                        <p>{{ $message }}</p>
                                    </div>

                                    <script>
                                        setTimeout(function() {
                                            var messageAlert = document.getElementById('messageAlert');
                                            messageAlert.style.display = 'none';
                                        }, 3000);
                                    </script>
                                @endif
                                <form method="POST" action="{{ route('validasi-forgot-password-act') }}"
                                    method="POST">
                                    <input type="hidden" name="token" value="{{ $token }}">
                                    @csrf
                                    <div class="mb-4">
                                        <label for="exampleInputPassword1" class="form-label">Password</label>
                                        <input type="password" class="form-control" name="password" id="password"
                                            required="true">
                                    </div>
                                    <button type="submit"
                                        class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('admin/src/assets/libs/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('admin/src/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
