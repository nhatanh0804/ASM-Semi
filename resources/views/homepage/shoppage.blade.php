@extends('homepage.layout')

@section('main-content')


<div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                @foreach ($home as $key=>$value)
                <div class="col-md-3 col-sm-6">
                    

                    <div class="single-shop-product">
                      
                        <div class="product-upper">
                            <img src="{{ asset('image/product/'.$value->image) }}" alt="" border=5 height=243px width=195px>
                        </div>
                        <h2>{{ $value->name }}</h2>
                        <div class="product-carousel-price">
                            <ins>{{ $value->price }}$</ins> 
                        </div>  
                        
                        <div class="product-option-shop">
                            <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="70" rel="nofollow" href="/canvas/shop/?add-to-cart=70">Add to cart</a>
                        </div>                       
                     
                    </div>
                    
                     
                </div>
                @endforeach
                </div>
            </div>
            </div>
        </div>
    </div>
@endsection