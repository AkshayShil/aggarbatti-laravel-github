@extends('basetemplate')

@section('body')
<div class="form-view">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Product Name</th>
                <th scope="col">Product Type</th>
                <th scope="col">Product Price</th>
                <th scope="col">Product Image</th>
                <th scope="col">Options</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $item => $value)
            <tr>
                <td>{{$value['id']}}</td>
                <td>{{ $value['product_name'] }}</td>
                <td>{{$value['type']}}</td>
                <td>{{$value['price']}}</td>
                <td><img src="{{$value['url']}}" alt="" srcset="" style="max-height:120px"></td>
                <td>
                    <div class="buttons">
                        <a href="/admin/product/update/{{$value['id']}}" class="btn btn-warning">Update this product</a>
                        <a href="/admin/product/delete/{{$value['id']}}" class="btn btn-danger">Delete this product</a>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
