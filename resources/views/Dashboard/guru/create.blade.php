@extends('layouts.admintemplate')
@section('title', 'Data Guru')
@section('item')
      <!--  Header End -->
      <div class="container-fluid">
        <div class="container-fluid">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title fw-semibold mb-4">Tambah data guru</h5>
              <div class="card">
                <div class="card-body">
                  <form action="{{ route('guru.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                      <label for="" class="form-label">Nama</label>
                      <input type="text" class="form-control" id="nama_guru"  name="nama_guru">
                      @error('nama_guru')
                      <small style="color:red;">{{$message}}</small>
                      @enderror
                    </div>
                    <div class="mb-3">
                      <label for="" class="form-label">jabatan</label>
                      <input type="text" class="form-control" id="jabatan"  name="jabatan">
                      @error('jabatan')
                      <small style="color:red;">{{$message}}</small>
                      @enderror
                    </div>
                    <div class="mb-3">
                      <label for="" class="form-label">jabatan fungsional</label>
                      <input type="text" class="form-control" id="jabatan"  name="fungsional">
                      @error('fungsional')
                      <small style="color:red;">{{$message}}</small>
                      @enderror
                    </div>
                    <div class="mb-3">
                      <label for="" class="form-label">email</label>
                      <input type="text" class="form-control" id="jabatan"  name="email">
                      @error('email')
                      <small style="color:red;">{{$message}}</small>
                      @enderror
                    </div>
                    <div class="mb-3">
                      <label for="" class="form-label">foto</label>
                      <input type="file" class="form-control" id="foto"  name="foto">
                      @error('foto')
                      <small style="color:red;">{{$message}}</small>
                      @enderror
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
</body>

</html>
@endsection