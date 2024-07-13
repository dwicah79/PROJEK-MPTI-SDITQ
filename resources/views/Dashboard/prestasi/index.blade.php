@extends('layouts.admintemplate')
@section('title', 'Data Prestasi')
@section('item')
<div class="table-responsive">
    @if($message = Session::get('success'))
        <div class="alert alert-success" role="alert" id="messageAlert">
            <strong>Berhasil</strong>
            <p>{{ $message }}</p>
        </div>

        <script>
            setTimeout(function () {
                var messageAlert = document.getElementById('messageAlert');
                messageAlert.style.display = 'none';
            }, 3000); 
        </script>
    @endif
    <table class="table text-nowrap mb-0 align-middle">
        <thead class="text-dark fs-4">
            <tr>
                <th class="border-bottom-0">
                    <h6 class="fw-semibold mb-0">No</h6>
                </th>
                <th class="border-bottom-0">
                    <h6 class="fw-semibold mb-0">Tahun</h6>
                </th>
                <th class="border-bottom-0">
                    <h6 class="fw-semibold mb-0">Deskripsi Prestasi</h6>
                </th>
                <th class="border-bottom-0">
                    <h6 class="fw-semibold mb-0">Hapus Data</h6>
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach($prestasi as $juara)
                <tr>
                    <td>{{ $juara->id }}</td>
                    <td>{{ $juara->judul }}</td>
                    <td>{{ $juara->deskripsi }}</td>
                    <td>
                        <a href="{{ route('prestasi.edit', $juara->id) }}" type="button"
                            class="btn btn-outline-primary m-1">Edit</a>
                        <form action="{{ route('prestasi.destroy', $juara->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-outline-warning m-1">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{route('prestasi.create')}}" class="btn btn-primary">Tambah Data</a>
</div>
@endsection