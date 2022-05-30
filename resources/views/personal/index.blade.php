@extends ('layouts.main')

@section('container')
<div class="table-responsive-lg ">
    <table class="table caption-top">
        <caption><b>List Personal</b></caption>
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Name</th>
                <th scope="col">Username</th>
                <th scope="col">Email</th>
                <th scope="col">Password</th>
                <th scope="col">Type User</th>
                <th scope="col">Status Login</th>
                <!-- <th scope="col">Expired</th> -->
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $user->name }}</td>
                <td>{{ $user->username}}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->password }}</td>
                <td>{{ $user->type }}</td>
                <td>{{ $user->is_login }}</td>
                <td>
                    <div id="editPersonal">
                        <h1 class="w-10 py-2 mb-2 btn rounded-3"><a href="/personal/updatepersonal">
                                <i class="bi bi-pencil"></i></a>
                        </h1>
                    </div>
                    @if (Session::get('type') == 'admin')
                    <div id="deletePersonal">
                        <a href="/delete/{{ $user->id }}" class="w-10 py-2 mb-2 btn rounded-3">
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
<div id="addpersonal" class="ms-5 ps-5">
    <a href="/personal/addpersonal"><i class="bi bi-plus-circle-fill pe-2"> Add Personal</i></a>
</div>
@endif

@endsection