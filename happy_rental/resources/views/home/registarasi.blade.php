@extends('layout.master_home')

@section('tittle')
Registarasi
@endsection

@section('main')
<div id="content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3>Registarasi</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('registrasi.create') }}" enctype="multipart/form-data" method="POST">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="">Nama</label>
                                <input type="text" name="name" class="form-control" placeholder="Nama" id="">
                            </div>
                            <div class="form-group">
                                <label for="">Jenis Kelamin</label>
                                <select name="jenis_kelamin" class="form-control" id="">
                                    <option>---</option>
                                    <option value="Laki-Laki">Laki-Laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="email" name="email" class="form-control" placeholder="Email" id="">
                            </div>
                            <div class="form-group">
                                <label for="">Alamat</label>
                                <textarea name="alamat" class="form-control" id="" cols="30" rows="10"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="">Kode Pos</label>
                                <input type="text" name="kode_pos" class="form-control" placeholder="Kode Pos" id="">
                            </div>
                            <div class="form-group">
                                <label for="">No Telp</label>
                                <input type="text" name="no_tlp" class="form-control" placeholder="No Telp" id="">
                            </div>
                            <div class="form-group">
                                <label for="">Identitas</label>
                                <input type="file" name="identitas" class="form-control" id="">
                                <span>KTP, SIM, Passport</span>
                            </div>
                            <div class="form-group">
                                <label for="">Foto</label>
                                <input type="file" name="foto" class="form-control" id="">
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
