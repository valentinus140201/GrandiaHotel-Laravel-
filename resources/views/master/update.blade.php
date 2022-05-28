@extends ('layouts.main')

@section('container')
<div class="row justify-content-center ">
    <div class="col-lg-5">
        <main class="form-add-menu">
            <h1 class="h3 mb-3 fw-normal">Update Menu Form</h1>
            <form action="/addmenu" method="post">
                {{ csrf_field() }}
                <div class="form mb-2">
                    <select id="category" class=" form-select" aria-label="Default select example">
                        <option selected>Choose Category</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                <div class="form-floating">
                    <input type="text" name="namaMenu" class="form-control @error('namaMenu')is-invalid @enderror" id="name" placeholder="Nama Menu" required value="{{ old('namaMenu') }}">
                    <label for="namaMenu">Nama Menu</label>
                    @error('namaMenu')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-floating">
                    <input type="text" name="deskripsi" class="form-control @error('deskripsi')is-invalid @enderror" id="description" placeholder="Deskripsi" required value="{{ old('deskripsi') }}">
                    <label for="deskripsi">Deskripsi</label>
                    @error('deskripsi')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="input-group mt-2 mx-2 mb-2 pe-2">
                    <input type="file" name="inputGambar" class="form-control @error('inputGambar')is-invalid @enderror" id="image" required value="{{ old('inputGambar') }}">
                    @error('inputGambar')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
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
                    <input type="date" name="promoAwal" class="form-control @error('promoAwal')is-invalid @enderror" id="promo_awal" placeholder="Promo Awal" required value="{{ old('promoAwal') }}">
                    <label for="promoAwal">Promo Awal</label>
                    @error('promoAwal')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-floating">
                    <input type="date" name="promoAkhir" class="form-control @error('promoAkhir')is-invalid @enderror" id="promo_akhir" placeholder="Promo Akhir" required value="{{ old('promoAkhir') }}">
                    <label for="promoAkhir">Promo Akhir</label>
                    @error('promoAkhir')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-floating">
                    <input type="number" name="hargaPromo" class="form-control @error('hargaPromo')is-invalid @enderror" id="harga_promo" placeholder="Harga Promo" required value="{{ old('hargaPromo') }}">
                    <label for="hargaPromo">Harga Promo</label>
                    @error('hargaPromo')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">SAVE</button>
            </form>
        </main>
    </div>
</div>

@endsection