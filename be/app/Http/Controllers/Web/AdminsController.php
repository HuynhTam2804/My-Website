<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Admins;
use App\Models\Status;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminsController extends Controller
{
    public function dashBoard()
    {
        return view('dashboard');
    }

    public function login()
    {
        return view('login');
    }

    public function loginHandle(Request $req)
    {
        if (Auth::attempt(['username' => $req->username, 'password' => $req->password])) {
            $ad = Auth::user();
            if ($ad) {
                if ($ad['status_id'] == 2) {
                    return redirect()->route('admins.login')->with('alert', 'This account has been locked !!');
                } else {
                    return redirect()->route('dashboard.index');
                    // return view('dashboard');
                }
            }
        }
        return redirect()->route('admins.login')->with('alert', 'Access denied!');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('admins.login');
    }

    public function index()
    {
        $listAdmins = Admins::all();
        $status = Status::all();
        return view('admins.index', compact('listAdmins', 'status'));
    }

    public function search(Request $req)
    {
        $keyword = $req->input('data');
        // dd($keyword);
        $listAdmins = Admins::where('username', 'like', "%$keyword%")->get();
        // dd($listAdmins);
        return view('admins/index', compact('listAdmins'));
    }

    // public function create()
    // {
    //     return view('admins.create');
    // }

    public function create(Request $req)
    {
        $admin = new Admins();

        $admin->username = $req->username;
        $admin->fullname = $req->fullname;

        $admin->email = $req->email;
        $admin->password = $req->password;

        $admin->address = $req->address;
        $admin->phone_number = $req->phone_number;

        $admin->status_id = 1;
        $admin->save();

        $listAdmins = Admins::all();

        // return redirect()->route('admins.index')->with('alert', 'Create account successfully');
        return view('admins.search', compact('listAdmins'));
    }


    public function update($id)
    {
        $admin = Admins::find($id);
        return response()->json(['data' => $admin]);
    }

    public function updateHandle(Request $req, $id)
    {

        $admin = Admins::find($id);

        if (empty($admin)) {
            return redirect()->route('admins.index')->with('alert', "Account doesn't exist!!");
        }

        $admin->username = $req->username;
        $admin->fullname = $req->fullname;

        $admin->email = $req->email;
        $admin->password = Hash::make($req->password);

        $admin->address = $req->address;
        $admin->phone_number = $req->phone_number;

        $admin->status_id = $req->status_id;
        $admin->save();

        $listAdmins = Admins::all();
        $status = Status::all();

        return view('admins.search', compact('listAdmins', 'status'));
        // return redirect()->route('admins.index')->with('alert', 'Update account successfully');
    }

    public function delete($id)
    {
        $admin = Admins::find($id);

        if ($admin->status_id == 2) {
            return redirect()->route('admins.index')->with('alert', 'Account already locked !!');
        }

        $admin->status_id = 2;
        $admin->save();

        return redirect()->route('admins.index')->with('alert', 'Lock account successfully');
    }
}
