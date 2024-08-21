<!-- Header -->
<header class="fixed-top">
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand d-flex" href="/">
                <div class="logo my-auto me-2">
                    {{-- <img src="{{ asset('assets/corp-assets/logo/Logo2.png') }}" class="bg-white p-0 rounded-circle"
                        alt="" width="40" height="40"> --}}
                    {{-- Cafe Coklat --}}
                </div>
                <div class="text-brand ps-2 my-auto">
                    <h6 id="text-brand-must-none">Cafe <em>Hijau</em></h6>
                </div>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item {{ $title === 'Home' ? 'active' : '' }}">
                        <a class="nav-link nav-list" href="/">Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-list {{ $title === 'Products' ? 'active' : '' }}"
                            href="{{ url('/product') }}">
                            Products</a>
                    </li>
                    {{-- <li class="nav-item">
                            <a class="nav-link nav-list {{ $title === 'About Us' ? 'active' : '' }}"
                                href="{{ url('/about') }}">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-list {{ $title === 'Contact' ? 'active' : '' }}"
                                href="{{ url('/contact') }}">Contact
                            </a>
                        </li> --}}
                    @if (Auth::check())
                        @if (auth()->user()->level == 'admin')
                            <li class="nav-item dropdown no-arrow">
                                <a class="nav-link nav-list dropdown-toggle" href="#" id="navbarDropdown"
                                    role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    {{ auth()->user()->name }}
                                </a>
                                <ul class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                    aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="{{ url('dashboard') }}">Dashboard Admin</a></li>
                                    <li>
                                        <form action="/logout" method="POST">
                                            @csrf
                                            <button type="submit" class="dropdown-item">
                                                <a>Logout</a>
                                            </button>
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @else
                            <li class="nav-item">
                                <form action="/logout" method="POST">
                                    @csrf
                                    <button type="submit" class="border-0 bg-transparent">
                                        <a class="nav-link nav-list">Logout</a>
                                    </button>
                                </form>
                            </li>
                        @endif
                    @else
                        <li class="nav-item">
                            <a class="nav-link btn px-4 py-2 rounded-pill shadow-sm" id="login-btn"
                                style="background-color: white; color: #098B67" href="{{ url('/login') }}">Login</a>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
</header>
