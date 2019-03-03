<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class LoginController extends Controller
{
    public function getlogin()
    {
    	return view('admin.login');
    }
    public function postlogin(Request $request)
    {
    	$email = $request->email;  
        $password = $request->password;
            if (Auth::attempt(['email' => $email, 'password' => $password, 'level' => 1])){
                return redirect('admin/home');
            } elseif (Auth::attempt(['email' => $email, 'password' => $password, 'level' => 2])){
                return redirect('admin/home');
            } else {

            	return redirect('admin/login')->with('status', __('setting.login_fail'));
            }      
    }
}
