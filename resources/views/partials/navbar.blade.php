<nav class="py-2 border-bottom bg-dark">
    <div class="container d-flex flex-wrap">
        <ul class="nav me-auto">
            <li class="nav-item"><a href="/categories" class="nav-link link-dark px-2 text-white" aria-current=" page"><b>Categories</b></a></li>
            @if (Session::get('type') == 'admin' || Session::get('type') == 'supervisor')
            <li class="nav-item"><a href="/master" class="nav-link link-dark px-2 text-white" aria-current="page"><b>Master</b></a></li>
            @if (Session::get('type') == 'admin')
            <li class="nav-item"><a href="/personal" class="nav-link link-dark px-2 text-white" aria-current="page"><b>Personal</b></a></li>
            @endif

            @endif
        </ul>
        @if (Session::get('id') != '')
        <ul class="nav justify-content-end">
            <li class="nav-item">
                <h6 class="me-2 mt-2 text-white"><b>Welcome back , {{ Session::get('name') }}</b></h6>
            </li>
            <li class="nav-item">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#logout">
                    Logout
                </button>
                <!-- Modal -->
                <div class="modal fade" id="logout" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Logout</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <b>Are you sure you want to leave {{ Session::get('name') }} ?</b>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <a href="/logout">
                                    <button type="button" class="btn btn-primary">Logout</button></a>
                            </div>
                        </div>
                    </div>
                </div>
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