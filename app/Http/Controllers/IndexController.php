<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class IndexController extends Controller
{
    public function index()
    {
        $home = Product::all();
        return view('homepage.index', compact("home"));
    }

    public function shoppage()
    {
        $home = Product::all();
        return view('homepage.shoppage', compact("home"));
    }

    public function getDetail($id){
        $data['products']=Product::find($id);
        return view('homepage.detail',$data);
    }

    public function postDetail($id){
        $products=Product::find($id);
        $products->name;
        $products->description;
        $products->price;
        $products->image;
        $products->category_id = $request->category;
        return redirect()->route('homepage.detail');
    }

    public function contact(){
        return view('homepage.contact');
    }
}
