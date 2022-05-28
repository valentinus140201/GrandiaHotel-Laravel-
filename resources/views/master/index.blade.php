@extends ('layouts.main')

@section('container')
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
                        <h1 class="w-10 py-2 mb-2 btn rounded-3"><a href="/master/updatemenu">
                                <i class="bi bi-pencil"></i></a>
                        </h1>
                    </div>
                    @if (Session::get('type') == 'admin')
                        <div id="deleteMenu">
                            <a href="/delete/{{ $menu->id }}" class="w-10 py-2 mb-2 btn rounded-3">
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
<div id="addmenu" class="ms-5 ps-5">
    <a href="/master/addmenu"><i class="bi bi-plus-circle-fill pe-2"> Add Menu</i></a>
</div>
<div id="addcategory" class="ms-5 ps-5">
    <a href="/master/addcategory"><i class="bi bi-plus-circle-fill pe-2"> Add Category</i></a>
</div>
@endif

@endsection
