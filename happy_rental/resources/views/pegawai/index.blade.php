@extends('layout.master_dashboard')

@section('tittle')
Pegawai
@endsection

@section('main')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3>Data Pegawai</h3>
                            <div class="right">
                                <a type="button" class="btn btn-primary" data-toggle="modal"
                                    data-target="#exampleModal">
                                    <i class="lnr lnr-plus-circle"></i> <span>Pegawai</span></a>
                                <a href="" class="btn btn-primary">Print</a>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table id="table_id" class="table table-hover" width="100%">
                                    <thead>
                                        <tr>
                                            <th>Nama</th>
                                            <th>Email</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Alamat</th>
                                            <th>No Tlp</th>
                                            <th>Posisi</th>
                                            <th colspan="2">Aksi</th>
                                        </tr>
                                    </thead>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <form action="{{ route('pegawai.create') }}" enctype="multipart/form-data" method="POST">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="">Nama</label>
                            <input type="text" name="name" class="form-control" placeholder="Nama" id="">
                        </div>
                        <div class="group">
                            <label for="">Email</label>
                            <input type="email" name="email" class="form-control" placeholder="Email" id="">
                        </div>
                        <div class="group">
                            <label for="">Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Password" id="">
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
                            <label for="">Alamat</label>
                            <textarea name="alamat" class="form-control" id="" cols="30" rows="10"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="">No Telp</label>
                            <input type="number" name="no_tlp" class="form-control" placeholder="No Telp" id="">
                        </div>
                        <div class="form-group">
                            <label for="">Tempat Tanggal Lahir</label>
                            <input type="text" name="ttl" class="form-control" placeholder="tempat, tanggal" id="">
                        </div>
                        <div class="form-group">
                            <label for="">Posisi</label>
                            <select name="jabatan" class="form-control" id="">
                                <option>---</option>
                                <option value="Manager">Manager</option>
                                <option value="Keuangan">Keuangan</option>
                                <option value="CS">CS</option>
                                <option value="Sopir">Sopir</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Foto</label>
                            <input type="file" name="foto" class="form-control" id="">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>

            </div>

        </div>
    </div>
</div>
@endsection

@section('js')
<script>
    $(document).ready( function () {
        $('#table_id').dataTable({
            processing:true,
            serverside:true,
            ajax:"{{ route('get.data.pegawai') }}",
            columns:[
                {data:'name', name:'name'},
                {data:'email', name:'email'},
                {data:'jenis_kelamin', name:'jenis_kelamin'},
                {data:'alamat', name:'alamat'},
                {data:'no_tlp', name:'no_tlp'},
                {data:'jabatan', name:'jabatan'},
                {data:'profile', name:'profile'},
            ]
        });
    } );
</script>
@endsection
