@extends ('layouts.main')

@section('container')
<div class="row justify-content-center ">
    <div class="col-lg-5">
        <main class="form-update-menu">
            <h1 class="h3 mb-3 fw-normal">Update Menu Form</h1>
            <form action="/updateMenu" method="post" enctype="multipart/form-data">
                @method('put')
                {{ csrf_field() }}
                <input type="hidden" name="id" id="id" value="{{ $menu->id }}">
                <div class="form mb-2">
                    <select name="category" id="category" class=" form-select" aria-label="Default select example">
                        <option selected>Choose Category</option>
                        @foreach ($categories as $category)
                        <option value="{{ $category->type }}">{{ $category->type }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-floating">
                    <input type="text" name="name" class="form-control @error('namaMenu')is-invalid @enderror" id="name" placeholder="{{ $menu->name }}" required value="{{ $menu->name }}">
                    <label for="namaMenu">Nama Menu</label>
                    @error('namaMenu')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-floating">
                    <input type="text" name="description" class="form-control @error('deskripsi')is-invalid @enderror" id="description" placeholder="{{ $menu->description }}" required value="{{ $menu->description }}">
                    <label for="deskripsi">Deskripsi</label>
                    @error('deskripsi')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="input-group mt-2 mx-2 mb-2 pe-2">
                    <label for="image" class="form-label"></label>
                    <input class="form-control" type="file" id="image" name="image" value="{{ $menu->image }}">
                </div>
                <div class=" form-floating">
                    <input type="number" name="harga" class="form-control @error('harga')is-invalid @enderror" id="harga" placeholder="{{ $menu->harga }}" required value="{{ $menu->harga }}">
                    <label for="harga">Harga</label>
                    @error('harga')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-floating">
                    <input type="date" name="promo_awal" class="form-control @error('promoAwal')is-invalid @enderror" id="promo_awal" placeholder="{{ $menu->promo_awal }}" required value="{{ $menu->promo_awal }}">
                    <label for="promoAwal">Promo Awal</label>
                    @error('promoAwal')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-floating">
                    <input type="date" name="promo_akhir" class="form-control @error('promoAkhir')is-invalid @enderror" id="promo_akhir" placeholder="{{ $menu->promo_akhir }}" required value="{{ $menu->promo_akhir }}">
                    <label for="promoAkhir">Promo Akhir</label>
                    @error('promoAkhir')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-floating">
                    <input type="number" name="harga_promo" class="form-control @error('hargaPromo')is-invalid @enderror" id="harga_promo" placeholder="{{ $menu->harga_promo }}" required value="{{ $menu->harga_promo }}">
                    <label for="hargaPromo">Harga Promo</label>
                    @error('hargaPromo')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">SAVE CHANGE</button>
            </form>
        </main>
    </div>
</div>

@endsection