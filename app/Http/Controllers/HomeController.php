<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    //
    public function home(){
        if (Auth::id()) {
            $usertype = Auth()->user()->usertype;
            if ($usertype == 'user') {
                # code...
                return view('/dashboard');
            }
            else if ($usertype == 'admin') {
                # code...
                return view('admin.admin');
            }
            else{
                return redirect()->back();
            }
        }
    }
}
