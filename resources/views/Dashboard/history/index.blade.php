@extends('layouts.admintemplate')
@section('title', 'Data History')
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
                    <h6 class="fw-semibold mb-0">Nama</h6>
                </th>
                <th class="border-bottom-0">
                    <h6 class="fw-semibold mb-0">Email</h6>
                </th>
                <th class="border-bottom-0">
                    <h6 class="fw-semibold mb-0">Alamat</h6>
                </th>
                <th class="border-bottom-0">
                    <h6 class="fw-semibold mb-0">No Whatsapp</h6>
                </th>
                <th class="border-bottom-0">
                    <h6 class="fw-semibold mb-0">Isi</h6>
                </th>
                <th class="border-bottom-0">
                    <h6 class="fw-semibold mb-0">Aksi</h6>
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach($keluh as $index => $data)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $data->nama }}</td>
                    <td>{{ $data->email }}</td>
                    <td>{{ $data->alamt }}</td>
                    <td>{{ $data->no }}</td>
                    <td>{{ $data->isi }}</td>
                    <td>
                        <a href="{{ route('keluh.edit', $data->id) }}" type="button"
                            class="btn btn-outline-primary m-1">Edit</a>
                        <form action="{{ route('keluh.destroy', $data->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-outline-warning m-1">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{-- <a href="{{ route('keluh.create') }}" class="btn btn-primary">Tambah Data</a> --}}
</div>
@endsection