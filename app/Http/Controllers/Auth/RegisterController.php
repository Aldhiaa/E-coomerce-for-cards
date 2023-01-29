<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\RegisterRequest;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function register()
    {
        return view('register');
    }

    public function submitRegister(RegisterRequest $request)
    { 
        $data = $request->validated();      
        // Encrypt the password
        $data['password'] = Hash::make($request->password);

        $user = User::create($data);

        event(new Registered($user));

        // Login the user;
        auth()->login($user);

        return redirect()->route('index')->withSuccess('تم تسجيل الدخول بنجاح');
    } 
}
 