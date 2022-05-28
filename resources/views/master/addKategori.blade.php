@extends ('layouts.main')

@section('container')
<div class="row justify-content-center ">
    <div class="col-lg-5">
        <main class="form-add-kategori">
            <h1 class="h3 mb-3 fw-normal">Add Category Form</h1>
            <form action="/addmenu" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-floating m-2">
                    <input type="text" name="type" class="form-control @error('type')is-invalid @enderror" id="type" placeholder="Type" required value="{{ old('type') }}">
                    <label for="type">Type</label>
                    @error('type')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="input-group mt-2 mx-2 mb-2 pe-2">
                    <label for="image" class="form-label"></label>
                    <input class="form-control" type="file" id="image" name="image">
                </div>
                <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">SAVE</button>
            </form>
        </main>
    </div>
</div>

@endsection