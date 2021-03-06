@extends('layout.master_dashboard')

@section('tittle')
Motor
@endsection

@section('main')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3>Motor</h3>
                            <div class="right">
                                <a type="button" class="btn btn-primary" data-toggle="modal"
                                    data-target="#exampleModal">
                                    <i class="lnr lnr-plus-circle"></i> Motor
                                </a>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table-responsive">
                                    <table class="table table-bordered table-striped table-hover" id="table">
                                        <thead>
                                            <tr>
                                                <th>Kode</th>
                                                <th>Nama</th>
                                                <th>Merek</th>
                                                <th>Harga</th>
                                                <th>Plat Nomor</th>
                                                <th>Foto</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>

                                    </table>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

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
                <form action="{{ route('motor.create') }}" enctype="multipart/form-data" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="">Kode</label>
                        <input type="text" name="kode" class="form-control" placeholder="Kode" id="">
                    </div>
                    <div class="form-group">
                        <label for="">Nama</label>
                        <input type="text" name="nama" class="form-control" placeholder="Nama Mobil" id="">
                    </div>
                    <div class="form-group">
                        <label for="">Merek</label>
                        <input type="text" name="merek" class="form-control" placeholder="Merek" id="">
                    </div>
                    <div class="form-group">
                        <label for="">Harga</label>
                        <input type="number" name="harga" class="form-control" placeholder="Harga" id="">
                    </div>
                    <div class="form-group">
                        <label for="">Plat Nomor</label>
                        <input type="text" name="plat_nomor" class="form-control" placeholder="Plat Nomor" id="">
                    </div>
                    <div class="form-group">
                        <label for="">Foto</label>
                        <input type="file" name="foto" class="form-control" id="">
                    </div>
                    <div class="pane-footer">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
<script>
    $(document).ready(function(){
        $('#table').dataTable({
            processing:true,
            serverside:true,
            ajax:"{{ route('get.data.motor') }}",
            columns:[
                {data:'kode', name:'kode'},
                {data:'nama', name:'nama'},
                {data:'merek', name:'merek'},
                {data:'harga', name:'harga'},
                {data:'plat_nomor', name:'plat_nomor'},
                {data:'foto', name:'foto'},
                {data:'edit', name:'edit'},
            ]
        });
    });
</script>
@endsection
