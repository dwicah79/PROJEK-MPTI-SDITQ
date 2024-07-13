@extends('layouts.admintemplate')

@section('title', 'Data Guru')

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
        <table class="table text-nowrap mb-0 align-middle">
            <thead class="text-dark fs-4">
                <tr>
                    <th>ID</th>
                    <th>Nama Guru</th>
                    <th>Jabatan</th>
                    <th>Jabatan Fungsional</th>
                    <th>Email</th>
                    <th>Foto</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $i = 1;
                @endphp
                @foreach ($guru as $teacher)
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{ $teacher->nama_guru }}</td>
                        <td>{{ $teacher->jabatan }}</td>
                        <td>{{ $teacher->fungsional }}</td>
                        <td>{{ $teacher->email }}</td>
                        <td><img src="{{ asset('foto_guru/' . $teacher->foto) }}" alt="foto_guru" width="100"></td>
                        <td>
                            <a href="{{ route('guru.edit', $teacher->id) }}" type="button"
                                class="btn btn-outline-primary m-1">Edit</a>
                            <form action="{{ route('guru.destroy', $teacher->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-outline-warning m-1">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <a href="{{ route('guru.create') }}" class="btn btn-primary">Tambah Data</a>
    </div>

    <nav aria-label="...">
        <ul class="pagination">
            <li class="page-item {{ $guru->onFirstPage() ? 'disabled' : '' }}">
                <a class="page-link" href="{{ $guru->previousPageUrl() }}" tabindex="-1" aria-disabled="true">Previous</a>
            </li>
            <!-- Loop through pages -->
            @foreach ($guru->getUrlRange(1, $guru->lastPage()) as $page => $url)
                <li class="page-item {{ $page == $guru->currentPage() ? 'active' : '' }}" aria-current="page">
                    <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                </li>
            @endforeach
            <li class="page-item {{ $guru->hasMorePages() ? '' : 'disabled' }}">
                <a class="page-link" href="{{ $guru->nextPageUrl() }}">Next</a>
            </li>
        </ul>
    </nav>

@endsection
