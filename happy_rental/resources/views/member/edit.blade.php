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
                            <h3>Edit Member</h3>
                        </div>
                        <div class="panel-body">
                            <form action="{{ route('member.update', $member->id) }}" enctype="multipart/form-data" method="POST">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="">Kode Member</label>
                                    <input type="text" name="no_member" class="form-control" value="{{ $member->no_member }}" disabled id="">
                                </div>
                                <div class="form-group">
                                    <label for="">Nama</label>
                                    <input type="text" name="name" class="form-control" value="{{ $member->name }}" disabled id="">
                                </div>
                                <div class="form-group">
                                    <label for="">Jenis Kelamin</label>
                                    <select name="jenis_kelamin" class="form-control" id="">
                                        <option>---</option>
                                        <option value="Laki-Laki" @if($member->jenis_kelamin == "Laki-Laki") selected @endif>Laki-Laki</option>
                                        <option value="Perempuan" @if($member->jenis_kelamin == "Perempuan") selected @endif>Perempuan</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Email</label>
                                    <input type="email" class="form-control" name="email" value="{{ $member->email }}" id="">
                                </div>
                                <div class="form-group">
                                    <label for="">Alamat</label>
                                    <textarea name="alamat" class="form-control" id="" cols="30" rows="10">{{ $member->alamat }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="">Kode Pos</label>
                                    <input type="text" name="kode_pos" class="form-control" value="{{ $member->kode_pos }}" id="">
                                </div>
                                <div class="form-group">
                                    <label for="">No Telp</label>
                                    <input type="text" name="no_tlp" class="form-control" value="{{ $member->no_tlp }}" id="">
                                </div>
                                <div class="form-group">
                                    <label for="">Identitas</label>
                                    <input type="file" name="identitas" class="form-control" id=""><br>
                                    <img src="{{ $member->getIdentitas() }}" width="100" height="100" alt="">
                                </div>
                                <div class="form-group">
                                    <label for="">Foto</label>
                                    <input type="file" name="foto" class="form-control" id=""><br>
                                    <img src="{{ $member->getAvatar() }}" width="100" height="100" alt="">
                                </div>
                                <div class="panel-footer">
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
