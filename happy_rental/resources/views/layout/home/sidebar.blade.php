<div id="wrapper">
    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <span>Rental</span>
            </a>
            <div class="dropdown-menu" aria-labelledby="pagesDropdown">
                <a class="dropdown-item" href="{{ route('mobil.index') }}">Mobil</a>
                <a class="dropdown-item" href="{{ route('motor.index') }}">Motor</a>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('registrasi') }}">
                <span>Registasi Member</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('about') }}">
                <span>About</span></a>
        </li>


    </ul>
