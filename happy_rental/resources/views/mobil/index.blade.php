@extends('layout.master_dashboard')

@section('tittle')
Mobil
@endsection

@section('main')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3>Mobil</h3>
                            <div class="right">
                                <a type="button" class="btn btn-primary" data-toggle="modal"
                                    data-target="#exampleModal">
                                    <i class="lnr lnr-plus-circle"></i> Mobil
                                </a>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kode</th>
                                            <th>Nama</th>
                                            <th>Merek</th>
                                            <th>Kapasitas</th>
                                            <th>Plat Nomor</th>
                                            <th>Harga</th>
                                            <th>Foto</th>
                                            <th colspan="2">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                        $no = 1;
                                        @endphp
                                        @foreach($mobil as $mbl)
                                        <tr>
                                            <td>{{ $no }}</td>
                                            <td>{{ $mbl->kode }}</td>
                                            <td>{{ $mbl->nama }}</td>
                                            <td>{{ $mbl->merek }}</td>
                                            <td>{{ $mbl->kapasitas }}</td>
                                            <td>{{ $mbl->plat_nomor }}</td>
                                            <td>{{ $mbl->harga }}</td>
                                            <td><img src="{{ $mbl->getAvatar() }}" width="100" height="100" alt=""></td>
                                            <td><a href="" class="btn btn-warning"><span>Edit</span></a></td>
                                            <td><a href="" class="btn btn-danger"><span>Delete</span></a></td>
                                        </tr>
                                        @php
                                        $no++;
                                        @endphp
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
                <form action="{{ route('mobil.create') }}" enctype="multipart/form-data" method="POST">
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
                        <label for="">Kapasitas</label>
                        <input type="number" name="kapasitas" class="form-control" placeholder="Kapasitas" id="">
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
