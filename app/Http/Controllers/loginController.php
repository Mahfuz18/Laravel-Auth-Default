<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;

class loginController extends Controller
{
    function showLoginPage()
    {
    	return view('pages.login');
    }

    function login(Request $request)
    {
    	$email = $request->email;
    	$password =$request->password;

    	if (Auth::attempt(['email' => $email, 'password' => $password])) {
    		return redirect('dashboard');
    	}
    	else
    		echo "Oppssss error";
	
    }

    function logout()
    {
    	Session::flush();

    	return redirect('login');
    }
}
