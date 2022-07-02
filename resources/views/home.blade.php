@extends('app')

@section('content')
    <div class="row">
        <div class="col">
            <div class="card card-custom card-total" onClick="window.location='{{ url("mahasiswa") }}'">
                <div class="card-header border-0 pb-0 justify-content-center">
                    <div class="card-title text-center m-0">
                        <h4>Total Mahasiswa</h4>
                    </div>
                </div>
                <div class="card-body pb-4 text-center">
                    <h1>{{ $mahasiswa }}</h1>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card card-custom card-total" onClick="window.location='{{ url("kategori") }}'">
                <div class="card-header border-0 pb-0 justify-content-center">
                    <div class="card-title text-center m-0">
                        <h4>Total Kategori</h4>
                    </div>
                </div>
                <div class="card-body pb-4 text-center">
                    <h1>{{ $kategori }}</h1>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card card-custom card-total" onClick="window.location='{{ url("postingan") }}'">
                <div class="card-header border-0 pb-0 justify-content-center">
                    <div class="card-title text-center m-0">
                        <h4>Total Postingan</h4>
                    </div>
                </div>
                <div class="card-body pb-4 text-center">
                    <h1>{{ $postingan }}</h1>
                </div>
            </div>
        </div>
    </div>
@endsection
