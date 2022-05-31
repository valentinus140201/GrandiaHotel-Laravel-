@extends ('layouts.main')

@section('container')
<div class="row justify-content-center ">
    <div class="col-lg-5">
        <main class="form-add-menu">
            <h1 class="h3 mb-3 fw-normal">Add Menu Form</h1>
            <form action="/addmenu" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form mb-2">
                    <select name="category" id="category" class=" form-select" aria-label="Default select example">
                        <option selected>Choose Category</option>
                        @foreach ($categories as $category)
                        <option value="{{ $category->type }}">{{ $category->type }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-floating">
                    <input type="text" name="name" class="form-control @error('namaMenu')is-invalid @enderror" id="name" placeholder="Nama Menu" required value="{{ old('namaMenu') }}">
                    <label for="namaMenu">Nama Menu</label>
                    @error('namaMenu')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-floating">
                    <input type="text" name="description" class="form-control @error('deskripsi')is-invalid @enderror" id="description" placeholder="Deskripsi" required value="{{ old('deskripsi') }}">
                    <label for="deskripsi">Deskripsi</label>
                    @error('deskripsi')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="input-group mt-2 mx-2 mb-2 pe-2">
                    <label for="image" class="form-label"></label>
                    <input class="form-control" type="file" id="image" name="image">
                </div>
                <div class="form-floating">
                    <input type="number" name="harga" class="form-control @error('harga')is-invalid @enderror" id="harga" placeholder="Harga" required value="{{ old('harga') }}">
                    <label for="harga">Harga</label>
                    @error('harga')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-floating">
                    <input type="date" name="promo_awal" class="form-control @error('promoAwal')is-invalid @enderror" id="promo_awal" placeholder="Promo Awal" required value="{{ old('promoAwal') }}">
                    <label for="promoAwal">Promo Awal</label>
                    @error('promoAwal')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-floating">
                    <input type="date" name="promo_akhir" class="form-control @error('promoAkhir')is-invalid @enderror" id="promo_akhir" placeholder="Promo Akhir" required value="{{ old('promoAkhir') }}">
                    <label for="promoAkhir">Promo Akhir</label>
                    @error('promoAkhir')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-floating">
                    <input type="number" name="harga_promo" class="form-control @error('hargaPromo')is-invalid @enderror" id="harga_promo" placeholder="Harga Promo" required value="{{ old('hargaPromo') }}">
                    <label for="hargaPromo">Harga Promo</label>
                    @error('hargaPromo')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <button type="button" class="w-100 btn btn-lg btn-primary mt-3" data-bs-toggle="modal" data-bs-target="#addMenu">CREATE</button>
                <!-- Modal -->
                <div class="modal fade" id="addMenu" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Create Menu</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <b>Are you sure you want to create this menu ? </b>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Yes</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </main>
    </div>
</div>

@endsection