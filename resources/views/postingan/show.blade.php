@extends('app')

@section('content')
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <div class="card-title">
                Detail Postingan
            </div>
            <div class="card-toolbar">
                <a class="btn btn-outline-secondary btn-sm" href="{{ route('postingan.index') }}"> Kembali</a>
            </div>
        </div>
        <div class="card-body pb-4">
            <form action="{{ route('postingan.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <div class="text-muted">Judul</div>
                    <div class="fw-bold">{{ $postingan->judul }}</div>
                </div>
                <div class="mb-3">
                    <div class="text-muted">Kategori</div>
                    <div class="fw-bold">{{ $postingan->kategori->nama }}</div>
                </div>
                <div class="mb-3">
                    <div class="text-muted">Deskripsi</div>
                    <div class="fw-bold">{{ $postingan->isi }}</div>
                </div>
            </form>
        </div>
    </div>
@endsection
