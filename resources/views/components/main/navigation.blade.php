<nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0">
    <a href="/" class="navbar-brand d-flex d-lg-none me-4">
        <h2 class="text-primary mb-0"><i class="fa fa-user-edit"></i></h2>
    </a>
    <a href="#" class="sidebar-toggler flex-shrink-0">
        <i class="fa fa-bars"></i>
    </a>
    <div class="navbar-nav align-items-center ms-auto">
        @guest
            <div class="nav-item dropdown">
                <a href="{{ route('login') }}">Login</a>
            </div>
            <div class="nav-item dropdown ms-3">
                <a href="{{ route('register') }}">Register</a>
            </div>
        @endguest
        @auth
            <div class="nav-item">
                <div class="ms-3">
                    <h6 class="mb-0">{{ auth()->user()->name}}</h6>
                </div>
            </div>
            <div class="nav-item">
                <a href="#" class="nav-link dropdown">
                    <i class="fa fa-bell me-lg-2"></i>
                    <span class="d-none d-lg-inline-flex"
                          onclick="document.querySelector('#logout').submit()">Logout</span>
                </a>
            </div>
        @endauth
    </div>
    <form action="{{ route('logout') }}" method="post" id="logout">
        @csrf
    </form>
</nav>

