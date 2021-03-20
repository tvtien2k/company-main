<?php

namespace App\Http\Controllers;

use App\Profile;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    function getLogin()
    {
        return view('login');
    }

    function getSignup()
    {
        return view('signup');
    }

    function postSignup(Request $request)
    {
        if ($request->password != $request->repassword) {
            return back()->withInput();
        }
        $user = new User();
        $user->name = $request->name . $request->lastname;
        $user->email = $request->email;
        $user->phone = $request->phonenummber;
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect('login');
    }

    function postLogin(Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect('dashboard/management');
        }
        return redirect('login');
    }

    function getHome()
    {
        return view('management');
    }
}
