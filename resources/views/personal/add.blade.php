@extends ('layouts.main')

@section('container')
<div class="row justify-content-center ">
    <div class="col-lg-5">
        <main class="form-add-personal">
            <h1 class="h3 mb-3 fw-normal">Add Personal Form</h1>
            <form action="/addpersonal" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-floating">
                    <input type="text" name="name" class="form-control @error('name')is-invalid @enderror" id="name" placeholder="Name" required value="{{ old('name') }}">
                    <label for="name">Name</label>
                    @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-floating">
                    <input type="text" name="username" class="form-control @error('username')is-invalid @enderror" id="username" placeholder="Username" required value="{{ old('username') }}">
                    <label for="username">Username</label>
                    @error('username')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-floating">
                    <input type="email" name="email" class="form-control @error('email')is-invalid @enderror" id="email" placeholder="name@example.com" required value="{{ old('email') }}">
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
                        @foreach ($users as $user)
                        <option value="{{ $user->type }}">{{ $user->type }}</option>
                        @endforeach
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
                <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">SAVE</button>
            </form>
        </main>
    </div>
</div>

@endsection