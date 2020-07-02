@extends('layout.master_home')

@section('titttle')
Motor
@endsection

@section('main')
<div id="content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h3>{{ $motor->nama }}</h3>
                    </div>
                    <div class="card-body">
                        <img src="{{ $motor->getAvatar() }}" width="200" height="200" class="card-img-top"
                            alt="{{ $motor->foto }}">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h3>Detail</h3>
                    </div>
                    <div class="card-body">
                        <h4>Merek : {{ $motor->merek }}</h4>
                        <h4>Harga Sewa : {{ $motor->harga }}</h4>
                    </div>
                    <div class="card-footer">
                        <a href="{{ route('pesan.motor', $motor->id) }}" class="btn btn-primary">Pesan</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
