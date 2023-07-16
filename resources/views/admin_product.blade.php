@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <div><h2>Products</h2></div>
                    <div>
                        <a class="btn btn-primary" href="{{route('admin_product.create')}}">Create</a>
                    </div>
                </div>
                <div class="w-100">
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Price</th>
                            <th scope="col">Image</th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($products as $product)
                            <tr>
                                <th scope="row">{{$product->id}}</th>
                                <td>{{$product->name}}</td>
                                <td>{{$product->price}}</td>
                                <td><img src="{{$product->img}}" alt="{{$product->name}}" style="height: 100px"/></td>
                                <td>

                                    <form action="{{ route('admin_product.destroy',$product->id) }}" method="Post">
                                        <a class="btn btn-warning"
                                           href="{{route('admin_product.edit',$product->id)}}">Edit</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger"
                                                onclick="return confirm('Delete {{$product->name}}?')">Delete
                                        </button>
                                    </form>
                                </td>

                            </tr>
                        @endforeach


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
