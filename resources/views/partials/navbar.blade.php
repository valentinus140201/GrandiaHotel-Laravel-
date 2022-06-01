<nav class="navbar navbar-expand-lg border-bottom bg-dark sticky-top">
    <div class="container d-flex flex-wrap">
        <button class="navbar-toggler btn btn-secondary bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item"><a href="/categories" class="nav-link link-dark text-white" aria-current=" page"><b>Categories</b></a></li>
                @if (Session::get('type') == 'admin' || Session::get('type') == 'supervisor')
                <li class="nav-item"><a href="/master" class="nav-link link-dark text-white" aria-current="page"><b>Master</b></a></li>
                @if (Session::get('type') == 'admin')
                <li class="nav-item"><a href="/personal" class="nav-link link-dark text-white" aria-current="page"><b>Personal</b></a></li>
                @endif
                @endif
            </ul>
        </div>

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
                                <a href="/logout"><button type="button" class="btn btn-primary">Logout</button></a>
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
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