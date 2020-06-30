@extends('layout.master_dashboard')

@section('tittle')
Profile
@endsection

@section('main')
<div class="main">
    <!-- MAIN CONTENT -->
    <div class="main-content">
        <div class="container-fluid">
            <div class="panel panel-profile">
                <div class="clearfix">
                    <!-- LEFT COLUMN -->
                    <div class="profile-left">
                        <!-- PROFILE HEADER -->
                        <div class="profile-header">
                            <div class="overlay"></div>
                            <div class="profile-main">
                                <img src="{{ $member->getAvatar() }}" class="img-circle" alt="Avatar">
                                <h3 class="name">{{ $member->name }}</h3>

                            </div>
                            <div class="profile-stat">
                                <div class="row">
                                    <div class="col-md-4 stat-item">
                                        45 <span>Projects</span>
                                    </div>
                                    <div class="col-md-4 stat-item">
                                        15 <span>Awards</span>
                                    </div>
                                    <div class="col-md-4 stat-item">
                                        2174 <span>Points</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END PROFILE HEADER -->
                        <!-- PROFILE DETAIL -->
                        <div class="profile-detail">
                            <div class="profile-info">
                                <h4 class="heading">Basic Info</h4>
                                <ul class="list-unstyled list-justify">
                                    <li>Kode Member <span>{{ $member->no_member }}</span></li>
                                    <li>Address <span>{{ $member->alamat }}</span></li>
                                    <li>Kode Pos <span>{{ $member->kode_pos }}</span></li>
                                    <li>Jenis Kelamin <span>{{ $member->jenis_kelamin }}</span></li>
                                    <li>Mobile <span>{{ $member->no_tlp }}</span></li>
                                    <li>Email <span>{{ $member->email }}</span></li>

                                    </li>
                                </ul>
                            </div>
                            <div class="text-center"><a href="{{ route('member.edit', $member->id) }}" class="btn btn-primary">Edit Profile</a></div>
                            <div class="text-center"><a href="{{ route('member.delete', $member->id) }}" class="btn btn-danger">Delete Profile</a></div>
                        </div>
                        <!-- END PROFILE DETAIL -->
                    </div>
                    <!-- END LEFT COLUMN -->
                    <!-- RIGHT COLUMN -->
                    <div class="profile-right">
                        <h4 class="heading">{{ $member->name }}</h4>
                        <!-- AWARDS -->
                        <div class="awards">
                            <div class="row">

                            </div>
                        </div>
                        <!-- END AWARDS -->
                        <!-- TABBED CONTENT -->
                        <div class="tab-content">

                        </div>
                        <!-- END TABBED CONTENT -->
                    </div>
                    <!-- END RIGHT COLUMN -->
                </div>
            </div>
        </div>
    </div>
    <!-- END MAIN CONTENT -->
</div>
<!-- END MAIN -->
@endsection
