@extends ('layouts.main')

@section('container')
<div class="row justify-content-center ">
    <div class="col-lg-5">
        <main class="form-update-personal">
            <h1 class="h3 mb-3 fw-normal">Update Personal Form</h1>
            <form action="/updatePersonal" method="post" enctype="multipart/form-data">
                @method('put')
                {{ csrf_field() }}
                <input type="hidden" name="id" id="id" value="{{ $user->id }}">
                <div class="form-floating">
                    <input type="text" name="name" class="form-control @error('nama')is-invalid @enderror" id="name" placeholder="{{ $user->name }}" required value="{{ $user->name }}">
                    <label for="name">Name</label>
                    @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-floating">
                    <input type="text" name="username" class="form-control @error('username')is-invalid @enderror" id="username" placeholder="{{ $user->username }}" required value="{{ $user->username }}">
                    <label for="username">Username</label>
                    @error('username')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-floating">
                    <input type="email" name="email" class="form-control @error('email')is-invalid @enderror" id="email" placeholder="{{ $user->email }}" required value="{{ $user->email }}">
                    <label for="email">Email address</label>
                    @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-floating">
                    <input type="password" name="password" class="form-control rounded-bottom @error('password')is-invalid @enderror" id="password" placeholder="Password" required>
                    <label for="password">Password</label>
                    @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form mb-2">
                    <select name="type" id="type" class=" form-select" aria-label="Default select example">
                        <option selected>Choose Type User</option>
                        <option value="admin">Admin</option>
                        <option value="supervisor">Supervisor</option>
                        <option value="cashier">Cashier</option>
                    </select>
                </div>
                <!-- <div class="form-floating">
                    <input type="date" name="expired" class="form-control @error('expired')is-invalid @enderror" id="expired" placeholder="Expired" required value="{{ old('expired') }}">
                    <label for="expired">Expired</label>
                    @error('expired')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div> -->
                <button class="w-100 btn btn-lg btn-primary mt-3" type="button" data-bs-toggle="modal" data-bs-target="#updatePersonal">SAVE CHANGE</button>
                <!-- Modal -->
                <div class="modal fade" id="updatePersonal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Update Personal</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body d-flex justify-content-start">
                                <b>Are you sure you want to save this personal ?</b>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary">Yes</button></a>
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </main>
    </div>
</div>

@endsection