<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {

        $categories=Category::all();
       // return view('admin.listCategory', ['categories' => $categories]);
        return view('category.listCategory', compact("categories"));
    }

    public function getCreate()
    {
        return view('category.createCategory');
    }
    //Hàm store để thêm dữ liệu
    public function postCreate(Request $request)
    {

        $category = new Category;
        $category->category_name = $request->category_name;
        $category->category_description = $request->category_description;
        $category->save();
      
       return redirect()->route('category.index')->with('success', 'Category created successfully.');;

    }
    public function getEditCate($category_id)
    {
       $data['cate'] = Category::find($category_id);
       return view('category.editCategory',$data);
    }
    public function postEditCate(Request $request,$category_id)
    {
        $category = Category::find($category_id);
        $category->category_name = $request->category_name;
        $category->category_description = $request->category_description;
        $category->save();
        return redirect()->route('category.index');
    }
    public function delete($id)
    {
        $category = Category::find($id);
        $category->delete();
        return back();
    }

}

