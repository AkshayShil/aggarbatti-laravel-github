@extends("basetemplate")

@section("body")
    <form action="/add/product" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="name">Product Name</label>
            <input type="text" name="name" id="name" class="form-control" placeholder="Enter product name">
        </div>
        <div class="form-group">
            <label for="type">Product Type</label>
            <input type="text" name="type" id="type" placeholder="Enter product type" class="form-control">
        </div>
        <div class="form-group">
            <label for="price">Price</label>
            <input type="number" name="price" id="price" placeholder="Enter the price of the product" class="form-control">
        </div>
        <div class="form-group">
            <input type="file" name="product_photo" id="" >
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        {{ csrf_field() }}
    </form>
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
@endsection
