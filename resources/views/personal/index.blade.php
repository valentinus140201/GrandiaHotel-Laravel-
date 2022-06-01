@extends ('layouts.main')

@section('container')

<div class="row justify-content-center mb-3">
    <div class="col-md-6">
        <form action="/personal">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Search..." name="search" value="{{ request('search') }}">
                <button class="btn btn-dark" type="submit">Search</button>
            </div>
        </form>
    </div>
</div>

@if($users->count())
<div class="table-responsive-xl d-flex justify-content-center">
    <table class="table caption-top table-bordered">
        <caption><b>List Personal</b></caption>
        <thead class="table-dark">
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Name</th>
                <th scope="col">Username</th>
                <th scope="col">Email</th>
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
                <td>{{ $user->type }}</td>
                <td>{{ $user->is_login }}</td>
                <td>
                    <div id="editPersonal">
                        <h1 class="w-10 py-2 mb-2 btn rounded-3"><a href="/personal/editpersonal">
                                <i class="bi bi-pencil"></i></a>
                        </h1>
                    </div>
                    @if (Session::get('type') == 'admin')
                    <div id="deletePersonal">
                        <a href="/personal/delete/{{ $user->id }}" class="w-10 py-2 mb-2 btn rounded-3">
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

@else
<p class="text-center fs-4">No row found.</p>
@endif

@if (Session::get('type') == 'admin')
<ul class="nav justify-content-end me-5 pe-5">
    <li class="nav-item">
        <a href="/personal/addpersonal" class="nav-link text-dark"><i class="bi bi-plus-circle-fill border border-primary p-2 rounded-4"> Add Personal</i></a>
    </li>
</ul>
@endif

<div class="d-flex justify-content-end me-5 pe-4 mt-5">
    {{ $users->links() }}
</div>

@endsection