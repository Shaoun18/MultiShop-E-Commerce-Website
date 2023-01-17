<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    public function index(){
        return view('Admin.subcategory.index');
    }
    public function manage(){
        return view('Admin.subcategory.manage');
    }
}
