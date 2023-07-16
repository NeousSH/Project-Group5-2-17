@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-body"><h2>Create Products</h2>
                <div class="w-100">
                    <form action="{{route('admin_product.store')}}" method="POST"
                          enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="name">Product name</label>
                            <input type="text" class="form-control" id="name" name="name"
                                   placeholder="Enter Product name">
                        </div>
                        <div class="form-group">
                            <label for="price">Product price</label>
                            <input type="number" class="form-control" id="price" name="price"
                                   placeholder="Enter Product price">
                        </div>
                        <div class="form-group">
                            <label for="img">Product image</label>
                            <input class="form-control" type="file" id="img" name="img">
                        </div>
                        <button type="submit" class="btn btn-primary mt-4 ">Submit</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection
