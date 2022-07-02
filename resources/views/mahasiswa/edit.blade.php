@extends('app')

@section('content')
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <div class="card-title">
                Edit Mahasiswa
            </div>
        </div>
        <div class="card-body pb-4">
            <form action="{{ route('mahasiswa.update', $mahasiswa->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label class="form-label">NIM</label>
                    <input type="text" name="nim" class="form-control @error('nim') is-invalid @enderror"
                        value="{{ old('nim', $mahasiswa->nim) }}">
                    @error('nim')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Nama</label>
                    <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror"
                        value="{{ old('nama', $mahasiswa->nama) }}">
                    @error('nama')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <div><label class="form-label">Jenis Kelamin</label></div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input @error('jenkel') is-invalid @enderror" type="radio" name="jenkel"
                            value="Laki-laki" {{ old('jenkel', $mahasiswa->jenkel) == 'Laki-laki' ? 'checked' : '' }}>
                        <label class="form-check-label">Laki-laki</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input @error('jenkel') is-invalid @enderror" type="radio" name="jenkel"
                            value="Perempuan" {{ old('jenkel', $mahasiswa->jenkel) == 'Perempuan' ? 'checked' : '' }}>
                        <label class="form-check-label">Perempuan</label>
                    </div>
                    @error('jenkel')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Alamat</label>
                    <textarea name="alamat" class="form-control @error('alamat') is-invalid @enderror" rows="3">{{ old('alamat', $mahasiswa->alamat) }}</textarea>
                    @error('alamat')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class=" d-flex justify-content-center mt-4">
                    <a class="btn btn-outline-secondary btn-sm me-2 px-4" href="{{ route('mahasiswa.index') }}">
                        Batal</a>
                    <button class="btn btn-primary btn-sm px-4" type="submit">Edit</button>
                </div>
            </form>
        </div>
    </div>
@endsection
