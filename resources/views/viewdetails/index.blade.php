@extends ('layouts.main')

@section('container')

<div class="row justify-content-center mb-3">
    <div class="col-md-6">
        <form action="/searchViewDetails" method="GET">
            {{ csrf_field() }}
            <div class="input-group mb-3">
                @if (count($menus) > 0)
                <input type="hidden" name="category" id="category" value="{{ $menus[0]->category }}">
                @endif
                <input type="search" class="form-control" placeholder="Search..." id="search" name="search" value="{{ request('search') }}">
                <button class="btn btn-dark" type="submit">Search</button>
            </div>
        </form>
    </div>
</div>

@if($menus->count())
<div class="album py-5 bg-dark">
    <div class="container">
        @foreach($menus->chunk(4) as $menus1)
        <div class="row row-cols-2 row-cols-lg-4 g-2 g-lg-3">
            @foreach ($menus1 as $menu)
            <div class="col">
                <div class="card shadow-sm mb-4">
                    <img src=" {{ asset('storage/' . $menu->image) }}" alt="{{ $menu->image }}" class="card-img-top img-responsive" height="200px">
                    <div class=" card-body">
                        <p class="card-text">{{ $menu->name }}</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#viewDetails">View</button>
                                <!-- Modal -->
                                <div class="modal fade" id="viewDetails" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">{{ $menu->name }}</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div>
                                                    {{ $menu->description }}
                                                </div>
                                                @if (date('Y-m-d') < $menu->promo_akhir && date('Y-m-d') > $menu->promo_awal)
                                                    <div>
                                                        <p>Dari Rp. <s>{{ $menu->harga }}</s> menjadi Rp. <strong>{{ $menu->harga_promo }}</strong></p>

                                                    </div>
                                                    @else
                                                    <div>
                                                        {{ $menu->harga }}
                                                    </div>
                                                    @endif
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        @endforeach
    </div>
</div>

@else
<p class="text-center fs-4">No menu found.</p>
@endif

<div class="d-flex justify-content-end me-5 pe-4 mt-5">
    {{ $menus->links() }}
</div>
@endsection