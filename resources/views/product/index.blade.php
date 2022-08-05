@extends('layout.admin')
 
@section('main-content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Product Management</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('products.create') }}"> Create New Product</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Price</th>
            <th>Category</th>
            <th>Image</th>
            <th>Details</th>
            <th width="280px">Action</th>
        </tr>
        @foreach($products as $key => $products)
        <tr>
            <td>{{$key+1}}</td>
            <td>{{ $products->name }}</td>
            <td>{{ $products->price }}<a>$</a></td>
            <td>{{ $products->category->category_name }}</td>
            <td><img src="{{ asset('image/product/'.$products->image) }}" alt="" border=3 height=150 width=200></td>
            <td>{{ $products->description }}</td>
            <td>
                <form action="{{ route('products.destroy',$products->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('products.show',$products->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('products.edit',$products->id) }}">Edit</a>
   
                    <a class="btn btn-primary" href="{{ route('products.destroy',$products->id) }}">Delete</a>
   
                </form>
            </td>
        </tr>
        @endforeach
    </table>
      
@endsection
