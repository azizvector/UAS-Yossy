@extends('app')

@section('content')
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <div class="card-title">
                Postingan
            </div>
            <div class="card-toolbar">
                <a class="btn btn-primary btn-sm" href="{{ route('postingan.create') }}"> Tambah Postingan</a>
            </div>
        </div>
        <div class="card-body pb-4">
            @if ($message = Session::get('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ $message }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th class="fw-normal text-center" width="20px">No</th>
                        <th class="fw-normal">Judul</th>
                        <th class="fw-normal">Kategori</th>
                        <th class="fw-normal text-center" width="200px">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if (count($postingan) < 1)
                        <tr>
                            <td colspan="5" class="text-center">Data tidak ditemukan</td>
                        </tr>
                    @else
                        @foreach ($postingan as $postingan)
                            <tr>
                                <td class="text-center">{{ $loop->iteration }}</td>
                                <td>{{ $postingan->judul }}</td>
                                <td>{{ $postingan->kategori->nama }}</td>
                                <td class="text-center">
                                    <form action="{{ route('postingan.destroy', $postingan->id) }}" method="POST">
                                        <a class="btn btn-outline-success btn-sm" href="{{ route('postingan.show', $postingan->id) }}">
                                            Show
                                        </a>
                                        <a class="btn btn-outline-primary btn-sm" href="{{ route('postingan.edit', $postingan->id) }}">
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