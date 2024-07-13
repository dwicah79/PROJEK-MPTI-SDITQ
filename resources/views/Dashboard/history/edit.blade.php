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
                        <form action="{{ route('keluh.update', $keluh->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="judul" class="form-label">nama</label>
                                <input type="text" class="form-control" id="judul" name="judul" value="{{ $keluh->nama }}">
                            </div>
                            <div class="mb-3">
                                <label for="judul" class="form-label">alamat</label>
                                <input type="text" class="form-control" id="judul" name="alamt" value="{{ $keluh->alamt }}">
                            </div>
                            <div class="mb-3">
                                <label for="judul" class="form-label">email</label>
                                <input type="text" class="form-control" id="judul" name="email" value="{{ $keluh->email }}">
                            </div>
                            <div class="mb-3">
                                <label for="judul" class="form-label">no Wa</label>
                                <input type="text" class="form-control" id="judul" name="no" value="{{ $keluh->no }}">
                            </div>
                            <div class="mb-3">
                                <label for="isi" class="form-label">isi</label>
                                <textarea class="form-control" id="deskripsi" name="isi">{{ $keluh->isi }}</textarea>
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