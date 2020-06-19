@extends('layout.master_dashboard')

@section('tittle')
Edit
@endsection

@section('main')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3>Edit Pegawai</h3>
                        </div>
                        <div class="panel-body">
                            <form action="{{ route('pegawai.update', $pegawai->id) }}" enctype="multipart/form-data" method="POST">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="">Nama</label>
                                    <input type="text" name="name" class="form-control" placeholder="Nama" value="{{ $pegawai->name }}" id="">
                                </div>
                                <div class="group">
                                    <label for="">Email</label>
                                    <input type="email" name="email" class="form-control" placeholder="Email" value="{{ $pegawai->email }}" id="">
                                </div>
                                <div class="form-group">
                                    <label for="">Jenis Kelamin</label>
                                    <select name="jenis_kelamin" class="form-control" id="">
                                        <option>---</option>
                                        <option value="Laki-Laki" @if($pegawai->jenis_kelamin == "Laki-Laki") selected @endif >Laki-Laki</option>
                                        <option value="Perempuan" @if($pegawai->jenis_kelamin == "Perempuan") selected @endif >Perempuan</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Alamat</label>
                                    <textarea name="alamat" class="form-control" id="" cols="30" rows="10">{{ $pegawai->alamat }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="">No Telp</label>
                                    <input type="number" name="no_tlp" class="form-control" placeholder="No Telp" value="{{ $pegawai->no_tlp }}" id="">
                                </div>
                                <div class="form-group">
                                    <label for="">Tempat Tanggal Lahir</label>
                                    <input type="text" name="ttl" class="form-control" placeholder="tempat, tanggal" value="{{ $pegawai->ttl }}" id="">
                                </div>
                                <div class="form-group">
                                    <label for="">Posisi</label>
                                    <select name="jabatan" class="form-control" id="">
                                        <option>---</option>
                                        <option value="Manager" @if($pegawai->jabatan == "Manager") selected @endif >Manager</option>
                                        <option value="Keuangan" @if($pegawai->jabatan == "Keuangan") @endif>Keuangan</option>
                                        <option value="CS" @if($pegawai->jabatan == "CS") selected @endif>CS</option>
                                        <option value="Sopir" @if($pegawai->jabatan == "Sopir") @endif>Sopir</option>
                                    </select>
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
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="panel">
                        <div class="panel-body">
                            <img src="{{ $pegawai->getAvatar() }}" width="200" height="200" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
