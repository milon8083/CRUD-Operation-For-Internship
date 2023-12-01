
@extends('back-end.master')

@section('title')
    Create Form
@endsection

@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col-md-8 offset-md-2">

                <!--For Validation Part Start-->
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <!--For Validation Part End-->

                <div class="card">
                    <div class="card-header">Create Form</div>
                    <div class="card-body">
                        <form action="{{ route('products.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Product Name</label>
                                <input type="text" name="name" class="form-control" placeholder="Enter Name">

                                @error('name')
                                    <p class="text-danger">* {{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Product Quantity</label>
                                <input type="number" name="quantity" class="form-control" placeholder="Enter Product Quantity Name">

                                @error('quantity')
                                    <p class="text-danger">* {{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Product Price</label>
                                <input type="text" name="price" class="form-control" placeholder="Enter Product Price">

                                @error('price')
                                    <p class="text-danger">* {{ $message }}</p>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

