@extends('layout.master_home')

@section('tittle')
Mobil
@endsection

@section('main')
<div id="content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h3>{{ $mobil->nama }}</h3>
                    </div>
                    <div class="card-body">
                        <img src="{{ $mobil->getAvatar() }}" width="200" height="200" class="card-img-top"
                            alt="{{ $mobil->foto }}">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h3>Detail</h3>
                    </div>
                    <div class="card-body">
                        <h4>Kapasitas : {{ $mobil->kapasitas }}</h4>
                        <h4>Merek : {{ $mobil->merek }}</h4>
                        <h4>Harga Sewa : {{ $mobil->harga }}</h4>
                    </div>
                    <div class="card-footer">
                        <a href="{{ route('pesan.mobil', $mobil->id) }}" class="btn btn-primary">Pesan</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
