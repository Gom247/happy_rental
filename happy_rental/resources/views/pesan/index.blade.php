@extends('layout.master_dashboard')

@section('tittle')
Pesanan
@endsection

@section('main')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3>Pesanan</h3>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover table-striped" id="table">
                                    <thead>
                                        <tr>
                                            <th>Kode Member</th>
                                            <th>Pesan</th>
                                            <th>Tanggal</th>
                                            <th>Hari</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($pesan as $psn)
                                        <tr>
                                            <td>{{ $psn->no_member }}</td>
                                            <td>{{ $psn->nama }}</td>
                                            <td>{{ $psn->tanggal }}</td>
                                            <td>{{ $psn->hari }}</td>
                                            <td><a href="{{ route('rental.edit', $psn->id) }}" class="btn btn-primary"><span>Edit</span></a>
                                                <a href="" class="btn btn-primary"><span>Print</span></a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
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
        $('#table').dataTable();
    } );
</script>
@endsection
