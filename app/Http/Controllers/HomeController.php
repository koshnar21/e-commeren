<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\facades\auth;
use App\Models\user;

class HomeController extends Controller
{
    public function redirect(){
        $usertype=auth::user()->usertype;
        if($usertype=='1'){
            return view('admin.home');
        }
        else{
            return view('dashboard');
        }
    }
}
