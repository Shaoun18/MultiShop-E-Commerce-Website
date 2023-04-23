<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\Unit;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    private $category;
    private $subCategories;
    private $brands;
    private $units;
    private $products;
    private $product;


    public function index(){
        return view('Admin.product.index',[
            'categories' => Category::all(),
            'subcategories' => SubCategory::all(),
            'brands' => Brand::all(),
            'units' => Unit::all(),
            ]);
    }

    public function create(Request $request){
        $request->validate([
            'name' => 'required'
        ]);
        Category::newCategory($request);
        return redirect()->back()->with('message', 'Category Info Create Successfully');
    }

    public function manage(){
        return view('Admin.category.manage', ['Categories' => Category::all()]);
    }

    public function edit($id){
        return view('Admin.category.edit', ['Categories' => Category::find($id)]);
    }

    public function update(Request $request, $id){
        Category::UpdateCategory($request, $id);
        return redirect('/manage-category')->with('message','Category Info Update Successfully');
    }

    public function delete($id){
        Category::deleteCategory($id);
        return redirect('/manage-category')->with('message','Category Info delete Successfully');
    }
}
