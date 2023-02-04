<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function manage(){
        return view('Admin.user.manage',['users' => User::all()]);
    }

    public function delete($id){

    }

}
