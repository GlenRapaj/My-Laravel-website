<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input as input;

class MyAuthController extends Controller
{
 
    public function authenticate( Request $request )
    {
       // $credentials = $request->only('username', 'password');

       $username = $request->input('username');
      // $username =  input::get('username'); 
       $password = $request->input('password');

      $credentials = [
        'username' => $username,
        'password' => $password,
    ];
      
        if ( Auth::attempt( $credentials )  ) {
            // Authentication passed...
            echo 'if' ;
           
            return redirect()->intended('dashboard');
         
        }else{
           
           // return redirect('auth.login');
           
            echo   ' else ';
             echo   '  ' ;
           return  $credentials;
        }

    }

    public function LogOut(){

        Auth::logout();
         return redirect('/');
        
    }



}