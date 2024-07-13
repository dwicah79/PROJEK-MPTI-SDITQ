@extends('layouts.admintemplate')
@section('title', 'Data Visi Misi')
@section('item')
    <!--  Header End -->
    <div class="container-fluid">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title fw-semibold mb-4">Tambah data Visi Misi</h5>
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('visimisi.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="" class="form-label">Visi</label>
                                    <textarea class="form-control" id="visi" name="visi" style="height:400px"></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Misi</label>
                                    <textarea class="form-control" id="misi" name="misi" style="height:400px"></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    <script src="{{ asset('admin/src/assets/libs/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('admin/src/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('admin/src/assets/js/sidebarmenu.js') }}"></script>
    <script src="{{ asset('admin/src/assets/js/app.min.js') }}"></script>
    <script src="{{ asset('admin/src/assets/libs/simplebar/dist/simplebar.js') }}"></script>
    </body>

    </html>
@endsection
