<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashBoardController extends Controller
{
    public function index(){
        return view('Admin.home.home');
    }
}
