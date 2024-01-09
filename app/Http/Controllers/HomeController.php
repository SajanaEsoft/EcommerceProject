<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class HomeController extends Controller
{
    
    public function redirect(){
        //in here firsty check the userType
        $userType = Auth::user()->user_type; //in here getting usertype data in user table

        if($userType == '1')
        {
            return view('admin.home'); //this one need to create
        }

        else
        {
            // return view('dashboard'); //this one created by jetstream
            return view('home.userPage');
        }
    }


    public function index()
    {
        return view('home.userPage');
    }
    
}
