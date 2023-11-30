@extends('back-end.master')

@section('title')
    Edit Form
@endsection

@section('content')
    <div class="row">
        <div class="col-xl-6 mx-auto">

            <div class="card">
                <div class="card-body">
                    <div class="border p-3 rounded">
                        <h6 class="mb-0 text-uppercase">Update Product</h6>
                        <hr/>
                        <form action="{{ route('products.update', $product->id) }}" method="post" class="row g-3">
                            @csrf
                            @method('PUT')

                            <div class="mb-3">
                                <label class="form-label">Product Name</label>
                                <input type="text" name="name" value="{{$product->name}}" class="form-control" placeholder="Enter Name">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Product Quantity</label>
                                <input type="number" name="quantity" value="{{$product->quantity}}" class="form-control" placeholder="Enter Product Quantity Name">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Product Price</label>
                                <input type="text" name="price" value="{{$product->price}}" class="form-control" placeholder="Enter Product Price">
                            </div>

                            <div class="col-12">
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary">Update Info</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
