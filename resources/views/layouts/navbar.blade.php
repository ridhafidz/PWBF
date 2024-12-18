<nav class="navbar navbar-expand-lg navbar-light">
    <a class="navbar-brand" href="index.html"><img src="{{ asset('edica') }}/assets/images/logokickspace.jpeg" alt="KickSpace" style="width: 150px; height: auto;"></a>
    <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#edicaMainNav" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="edicaMainNav">
        <ul class="navbar-nav mx-auto mt-2 mt-lg-0">
            <li class="nav-item active">
                <a class="nav-link" href=/layouts/main> Beranda <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href='venues.index'>Venue</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="blogDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Blog</a>
                <div class="dropdown-menu" aria-labelledby="blogDropdown">
                    <a class="dropdown-item" href="blog.html">Blog Archive</a>
                    <a class="dropdown-item" href="blog-single.html">Blog Post</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="contact.html">Contact</a>
            </li>
        </ul>
        <ul class="navbar-nav mt-2 mt-lg-0">
            <li class="nav-item">
                <a class="nav-link" href="#"><span class="flag-icon flag-icon-squared rounded-circle flag-icon-gb"></span> Eng</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="profileDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img src="{{ asset('edica/assets/images/profile.png') }}" alt="Profile" class="rounded-circle" width="30" height="30">
                    @auth
                        {{ Auth::user()->name }}
                    @else
                        Guest
                    @endauth
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="profileDropdown">
                    @auth
                        <a class="dropdown-item" href="{{ url('/profile') }}">My Profile</a>
                        <a class="dropdown-item" href="{{ url('/settings') }}">Settings</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item text-danger" href="{{ url('/logout') }}">Logout</a>
                    @else
                        <a class="dropdown-item" href="{{ url('/login')     }}">Login</a>
                        <a class="dropdown-item" href="{{ url('/register') }}">Register</a>
                    @endauth
                </div>
            </li>

        </ul>
    </div>
</nav>
