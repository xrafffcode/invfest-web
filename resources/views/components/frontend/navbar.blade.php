<nav class="navbar  navbar-expand-lg navbar-light shadow-sm " id="topNav">
    <div class="container d-flex">

        <a class="navbar-brand mx-auto mx-lg-0
            d-flex flex-row justify-content-center align-self-center"
            href="{{ route('frontend.landing') }}">
            <img src="{{ asset(getWebConfiguration()->nav_logo) }}" alt="Logo" width="60px" height="80px" />
            <div class="d-flex flex-column align-self-center justify-self-center mx-3">
                <span class="text-blue font-weight-bold">
                    {{ getWebConfiguration()->title }}
                </span>
                <small class="text-slogan">
                    Easy life with technology
                </small>
            </div>
        </a>

        <!-- Navbar Menu  -->
        <div class="d-none d-lg-block" id="navbarNav" style="flex: 1;">
            <ul class="navbar-nav mr-auto d-flex justify-content-between">
                @guest
                    <ul class="list_menu_link navbar-nav p-0 mx-auto">
                        <li class="nav-item"><a href="" class="nav-link {{ request()->is('/') ? 'active' : '' }}">home</a></li>
                        <li class="nav-item"><a href="" class="nav-link {{ request()->is('#timeline') ? 'active' : '' }}">upload karya</a></li>
                        <li class="nav-item"><a href="#timeline" class="nav-link">timeline</a></li>
                        <li class="nav-item"><a href="" class="nav-link">contact us</a></li>
                        <li class="nav-item"><a href="" class="nav-link">tracking</a></li>
                    </ul>
                    <ul class="p-0">
                        <a class="btn btn-sm btn-primary btn-rounded me-1" href="{{ route('login') }}">
                            <i class="fas fa-sign-in-alt"></i>
                            Login
                        </a>
                        <a class="btn btn-sm btn-primary btn-rounded" href="{{ route('register') }}">
                            <i class="fas fa-user-plus"></i>
                            Register
                        </a>                        
                    </ul>
                @else
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-users"></i>
                            {{ Auth::user()->teams->first()->team_name ?? 'Admin' }}
                        </a>
                        <ul class="dropdown-menu border-0 shadow-sm p-2" aria-labelledby="navbarDropdownMenuLink">
                            @hasrole('admin')
                                <li>
                                    <a class="dropdown-item" href="{{ route('admin.dashboard') }}">
                                        <i class="fas fa-tachometer-alt"></i>
                                        Dashboard
                                    </a>
                                </li>
                            @else
                                <li>
                                    <a class="dropdown-item" href="{{ route('team.dashboard') }}">
                                        <i class="fas fa-tachometer-alt"></i>
                                        Dashboard
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                        <i class="fas fa-sign-out-alt"></i>
                                        Logout
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </li>
                            @endhasrole
                        </ul>
                    </li>
                @endguest
            </nav>
        </div>
    </div>
</nav>
<!-- End of Navbar -->

<!-- Bottom Navbar -->
<nav class="navbar navbar-light navbar-expand p-0 d-lg-none d-xl-none fixed-bottom top-shadow bg-white" id="bottomNav">
    <ul class="navbar-nav nav-justified w-100">

    </ul>
</nav>
<!-- End of Bottom Navbar -->
