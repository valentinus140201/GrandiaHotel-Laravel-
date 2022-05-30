@extends ('layouts.main')

@section('container')
<div class="container">
    @foreach($categories->chunk(4) as $categories)
    <div class="row row-cols-auto">
        @foreach ($categories as $category)
        <div class="col">
            <img src="{{ asset('storage/' . $category->image) }}" alt="{{ $category->image }}" class="card-img-top">
            <h2 class="fw-normal">{{ $category->type }}</h2>
            <p><a class="btn btn-secondary" href="/categories/menu/{{ $category->type }}" style="background:#1E90FF;">View details &raquo;</a></p>
        </div>
        @endforeach
    </div>
    @endforeach
</div>

@endsection