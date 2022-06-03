@extends ('layouts.main')

@section('container')
<div class="row justify-content-center ">
    <div class="col-lg-5">
        <main class="form-add-kategori">
            <h1 class="h3 mb-3 fw-normal">Add Category Form</h1>
            <form action="/addcategory" method="post" enctype="multipart/form-data">
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
                <button type="button" class="w-100 btn btn-lg btn-primary mt-3" data-bs-toggle="modal" data-bs-target="#addCategory">CREATE</button>
                <!-- Modal -->
                <div class="modal fade" id="addCategory" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Create Category</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <b>Are you sure you want to create this category ? </b>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary">Yes</button>
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