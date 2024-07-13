@extends('layouts.admintemplate')
@section('title', 'Data about')
@section('item')
<!-- Header End -->
<div class="container-fluid">
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title fw-semibold mb-4">Edit data about</h5>
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('about.update', $about->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="judul" class="form-label">Judl</label>
                                <input type="text" class="form-control" id="judul" name="judul"
                                    value="{{ $about->judul }}">
                            </div>
                            <div class="mb-3">
                                <label for="isi" class="form-label">Deskripsi</label>
                                <textarea type="text" style="height: 400px;" class="form-control" id="isi" name="isi"
                                    value="{{ $about->isi }}">{{ $about->isi }} </textarea>
                            </div>
                            <div class="mb-3">
                                <label for="foto" class="form-label">Foto Lama</label><br>
                                <img src="{{ asset('gambar_about/' . $about->gambar) }}" alt="gambar_about" width="100">
                            </div>
                            <div class="mb-3">
                                <label for="foto" class="form-label">Foto Lama</label><br>
                                <img src="{{ asset('gambar_about/' . $about->gambar2) }}" alt="gambar_about"
                                    width="100">
                            </div>
                            <div class="mb-3">
                                <label for="foto" class="form-label">Foto Lama</label><br>
                                <img src="{{ asset('gambar_about/' . $about->gambar3) }}" alt="gambar_about"
                                    width="100">
                            </div>
                            <div class="mb-3">
                                <label for="gambar" class="form-label">Foto Baru</label><br>
                                <input type="file" class="form-control" id="gambar" name="gambar">
                            </div>
                            <div class="mb-3">
                                <label for="gambar2" class="form-label">Foto Baru2</label><br>
                                <input type="file" class="form-control" id="gambar2" name="gambar2">
                            </div>
                            <div class="mb-3">
                                <label for="gambar3" class="form-label">Foto Baru3</label><br>
                                <input type="file" class="form-control" id="gambar3" name="gambar3">
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
<script src="{{asset('admin/src/assets/libs/jquery/dist/jquery.min.js')}}"></script>
<script src="{{asset('admin/src/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('admin/src/assets/js/sidebarmenu.js')}}"></script>
<script src="{{asset('admin/src/assets/js/app.min.js')}}"></script>
<script src="{{asset('admin/src/assets/libs/simplebar/dist/simplebar.js')}}"></script>
@endsection