@extends ('layouts.main')

@section('container')

<div class="row justify-content-center mb-3">
    <div class="col-md-6">
        <form action="/master">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Search..." name="search" value="{{ request('search') }}">
                <button class="btn btn-dark" type="submit">Search</button>
            </div>
        </form>
    </div>
</div>

<div class="table-responsive-lg ">
    <table class="table caption-top">
        <caption><b>List Menu</b></caption>
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Kategori</th>
                <th scope="col">Nama Menu</th>
                <th scope="col">Deskripsi</th>
                <th scope="col">Harga</th>
                <th scope="col">Promo Awal</th>
                <th scope="col">Promo Akhir</th>
                <th scope="col">Harga Promo</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($menus as $menu)
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $menu->category }}</td>
                <td>{{ $menu->name }}</td>
                <td>{{ $menu->description }}</td>
                <td>{{ $menu->harga }}</td>
                <td>{{ $menu->promo_awal }}</td>
                <td>{{ $menu->promo_akhir }}</td>
                <td>{{ $menu->harga_promo }}</td>
                <td>
                    <div id="editMenu">
                        <h1 class="w-10 py-2 mb-2 btn rounded-3"><a href="/master/editmenu">
                                <i class="bi bi-pencil"></i></a>
                        </h1>
                    </div>
                    @if (Session::get('type') == 'admin')
                    <div id="deleteMenu">
                        <a href="/menu/delete/{{ $menu->id }}" class="w-10 py-2 mb-2 btn rounded-3">
                            <i class="bi bi-trash3-fill"></i>
                        </a>
                    </div>
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@if (Session::get('type') == 'admin')
<ul class="nav justify-content-end me-5 pe-4">
    <li class="nav-item">
        <a href="/master/addcategory" class="nav-link text-dark"><i class="bi bi-plus-circle-fill border border-primary p-2 rounded-4"> Add Category</i></a>
    </li>
    <li class="nav-item">
        <a href="/master/addmenu" class="nav-link text-dark"><i class="bi bi-plus-circle-fill border border-primary p-2 rounded-4"> Add Menu</i></a>
    </li>
</ul>
@endif

<div class="d-flex justify-content-end me-5 pe-4 mt-5">
    {{ $menus->links() }}
</div>
@endsection