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
            <tr>
                <th scope="row">2</th>
                <td>Ayam</td>
                <td>Ayam Goreng</td>
                <td>sajian nasi yang digoreng dalam sebuah wajan atau penggorengan menghasilkan cita rasa berbeda karena dicampur dengan bumbu-bumbu seperti garam, bawang putih, bawang merah, merica dan kecap manis.</td>
                <td>57.500</td>
                <td>01-05-2022 - 05-05-2022</td>
                <td>20-05-2022 - 25-05-2022</td>
                <td>50.000</td>
                <td>
                    <div id="editMenu">
                        <button class="w-10 py-2 mb-2 btn rounded-3" type="submit">
                            <i class="bi bi-pencil"></i>
                        </button>
                    </div>
                    <div id="deleteMenu">
                        <button class="w-10 py-2 mb-2 btn rounded-3" type="submit">
                            <i class="bi bi-trash3-fill"></i>
                        </button>
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Ikan</td>
                <td>Ikan Goreng</td>
                <td>sajian nasi yang digoreng dalam sebuah wajan atau penggorengan menghasilkan cita rasa berbeda karena dicampur dengan bumbu-bumbu seperti garam, bawang putih, bawang merah, merica dan kecap manis.</td>
                <td>70.500</td>
                <td>01-05-2022 - 05-05-2022</td>
                <td>20-05-2022 - 25-05-2022</td>
                <td>50.000</td>
                <td>
                    <div id="editMenu">
                        <button class="w-10 py-2 mb-2 btn rounded-3" type="submit">
                            <i class="bi bi-pencil"></i>
                        </button>
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
<<<<<<< HEAD

<div id="modalAddMenu" class="modal">
    <!-- Modal content -->
    <div class="modal-content">
        <div class="modal-header">
            <h2>Add Menu</h2>
            <span class="close">&times;</span>
        </div>
        <div class="modal-body">
            <div class="input-group m-2">
                <select class="form-select" id="pilihKategori">
                    <option selected>Choose Category</option>
                    <option value="Fish">Fish</option>
                    <option value="Appetize">Appetize</option>
                    <option value="Desserts">Desserts</option>
                </select>
                <label class="input-group-text" for="inputGroupSelect02">Options</label>
            </div>
            <div class="form-floating m-2">
                <input type="text" name="namaMenu" class="form-control" id="namaMenu" placeholder="Nama Menu">
                <label for="namaMenu">Nama Menu</label>
            </div>
            <div class="form-floating m-2">
                <input type="text" name="deskripsi" class="form-control" id="deskripsi" placeholder="Deskripsi">
                <label for="deskripsi">Deskripsi</label>
            </div>
            <div class="input-group m-2">
                <input type="file" class="form-control" id="inputGambar">
                <label class="input-group-text" for="inputGambar">Upload</label>
            </div>
            <div class="form-floating m-2">
                <input type="number" name="harga" class="form-control" id="harga" placeholder="Harga">
                <label for="harga">Harga</label>
            </div>
            <div class="form-floating m-2">
                <input type="date" name="promoAwal" class="form-control" id="promoAwal" placeholder="Promo Awal">
                <label for="promoAwal">Promo Awal</label>
            </div>
            <div class="form-floating m-2">
                <input type="date" name="promoAkhir" class="form-control" id="promoAkhir" placeholder="Promo Akhir">
                <label for="promoAkhir">Promo Akhir</label>
            </div>
            <div class="form-floating m-2">
                <input type="number" name="hargaPromo" class="form-control" id="hargaPromo" placeholder="Harga Promo">
                <label for="harga Promo">Harga Promo</label>
            </div>
            <div id="saveAddMenu" class="mt-2 m-2 d-flex justify-content-end">
                <button class="w-10 py-2 mb-2 btn rounded-3" type="submit">Save</i> </button>
            </div>
        </div>
    </div>
</div>



<script>
    // Get the modal
    var modalAddMenu = document.getElementById("modalAddMenu");

    // Get the button that opens the modal
    var btn = document.getElementById("addmenu");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks the button, open the modal
    btn.onclick = function() {
        modalAddMenu.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modalAddMenu.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modalAddMenu.style.display = "none";
        }
    }
</script>

@endsection
=======
@endsection
>>>>>>> 7d4eef473bc31d582ae95685ca62d00c5f166931
