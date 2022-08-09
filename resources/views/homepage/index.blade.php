@extends('homepage.layout')

@section('main-content')
<form method="post">
<div class="zigzag-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="latest-product">
                        <h2 class="section-title">Latest Products</h2>
                        <div class="product-carousel">
                            @foreach ($home as $key=>$value)
                            <div class="single-product">
                                <div class="product-f-image">
                                    <img src="{{ asset('image/product/'.$value->image) }}" alt="" border=5 height=243px width=195px>
                                    
                                    <div class="product-hover">
                                        <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                        <a href="{{ asset('homepage/detail/'. $value->id) }}" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                    </div>
                                </div>
                                
                                <h2>{{ $value->name }}</h2>

                                <div class="product-carousel-price">
                                    <ins>{{ $value->price }}$</ins> 
                                </div>                                 
                            </div>
                            @endforeach                      
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
</form>
@endsection