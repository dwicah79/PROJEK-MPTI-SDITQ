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
                            <form action="{{ route('visimisi.update', $Visimisi->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="mb-3">
                                    <label for="visi" class="form-label">visi</label>
                                    <textarea class="form-control" id="visi" name="visi" style="height:400px" value="{{ $Visimisi->visi }}">{{ $Visimisi->visi }} ></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="misi" class="form-label">misi</label>
                                    <textarea class="form-control" id="visi" name="visi" style="height:400px" value="{{ $Visimisi->misi }}">{{ $Visimisi->misi }} ></textarea>
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
@endsection
