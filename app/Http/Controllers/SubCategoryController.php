<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    public function index(){
        return view('Admin.subcategory.index',['categories' => Category::all()]);
    }
    public function manage(){
        return view('Admin.subcategory.manage');
    }
}
