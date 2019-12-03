<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class RouteController extends Controller
{
 
    public function LogInPage( )
    {
            return view('log');
           // return view('logini');
    }

    /*
    public function RegisterPage(){

        return "register page";
    }
      */

}