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
            <tr>
                <th scope="row">1</th>
                <td>Nasi</td>
                <td>Nasi Goreng Sambal Hijau</td>
                <td>sajian nasi yang digoreng dalam sebuah wajan atau penggorengan menghasilkan cita rasa berbeda karena dicampur dengan bumbu-bumbu seperti garam, bawang putih, bawang merah, merica dan kecap manis.</td>
                <td>60.500</td>
                <td>01-05-2022 - 05-05-2022</td>
                <td>20-05-2022 - 25-05-2022</td>
                <td>50.000</td>
                <td>
                    <div id="editMenu">
                        <h1 class="w-10 py-2 mb-2 btn rounded-3"><a href="/master/updatemenu">
                                <i class="bi bi-pencil"></i></a>
                        </h1>
                    </div>
                    <div id="deleteMenu">
                        <button class="w-10 py-2 mb-2 btn rounded-3" type="submit">
                            <i class="bi bi-trash3-fill"></i>
                        </button>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
</div>
<div id="addmenu" class="ms-5 ps-5">
    <a href="/master/addmenu"><i class="bi bi-plus-circle-fill pe-2"> Add Menu</i></a>
</div>
@endsection
