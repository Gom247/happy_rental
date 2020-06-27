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
                            <form action="" enctype="multipart/form-data" method="POST">
                                {{ csrf_field() }}

                                <div class="panel-footer">
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                            </form>


                        </div>
                    </div>
                    <div class="panel">
                        <div class="panel-heading">
                            <h3>Foto</h3>
                        </div>
                        <div class="panel-body">
                            <img src="{{ $member->getAvatar() }}" width="200" height="200" alt="">
                        </div>
                    </div>
                    <div class="panel">
                        <div class="panel-heading">
                            <h3>Identitas</h3>
                        </div>
                        <div class="panel-body">
                            <img src="{{ $member->getIdentitas() }}" width="400" height="400" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
