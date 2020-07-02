@extends('layout.master_home')

@section('tittle')
Happy Rental
@endsection

@section('main')
<div id="content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3>Mobil</h3>
                    </div>
                    <div class="card-body">
                        <div class="card-deck">
                            <div class="col-md-4">
                                @foreach($mobil as $mbl)
                                <div class="card">
                                    <img src="{{ $mbl->getAvatar() }}" width="200" height="200" class="card-img-top"
                                        alt="{{ $mbl->foto }}">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $mbl->nama }}</h5>
                                        <a href="{{ route('mobil.detail', $mbl->id) }}" class="btn btn-primary"><span>Detail</span></a> || <a href="{{ route('pesan.mobil', $mbl->id) }}" class="btn btn-primary"><span>Pesan</span></a>
                                        <p class="card-text"><small class="text-muted">{{ $mbl->created_at->format('D, d M Y') }}</small>
                                        </p>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div><br>
                <div class="card">
                    <div class="card-header">
                        <h3>Motor</h3>
                    </div>
                    <div class="card-body">
                        <div class="card-deck">
                            <div class="col-md-4">
                                @foreach($motor as $mtr)
                                <div class="card">
                                    <img src="{{ $mtr->getAvatar() }}" class="card-img-top" alt="{{ $mtr->foto }}">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $mtr->nama }}</h5>
                                        <a href="{{ route('motor.detail', $mtr->id) }}" class="btn btn-primary"><span>Detail</span></a> || <a href="{{ route('pesan.motor', $mtr->id) }}" class="btn btn-primary"><span>Pesan</span></a>
                                        <p class="card-text"><small class="text-muted">{{ $mtr->created_at->format('D, d M Y') }}</small></p>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div><br>
            </div>
        </div>
    </div>
</div>
@endsection
