<nav class="navbar  navbar-expand-lg navbar-light shadow-sm " id="topNav">
    <div class="container">

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
        <div class="d-none d-lg-block" id="navbarNav">
            <ul class="navbar-nav mr-auto">
                @guest
                    <a class="btn btn-primary btn-rounded me-3" href="{{ route('login') }}">
                        <i class="fas fa-sign-in-alt"></i>
                        Login
                    </a>
                    <a class="btn btn-primary btn-rounded" href="{{ route('register') }}">
                        <i class="fas fa-user-plus"></i>
                        Register
                    </a>
                @else
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-user"></i>
                            {{ Auth::user()->name }}
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
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
                        </ul>
                    </li>
                @endguest
            </ul>
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
