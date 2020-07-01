<!-- WRAPPER -->
<div id="wrapper">
    <!-- NAVBAR -->
    @include('layout.dashboard.navbar')
    <!-- END NAVBAR -->
    <!-- LEFT SIDEBAR -->
    <div id="sidebar-nav" class="sidebar">
        <div class="sidebar-scroll">
            <nav>
                <ul class="nav">
                    <li><a href="{{ route('dashboard') }}" class="active"><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
                    <li><a href="{{ route('pegawai') }}" ><i class="lnr lnr-user"></i> <span>Pegawai</span></a></li>
                    <li>
                        <a href="#subPages" data-toggle="collapse" class="collapsed"><i class="lnr lnr-file-empty"></i> <span>Rental</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
                        <div id="subPages" class="collapse ">
                            <ul class="nav">
                                <li><a href="{{ route('mobil') }}" class="">Mobil</a></li>
                                <li><a href="{{ route('motor') }}" class="">Motor</a></li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="{{ route('member') }}"><i class="lnr lnr-user"></i> <span>Member</span></a></li>
                    <li><a href="{{ route('rental') }}"><i class="lnr lnr-file-add"></i> <span>Pesan</span></a></li>
                </ul>
            </nav>
        </div>
    </div>
    <!-- END LEFT SIDEBAR -->
