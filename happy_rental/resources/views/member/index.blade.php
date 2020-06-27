@extends('layout.master_dashboard')

@section('tittle')
Member
@endsection

@section('main')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3>Data Member</h3>
                            <div class="right">
                                
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover" id="table" width="100%">
                                    <thead>
                                        <tr>
                                            <th>No Member</th>
                                            <th>Nama</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Email</th>
                                            <th>Alamat</th>
                                            <th>No Telp</th>
                                            <th>Foto</th>
                                            <th>Aksi</th>
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
@endsection

@section('js')
<script>
    $(document).ready( function () {
        $('#table').dataTable({
            processing:true,
            serverside:true,
            ajax:"{{ route('get.data.member') }}",
            columns:[
                {data:'no_member', name:'no_member'},
                {data:'name', name:'name'},
                {data:'jenis_kelamin', name:'jenis_kelamin'},
                {data:'email', name:'email'},
                {data:'alamat', name:'alamat'},
                {data:'no_tlp', name:'no_tlp'},
                {data:'foto', name:'foto'},
                {data:'profile', name:'profile'},
            ]
        });
    } );
</script>
@endsection
