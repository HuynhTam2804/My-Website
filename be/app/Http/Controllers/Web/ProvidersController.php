<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Providers;

class ProvidersController extends Controller
{
    public function Add(){
        $PVD = Providers::all();
        return view('provider.add',compact('$PVD'));
    }

    public function AddHandler(Request $re){
        $PVD = new Providers();
        $PVD->name = $re->name;
        $PVD->address = $re->address;
        $PVD->phone_number = $re->phone_number;
        $PVD->email = $re->email;
        $PVD->description = $re->description;
        $PVD->save();
        return redirect()->route('provider.list')->with('alert','Add provider successfuly');
    }

    public function List(){
        $PVD = Providers::all();
        return view('provider.list',compact('PVD'));
    }

    public function Edit($id){
        $PVD = Providers::find($id);
        if(empty($PVD)){
            return "Providers doesn't exist !!!";
        }
        return view('provider.edit',compact('PVD'));
    }

    public function EditHandler(Request $re, $id){
        $PVD = Providers::find($id);
        if(empty($PVD)){
            return "Providers doesn't exist !!!";
        }
        $PVD->name = $re->name;
        $PVD->address = $re->address;
        $PVD->phone_number = $re->phone_number;
        $PVD->email = $re->email;
        $PVD->description = $re->description;
        $PVD->save();
        return redirect()->route('provider.list')->with('alert','Update provider successfuly');
    }
    
    public function Delete($id)
    {
        $PVD = Providers::find($id);
        if(empty($PVD))
        {
            return "Providers doesn't exist !!!";
        }
        $PVD->delete();
        return redirect()->route('provider.list')->with('alert','Delete provider successfuly');
    }
}
