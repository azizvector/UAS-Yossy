@extends('app')

@section('content')
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <div class="card-title">
                Kategori
            </div>
            <div class="card-toolbar">
                <a class="btn btn-primary btn-sm" href="{{ route('kategori.create') }}"> Tambah Kategori</a>
            </div>
        </div>
        <div class="card-body pb-4">
            @if ($message = Session::get('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ $message }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            @if ($message = Session::get('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ $message }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th class="fw-normal text-center" width="20px">No</th>
                        <th class="fw-normal">Nama Kategori</th>
                        <th class="fw-normal text-center" width="200px">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if (count($kategori) < 1)
                        <tr>
                            <td colspan="3" class="text-center">Data tidak ditemukan</td>
                        </tr>
                    @else
                        @foreach ($kategori as $kategori)
                            <tr>
                                <td class="text-center">{{ $loop->iteration }}</td>
                                <td>{{ $kategori->nama }}</td>
                                <td class="text-center">
                                    <form action="{{ route('kategori.destroy', $kategori->id) }}" method="POST">
                                        <a class="btn btn-outline-success btn-sm" href="{{ route('kategori.show', $kategori->id) }}">
                                            Show
                                        </a>
                                        <a class="btn btn-outline-primary btn-sm" href="{{ route('kategori.edit', $kategori->id) }}">
                                            Edit
                                        </a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-outline-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                            Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </div>
@endsection
