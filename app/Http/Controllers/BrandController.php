<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function index(){
        return view('Admin.brand.index');
    }

    public function create(Request $request){
        $request->validate([
            'name' => 'required'
        ]);
        Brand::newBrand($request);
        return redirect()->back()->with('message', 'Brand Info Create Successfully');
    }

    public function manage(){
        return view('Admin.brand.manage', ['brands' => Brand::all()]);
    }

    public function edit($id){
        return view('Admin.brand.edit', ['brands' => Brand::find($id)]);
    }

    public function update(Request $request, $id){
        Brand::UpdateBrand($request, $id);
        return redirect('/manage-brand')->with('message','Brand Info Update Successfully');
    }

    public function delete($id){
        Brand::deleteBrand($id);
        return redirect('/manage-brand')->with('message','Brand Info delete Successfully');
    }
}
