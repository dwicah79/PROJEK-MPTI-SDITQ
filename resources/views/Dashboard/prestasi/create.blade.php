@extends('layouts.admintemplate')
@section('title', 'Data Guru')
@section('item')
      <!--  Header End -->
      <div class="container-fluid">
        <div class="container-fluid">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title fw-semibold mb-4">Tambah data prestasi</h5>
              <div class="card">
                <div class="card-body">
                  <form action="{{ route('prestasi.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                      <label for="" class="form-label">Tahun</label>
                      <input type="text" class="form-control" id="judul"  name="judul">
                    </div>
                    <div class="mb-3">
                      <label for="" class="form-label">Deskripsi</label>
                      <input type="text" class="form-control" id="deskripsi"  name="deskripsi">
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