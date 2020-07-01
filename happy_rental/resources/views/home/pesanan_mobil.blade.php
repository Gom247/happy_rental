@extends('layout.master_home')

@section('tittle')
Pesan
@endsection

@section('main')
<div id="content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3>{{ $mobil->nama }}</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('pesan.create') }}" enctype="multipart/form-data" method="POST">
                            {{ csrf_field() }}
                            <div class="form-group">

                                <input type="text" name="nama" class="form-control" value="{{ $mobil->nama }}" hidden id="">
                            </div>
                            <div class="form-group">
                                <label for="">Kode Member</label>
                                <input type="text" name="no_member" class="form-control" placeholder="Kode Member" id="">
                            </div>
                            <div class="form-group">
                                <label for="">Sopir</label>
                                <select name="sopir" class="form-control" id="">
                                    <option value="0">Tidak</option>
                                    <option value="800000">Ya</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Tanggal</label>
                                <input type="text" name="tanggal" class="form-control" placeholder="tanggal-bulan-tanggal sampai tanggal-bulan-tanggal" id="">
                            </div>
                            <div class="form-group">
                                <label for="">Hari</label>
                                <input type="number" name="hari" class="form-control" placeholder="Berapa Hari" id="">
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Pesan</button>
                            </div>
                        </form>
                    </div>
                </div><br>
            </div>
        </div>
    </div>
</div>
@endsection
