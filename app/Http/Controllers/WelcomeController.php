<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function welcome()
    {
        return view('welcome');
    }

    public function about()
    {
        return view('about');
    }

    public function users($dept,$username,$id)
    {
        return view('users',compact('dept','username','id'));
    }

    public function usersurl($dept,$username,$id)
    {
        return view('usersurl',compact('dept','username','id'));
    }

    public function contact()
    {
        return view('contact');
    }

}