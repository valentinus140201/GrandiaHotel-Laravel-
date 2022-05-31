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
        <ul class="nav justify-content-end">
            <li class="nav-item">
                <h6 class="me-2 mt-2"><b>Welcome back , {{ Session::get('name') }}</b></h6>
            </li>
            <li class="nav-item">
                <a href="/logout" class="nav-link link-dark text-light"><i class="bi bi-box-arrow-right pe-1"></i><b>Logout</b></a>
            </li>
        </ul>
        @endif

    </div>
</nav>
<header class="py-3 mb-4 border-bottom">
    <div class="container d-flex flex-wrap justify-content-center">
        <a href="/" class="d-flex align-items-center mb-3 mb-lg-0 me-lg-auto text-dark text-decoration-none">
            <span class="fs-4" href="/">Grandia Hotel</span>
        </a>
    </div>
</header>