@extends('layout.master_dashboard')

@section('tittle')
Motor
@endsection

@section('main')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="panel">
                    <div class="panel-heading">
                        <h3>Edit Motor</h3>
                    </div>
                    <div class="panel-body">
                        <div class="col-md-8">
                            <form action="{{ route('motor.update', $motor->id) }}" enctype="multipart/form-data" method="POST">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="">Kode</label>
                                    <input type="text" name="kode" class="form-control" placeholder="Kode" value="{{ $motor->kode }}" disabled id="">
                                </div>
                                <div class="form-group">
                                    <label for="">Nama</label>
                                    <input type="text" name="nama" class="form-control" placeholder="Nama" value="{{ $motor->nama }}" id="">
                                </div>
                                <div class="form-group">
                                    <label for="">Merek</label>
                                    <input type="text" name="merek" class="form-control" placeholder="Merek" value="{{ $motor->merek }}" id="">
                                </div>
                                <div class="form-group">
                                    <label for="">Harga</label>
                                    <input type="number" name="harga" class="form-control" placeholder="Harga" value="{{ $motor->harga }}" id="">
                                </div>
                                <div class="form-group">
                                    <label for="">Plat Nomor</label>
                                    <input type="text" name="plat_nomor" class="form-control" placeholder="Plat Nomor" value="{{ $motor->plat_nomor }}" id="">
                                </div>
                                <div class="form-group">
                                    <label for="">Foto</label>
                                    <input type="file" name="foto" class="form-control" id="">
                                </div>
                                <div class="panel-footer">
                                    <button type="submit" class="btn btn-primary">Simpan</button> || <a href="{{ route('motor.delete', $motor->id) }}" class="btn btn-danger"><span>Delete</span></a>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-4">
                            <img src="{{ $motor->getAvatar() }}" width="200" height="200" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
