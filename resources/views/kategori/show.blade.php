@extends('app')

@section('content')
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <div class="card-title">
                Detail Kategori
            </div>
            <div class="card-toolbar">
                <a class="btn btn-outline-secondary btn-sm" href="{{ route('kategori.index') }}"> Kembali</a>
            </div>
        </div>
        <div class="card-body pb-4">
            <form action="{{ route('kategori.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <div class="text-muted">Nama Kategori</div>
                    <div class="fs-5 fw-bold">{{ $kategori->nama }}</div>
                </div>
            </form>
        </div>
    </div>
@endsection
