<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{

    //  no authenticated
//     public function authenticated(Request $request, $user)
// {
//     if ($user->hasRole('user')) {
//         return redirect()->route('user.page');
//     }

//     return redirect()->route('user.page');
// } 

    public function showLogin()
    {
        if (Auth::check()) {
            return redirect('/')->with(['error' => 'Anda Sedang Login!']);
        } else {
            return view('login');
        }
       
    }

    public function actionLogin(Request $request)
    {
        $data = [
            'email' => $request->email,
            'password' => $request->password,
        ];
    //   dd($tes = 1);
        if (Auth::Attempt($data)) {
            return redirect('/')->with(['success' => 'Login Berhasil!!']);
        } else {
            return redirect('/login')->with(['error' => 'Email atau Password Salah!!!']);
        }
    }
    public function actionLogout()
    {
       Auth::logout();
       return redirect('/login')->with(['success' => 'Anda Berhasil Logout!!!']);
    }
}
