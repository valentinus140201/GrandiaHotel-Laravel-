<nav class="py-2 border-bottom" style="background:#7B3F00;">
    <div class="container d-flex flex-wrap">
        <ul class="nav me-auto">
            <li class="nav-item"><a href="/categories" class="nav-link link-dark px-2 text-black {{ ($title === "Categories") ? 'active' : '' }}" aria-current=" page"><b>Categories</b></a></li>
            @if (Session::get('type') == 'admin' || Session::get('type') == 'supervisor')
            <li class="nav-item"><a href="/master" class="nav-link link-dark px-2 text-black {{ ($title === "Master") ?'active' : '' }}" aria-current="page"><b>Master</b></a></li>
            @if (Session::get('type') == 'admin')
            <li class="nav-item"><a href="/personal" class="nav-link link-dark px-2 text-black {{ ($title === "Personal") ? 'active' : '' }}" aria-current="page"><b>Personal</b></a></li>
            @endif

            @endif
        </ul>
        @if (Session::get('id') != '')
        <ul class="nav">
            <h6 class="m-2">Welcome back , {{ Session::get('name') }}</h6>
            <li class="nav-item"><a href="/logout" class="nav-link link-dark px-2 text-black"><b>Logout</b></a></li>
        </ul>
        @endif

    </div>
</nav>
<header class="py-3 mb-4 border-bottom">
    <div class="container d-flex flex-wrap justify-content-center">
        <a href="/" class="d-flex align-items-center mb-3 mb-lg-0 me-lg-auto text-dark text-decoration-none">
            <span class="fs-4" href="/">Grandia Hotel</span>
        </a>
        <form class="col-12 col-lg-auto mb-3 mb-lg-0" role="search">
            <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
        </form>
    </div>
</header>