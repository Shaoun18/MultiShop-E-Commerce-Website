<?php

namespace App\Http\Controllers;

use App\Models\Unit;
use Illuminate\Http\Request;

class UnitController extends Controller
{
    public function index(){
        return view('Admin.unit.index');
    }

    public function create(Request $request){
        $request->validate([
            'name' => 'required'
        ]);
        Unit::newUnit($request);
        return redirect()->back()->with('message', 'Unit Info Create Successfully');
    }

    public function manage(){
        return view('Admin.unit.manage',['unit' => Unit::all()]);
    }

    public function edit($id){
        return view('Admin.unit.edit', ['unit' => Unit::find($id)]);
    }

    public function update(Request $request, $id){
        Unit::UpdateUnit($request, $id);
        return redirect('/manage-unit')->with('message','Unit Info Update Successfully');
    }

    public function delete($id){
        Unit::deleteUnit($id);
        return redirect('/manage-unit')->with('message','Unit Info delete Successfully');
    }
}
