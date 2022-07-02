@extends('app')

@section('content')
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <div class="card-title">
                Detail Mahasiswa
            </div>
            <div class="card-toolbar">
                <a class="btn btn-outline-secondary btn-sm" href="{{ route('mahasiswa.index') }}"> Kembali</a>
            </div>
        </div>
        <div class="card-body pb-4">
            <form action="{{ route('mahasiswa.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <div class="text-muted">NIM</div>
                    <div class="fw-bold">{{ $mahasiswa->nim }}</div>
                </div>
                <div class="mb-3">
                    <div class="text-muted">Nama</div>
                    <div class="fw-bold">{{ $mahasiswa->nama }}</div>
                </div>
                <div class="mb-3">
                    <div class="text-muted">Jenis Kelamin</div>
                    <div class="fw-bold">{{ $mahasiswa->jenkel }}</div>
                </div>
                <div class="mb-3">
                    <div class="text-muted">Alamat</div>
                    <div class="fw-bold">{{ $mahasiswa->alamat }}</div>
                </div>
            </form>
        </div>
    </div>
@endsection
