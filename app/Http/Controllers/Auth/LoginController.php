<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
// use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{   
    // use AuthenticatesUsers;
    protected $redirectTo = RouteServiceProvider::HOME;
    public function login()
    {
        return view('login');
    }

    public function submitLogin(Request $request)
    {
        $credentials  = $request->only(['email', 'password']);

        if(!auth()->attempt($credentials)){
            return redirect()->back()->withError(__('auth.failed'));
        }

        if (auth()->user()->type == 'admin') {
            return redirect()->route('admin.home');
        }else if (auth()->user()->type == 'provider') {
            return redirect()->route('index');
        }else{
            return redirect()->route('index');
        }

        return redirect()->route('index')->withSuccess('تم تسجيل الدخول بنجاح');
    } 

    public function logout()
    {
        auth()->logout();
        session()->invalidate();
        return back()->withSucces('تم تسجيل الخروج بنجاح');
    }
}
