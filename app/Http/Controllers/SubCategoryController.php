<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    public function index(){
        return view('Admin.subcategory.index',['categories' => Category::all()]);
    }

    public function create(Request $request){
        SubCategory::newsubCategory($request);
        return redirect()->back()->with('message', 'SubCategory info create successfully');
    }

    public function manage(){
        return view('Admin.subcategory.manage', ['subcategories' => SubCategory::all()]);
    }

    public function edit($id){
        return view('Admin.subcategory.edit',['subcategories' => SubCategory::find($id)]);
    }

    public function update(Request $request, $id){
        SubCategory::updatesubcategory($request, $id);
        return redirect('/manage-subcategory')->with('message', 'SubCategory info update successfully');
    }

    public function delete($id){
        SubCategory::deletesubcategory($id);
        return redirect('/manage-subcategory')->with('message', 'SubCategory info delete successfully');
    }
}
