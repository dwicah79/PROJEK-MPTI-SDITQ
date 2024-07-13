@extends('layouts.admintemplate')
@section('title', 'Data About')
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
    <table class="table table-bordered table-hover table-striped">
        <thead class="text-dark fs-4">
            <tr>
                <th>ID</th>
                <th>judul</th>
                <th>Deskripsi</th>
                <th>Gambar</th>
                <th>Gambar2</th>
                <th>Gambar3</th>
                <th>Aksi</th>
            </tr>
            </tr>
        </thead>
        <tbody>
            @php
                $i = 1;
            @endphp
            @foreach($about as $tentang)
                <tr>
                    <td>{{ $i++}}</td>
                    <td>{{ $tentang->judul }}</td>
                    <td>{{ $tentang->isi }}</td>
                    <td><img src="{{ asset('gambar_about/' . $tentang->gambar) }}" alt="gambar_about" width="100"></td>
                    <td><img src="{{ asset('gambar_about/' . $tentang->gambar2) }}" alt="gambar_about" width="100"></td>
                    <td><img src="{{ asset('gambar_about/' . $tentang->gambar3) }}" alt="gambar_about" width="100"></td>
                    <td>
                        <a href="{{route('about.edit', $tentang->id)}}" type="button"
                            class="btn btn-outline-primary m-1">Edit</a>
                        <form action="{{ route('about.destroy', $tentang->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-outline-warning m-1">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{route('about.create')}}" class="btn btn-primary">Tambah Data</a>
</div>

@endsection