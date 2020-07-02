@extends('layout.master_dashboard')

@section('tittle')
Edit
@endsection

@section('main')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3>Edit Pesanan</h3>
                        </div>
                        <div class="panel-body">
                            <form action="{{ route('rental.update', $pesan->id) }}" enctype="multipart/form-data" method="POST">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="">Kode Member</label>
                                    <input type="text" name="no_member" class="form-control" value="{{ $pesan->no_member }}" disabled id="">
                                </div>
                                <div class="form-group">
                                    <label for="">Pesan</label>
                                    <input type="text" name="nama" class="form-control" value="{{ $pesan->nama }}" disabled id="">
                                </div>
                                <div class="form-group">
                                    <label for="">Sopir</label>
                                    <select name="sopir" class="form-control" id="">
                                        <option value="0" @if($pesan->sopir == "0") selected @endif>Tidak</option>
                                        <option value="800000" @if($pesan->sopir == "800000") selected @endif>Ya</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Tanggal</label>
                                    <input type="text" name="tanggal" class="form-control" value="{{ $pesan->tanggal }}" id="">
                                </div>
                                <div class="form-group">
                                    <label for="">Jumlah Hari</label>
                                    <input type="number" name="hari" class="form-control" value="{{ $pesan->hari }}" id="">
                                </div>
                                <div class="form-group">
                                    <label for="">Denda</label>
                                    <input type="number" name="denda" class="form-control" value="{{ $pesan->denda }}" id="">
                                </div>
                                <div class="panel-body">
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
