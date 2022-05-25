<nav class="py-2 border-bottom" style="background:#7B3F00;">
    <div class="container d-flex flex-wrap">
        <ul class="nav me-auto">
            <li class="nav-item"><a href="/categories" class="nav-link link-dark px-2 text-black {{ ($title === "Categories") ? 'active' : '' }}" aria-current=" page"><b>Categories</b></a></li>
            <li class="nav-item"><a href="/master" class="nav-link link-dark px-2 text-black {{ ($title === "Master") ? 'active' : '' }}" aria-current="page"><b>Master</b></a></li>
        </ul>
        <ul class="nav">
            <li class="nav-item"><a href="/login" class="nav-link link-dark px-2 text-black {{ ($title === "Login") ? 'active' : '' }}"><b>Login</b></a></li>
            <li class="nav-item"><a href="/register" class="nav-link link-dark px-2 text-black {{ ($title === "Register") ? 'active' : '' }}"><b>Register</b></a></li>
        </ul>
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