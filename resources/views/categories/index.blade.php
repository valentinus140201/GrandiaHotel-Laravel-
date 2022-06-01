@extends ('layouts.main')

@section('container')

<div class="row justify-content-center mb-3">
    <div class="col-md-6">
        <form action="/searchCategories" method="GET">
            @csrf
            <div class="input-group mb-3">
                <input type="search" class="form-control me-2" placeholder ="Search" id="search" name="search">
                <button class="btn btn-dark" type="submit">Search</button>
            </div>
        </form>
    </div>
</div>

@if($categories->count())
<div class="album py-5 bg-dark mb-4">
    <div class="container">
        @foreach($categories->chunk(4) as $categories1)
        <div class="row row-cols-auto">
            @foreach ($categories1 as $category)
            <div class="col-3">
                <div class="card shadow-sm mb-4 rounded-4">
                    <img src="{{ asset('storage/' . $category->image) }}" alt="{{ $category->image }}" class="card-img-top rounded-4" height="220px">
                    <div class=" card-body">
                        <h2 class="fw-normal">{{ $category->type }}</h2>
                        <p><a class="btn btn-dark text-white" href="/categories/menu/{{ $category->type }}">View details &raquo;</a></p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        @endforeach
    </div>
</div>

@else
<p class="text-center fs-4">No category found.</p>
@endif

<div class="d-flex justify-content-end me-5 pe-4 mt-5">
    {{ $categories->links() }}
</div>


@endsection
