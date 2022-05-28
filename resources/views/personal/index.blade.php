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
                <th scope="col">Type User</th>
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
                <td>Customer</td>
                <td>05-05-2023</td>
                <td>
                    <div id="editPersonal">
                        <h1 class="w-10 py-2 mb-2 btn rounded-3"><a href="/personal/editpersonal">
                                <i class="bi bi-pencil"></i></a>
                        </h1>
                    </div>
                    <div id="deletePersonal">
                        <button class="w-10 py-2 mb-2 btn rounded-3" type="submit">
                            <i class="bi bi-trash3-fill"></i>
                        </button>
                    </div>
                </td>
            </tr>

        </tbody>
    </table>
</div>
<div id="addpersonal" class="ms-5 ps-5">
    <a href="/personal/addpersonal"><i class="bi bi-plus-circle-fill pe-2"> Add Personal</i></a>
</div>

@endsection