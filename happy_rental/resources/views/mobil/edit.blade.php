@extends('layout.master_dashboard')

@section('tittle')
Mobil
@endsection

@section('main')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3>Edit Mobil</h3>
                        </div>
                        <div class="panel-body">
                            <div class="col-md-8">
                                <form action="{{ route('mobil.update', $mobil->id) }}" enctype="multipart/form-data" method="POST">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <label for="">Kode</label>
                                        <input type="text" name="Kode" class="form-control" placeholder="Kode" value="{{ $mobil->kode }}" id="" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Nama</label>
                                        <input type="text" name="nama" class="form-control" placeholder="Nama" value="{{ $mobil->nama }}" id="">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Merek</label>
                                        <input type="text" name="merek" class="form-control" placeholder="Merek" value="{{ $mobil->merek }}" id="">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Kapasitas</label>
                                        <input type="number" name="kapasitas" class="form-control" placeholder="Kapasitas" value="{{ $mobil->kapasitas }}" id="">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Plat Mobil</label>
                                        <input type="text" name="plat_nomor" class="form-control" placeholder="Plat Mobil" value="{{ $mobil->plat_nomor }}" id="">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Harga</label>
                                        <input type="number" name="harga" class="form-control" placeholder="Harga" value="{{ $mobil->harga }}" id="">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Foto</label>
                                        <input type="file" name="foto" class="form-control" id="">
                                    </div>
                                    <div class="panel-footer">
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-4">
                                <img src="{{ $mobil->getAvatar() }}" width="200" height="200" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
