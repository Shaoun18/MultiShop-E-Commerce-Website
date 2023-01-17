<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    private $category;

    public function index(){
        return view('Admin.category.index');
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
