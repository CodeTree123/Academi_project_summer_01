@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-primary">
                    <h3>Product Dashboard</h3>
                </div>
                <div class="card-body">
                    <form action="{{route('product.post')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <div class="form-label">Product name</div>
                            <input type="text" class="form-control" name="name" placeholder="Product name">
                        </div>
                        <div class="form-group">
                            <div class="form-label">Product Quantity</div>
                            <input type="text" class="form-control" name="quantity" placeholder="Product Quantity">
                        </div>
                        <div class="form-group">
                            <div class="form-label">Product Price</div>
                            <input type="text" class="form-control" name="price" placeholder="Product Price">
                        </div>
                        <button type="submit" class="btn btn-primary w-100 mt-2">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection