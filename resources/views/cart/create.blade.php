@extends('layout')

@section('title', 'Products')

@section('content')

<div class="container products">

<div class="row">

@foreach($products as $product)

<div class="col-xs-18 col-sm-6 col-md-3">

<div class="thumbnail">

<img src="{{ asset('image/product/'.$products->image) }}" width="200" height="100">

<div class="caption">

<h4>{{ $products->name }}</h4>

<p>{{$products->description}}</p>

<p><strong>Price: </strong> {{ $products->price }}$</p>

<p class="btn-holder"><a href="{{ route('add-to-cart/'.$products->id) }}" class="btn btn-warning btn-block text-center" role="button">Add to cart</a> </p>

</div>

</div>

</div>

@endforeach

</div><!-- End row -->

</div>

@endsection