<div id="wrapper">
    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-fw fa-folder"></i>
                <span>Rental</span>
            </a>
            <div class="dropdown-menu" aria-labelledby="pagesDropdown">
                <a class="dropdown-item" href="login.html">Login</a>
                <a class="dropdown-item" href="register.html">Register</a>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="charts.html">
                <i class=" fas fa-shopping-bag"></i>
                <span>Pesan</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('registrasi') }}">
                <i class="fas fa-user"></i>
                <span>Registasi Member</span></a>
        </li>
    </ul>
