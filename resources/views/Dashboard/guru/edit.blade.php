@extends('layouts.admintemplate')
@section('title', 'Data Guru')
@section('item')
<!-- Header End -->
<div class="container-fluid">
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title fw-semibold mb-4">Edit data guru</h5>
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('guru.update', $guru->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="nama_guru" class="form-label">Nama Guru</label>
                                <input type="text" class="form-control" id="nama_guru" name="nama_guru" value="{{ $guru->nama_guru }}">
                            </div>
                            <div class="mb-3">
                                <label for="jabatan" class="form-label">Jabatan</label>
                                <input type="text" class="form-control" id="jabatan" name="jabatan" value="{{ $guru->jabatan }}">
                            </div>
                            <div class="mb-3">
                                <label for="jabatan" class="form-label">Jabatan Fungsional</label>
                                <input type="text" class="form-control" id="jabatan" name="fungsional" value="{{ $guru->fungsional }}">
                            </div>
                            <div class="mb-3">
                                <label for="jabatan" class="form-label">Email</label>
                                <input type="text" class="form-control" id="jabatan" name="email" value="{{ $guru->email }}">
                            </div>
                            <div class="mb-3">
                                <label for="foto" class="form-label">Foto Lama</label><br>
                                <img src="{{ asset('foto_guru/' . $guru->foto) }}" alt="foto_guru" width="100">
                            </div>
                            <div class="mb-3">
                                <label for="foto" class="form-label">Foto Baru</label><br>
                                <input type="file" class="form-control" id="foto" name="foto">
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