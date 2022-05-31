@extends ('layouts.main')

@section('container')

<div class="album py-5 bg-light">
    <div class="container">
        @foreach($menus->chunk(4) as $menus)
        <div class="row row-cols-auto">
            @foreach ($menus as $menu)
            <div class="col-3">
                <div class="card shadow-sm mb-4">
                    <img src=" {{ asset('storage/' . $menu->image) }}" alt="{{ $menu->image }}" class="card-img-top" height="200px">
                    <div class=" card-body">
                        <p class="card-text">{{ $menu->name }}</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-outline-secondary" id="btnView1">View</button>
                                <div id="myModal" class="modal">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h2>{{ $menu->name }}</h2>
                                            <span class="close">&times;</span>
                                        </div>
                                        <div class="modal-body">
                                            <p class="mt-3">{{ $menu->description }}</p>
                                            <p>{{ $menu->harga }}</p>
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
<script>
    // Get the modal
    var modal = document.getElementById("myModal");
    // Get the button that opens the modal
    var btn = document.getElementById("btnView1");
    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];
    // When the user clicks the button, open the modal
    btn.onclick = function() {
        modal.style.display = "block";
    }
    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modal.style.display = "none";
    }
    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>
@endsection