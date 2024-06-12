@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-primary">
                    <h3>Product Edit</h3>
                </div>
                <div class="card-body">
                    <form action="{{url('product/update')}}/{{$products->id}}" method="post">
                        @csrf
                        <input type="text" class="d-none" name="" value="{{$products->id}}">
                        <div class="form-group">
                            <div class="form-label">Product name</div>
                            <input type="text" class="form-control" name="name" value="{{$products->name}}">
                        </div>
                        <div class="form-group">
                            <div class="form-label">Product Quantity</div>
                            <input type="text" class="form-control" name="quantity" value="{{$products->quantity}}">
                        </div>
                        <div class="form-group">
                            <div class="form-label">Product Price</div>
                            <input type="text" class="form-control" name="price" value="{{$products->price}}">
                        </div>
                        <button type="submit" class="btn btn-primary w-100 mt-2">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection