<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class CartController extends Controller
{
    public function addToCart($id)

{

$product = Product::find($id);

if(!$product) {

abort(404);

}

$cart = session()->get('cart');

// if cart is empty then this the first product

if(!$cart) {

$cart = [

$id => [

"name" => $product->name,

"quantity" => 1,

"price" => $product->price,

"photo" => $product->image

]

];

session()->put('cart', $cart);

return view('cart');

//return redirect()->back()->with('success', 'Product added to cart successfully!');

}

// if cart not empty then check if this product exist then increment quantity

if(isset($cart[$id])) {

$cart[$id]['quantity']++;

session()->put('cart', $cart);

return view('cart', ['msg' => 'Product added to cart successfully!']);

//return redirect()->back()->with('success', 'Product added to cart successfully!');

}

// if item not exist in cart then add to cart with quantity = 1

$cart[$id] = [

"name" => $product->name,

"quantity" => 1,

"price" => $product->price,

"photo" => $product->image

];

session()->put('cart', $cart);

return view('cart', ['msg' => 'Product added to cart successfully!']);

//return redirect()->back()->with('success', 'Product added to cart successfully!');

}

public function cart()
{
    return view ('cart');
}
}
