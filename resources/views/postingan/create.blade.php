@extends('app')

@section('content')
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <div class="card-title">
                Tambah Postingan
            </div>
        </div>
        <div class="card-body pb-4">
            <form action="{{ route('postingan.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Judul</label>
                    <input type="text" name="judul" class="form-control @error('judul') is-invalid @enderror"
                        value="{{ old('judul') }}">
                    @error('judul')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Kategori</label>
                    <select name="kategori_id" class="form-select @error('kategori_id') is-invalid @enderror">
                        <option value="">Pilih Kategori</option>
                        @foreach ($kategori as $kategori)
                            @if (old('kategori_id') == $kategori->id)
                                <option value="{{ $kategori->id }}" selected>{{ $kategori->nama }}</option>
                            @else
                                <option value="{{ $kategori->id }}">{{ $kategori->nama }}</option>
                            @endif
                        @endforeach
                    </select>
                    @error('kategori_id')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Deskripsi</label>
                    <textarea name="isi" class="form-control @error('isi') is-invalid @enderror" rows="3">{{ old('isi') }}</textarea>
                    @error('isi')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class=" d-flex justify-content-center mt-4">
                    <a class="btn btn-outline-secondary btn-sm me-2 px-4" href="{{ route('postingan.index') }}">
                        Batal</a>
                    <button class="btn btn-primary btn-sm px-4" type="submit">Simpan</button>
                </div>
            </form>
        </div>
    </div>
@endsection
