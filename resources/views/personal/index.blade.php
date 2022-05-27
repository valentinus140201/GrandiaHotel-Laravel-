@extends ('layouts.main')

@section('container')
<div class="table-responsive-lg ">
    <table class="table caption-top">
        <caption><b>List Personal</b></caption>
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Tanggal Lahir</th>
                <th scope="col">Username</th>
                <th scope="col">Password</th>
                <th scope="col">Phone Number</th>
                <th scope="col">Expired</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Valentinus</td>
                <td>valentinus@gmail.com</td>
                <td>10-01-1989</td>
                <td>valentinus123</td>
                <td>123</td>
                <td>080534304334</td>
                <td>05-05-2023</td>
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
                <th scope="row">2</th>
                <td>Valentinus</td>
                <td>valentinus@gmail.com</td>
                <td>10-01-1989</td>
                <td>valentinus123</td>
                <td>123</td>
                <td>080534304334</td>
                <td>05-05-2023</td>
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
                <td>Valentinus</td>
                <td>valentinus@gmail.com</td>
                <td>10-01-1989</td>
                <td>valentinus123</td>
                <td>123</td>
                <td>080534304334</td>
                <td>05-05-2023</td>
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
<!-- The Modal -->
<div id="addpersonal" class="ms-5 ps-5">
    <button class="w-10 py-2 mb-2 btn rounded-3" type="submit">
        <i class="bi bi-plus-circle-fill pe-2"> Add Personal</i>
    </button>
</div>

<div id="modalAddPersonal" class="modal">
    <!-- Modal content -->
    <div class="modal-content">
        <div class="modal-header">
            <h2>Add Personal</h2>
            <span class="close">&times;</span>
        </div>
        <div class="modal-body">
            <div class="form-floating m-2">
                <input type="text" name="name" class="form-control" id="name" placeholder="Name">
                <label for="name">Name</label>
            </div>
            <div class="form-floating m-2">
                <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com">
                <label for="email">Email address</label>
            </div>
            <div class="form-floating m-2">
                <input type="date" name="tanggalLahir" class="form-control" id="tanggalLahir" placeholder="Tanggal Lahir">
                <label for="tanggalLahir">Tanggal lahir</label>
            </div>
            <div class="form-floating m-2">
                <input type="text" name="username" class="form-control" id="username" placeholder="Username">
                <label for="username">Username</label>
            </div>
            <div class="form-floating m-2">
                <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                <label for="password">Password</label>
            </div>
            <div class="form-floating m-2">
                <input type="number" name="noTlp" class="form-control" id="noTlp" placeholder="NoTlp">
                <label for="NoTlp">Phone Number</label>
            </div>
            <div class="form-floating m-2">
                <input type="date" name="expired" class="form-control" id="expired" placeholder="expired">
                <label for="expired">Expired</label>
            </div>
            <div id="saveAddPersonal" class="mt-2 m-2 d-flex justify-content-end">
                <button class="w-10 py-2 mb-2 btn rounded-3" type="submit">Save</i> </button>
            </div>
        </div>
    </div>
</div>



<script>
    // Get the modal
    var modalAddPersonal = document.getElementById("modalAddPersonal");

    // Get the button that opens the modal
    var btn = document.getElementById("addpersonal");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks the button, open the modal 
    btn.onclick = function() {
        modalAddPersonal.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modalAddPersonal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modalAddPersonal.style.display = "none";
        }
    }
</script>

@endsection