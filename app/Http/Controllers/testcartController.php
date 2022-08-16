<?php

namespace App\Http\Controllers;

use App\Models\Product;

use Illuminate\Http\Request;
use Session;
session_start();

class testcartController extends Controller
{
    public function cart(){
        return view('cart.view');
    }

    public function addCart($id){
        $products=Product::find($id);
        if(!$products){
            abort(404);
        }
        $cart = session()->get('cart');

// if cart is empty then this the first product

if(!$cart) {

$cart = [

$id => [

"name" => $products->name,

"quantity" => 1,

"price" => $products->price,

"photo" => $products->image

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

"name" => $products->name,

"quantity" => 1,

"price" => $products->price,

"photo" => $products->image

];

session()->put('cart', $cart);

return view('cart', ['msg' => 'Product added to cart successfully!']);

//return redirect()->back()->with('success', 'Product added to cart successfully!');
        
    }
}
