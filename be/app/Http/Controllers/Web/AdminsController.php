<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AdminsController extends Controller
{
    public function DashBoard()
    {
        return view('dashboard');
    }

    public function Login()
    {
        return view('login');
    }

    public function LoginHandler(Request $re)
    {
        
        if(Auth::attempt(['username'=>$re->username,'password'=>$re->password]))
        {
            return redirect()->route('dashboard');
        }
        return redirect()->route('login')->with('alert'," You didn't fill in the blanks. Please fill them out");
    }

    public function Logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
