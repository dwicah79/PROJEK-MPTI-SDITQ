@extends('layouts.admintemplate')
@section('title', 'Data About')
@section('item')
    <div class="table-responsive">
        @if ($message = Session::get('success'))
            <div class="alert alert-success" role="alert" id="messageAlert">
                <strong>Berhasil</strong>
                <p>{{ $message }}</p>
            </div>

            <script>
                setTimeout(function() {
                    var messageAlert = document.getElementById('messageAlert');
                    messageAlert.style.display = 'none';
                }, 3000);
            </script>
        @endif
        <table class="table table-bordered table-hover table-striped">
            <thead class="text-dark fs-4">
                <tr>
                    <th>ID</th>
                    <th>Visi</th>
                    <th>Misi</th>
                    <th>Aksi</th>
                </tr>
                </tr>
            </thead>
            <tbody>
                @php
                    $i = 1;
                @endphp
                @foreach ($Visimisi as $visi)
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{ $visi->visi }}</td>
                        <td>{{ $visi->misi }}</td>
                        <td>
                            <a href="{{ route('visimisi.edit', $visi->id) }}" type="button"
                                class="btn btn-outline-primary m-1">Edit</a>
                            <form action="{{ route('visimisi.destroy', $visi->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-outline-warning m-1">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <a href="{{ route('visimisi.create') }}" class="btn btn-primary">Tambah Data</a>
    </div>

@endsection
