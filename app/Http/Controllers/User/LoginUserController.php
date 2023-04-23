<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

use App\Models\LoginUser;

use Illuminate\Http\Request;

class LoginUserController extends Controller
{
    public function index()
    {
        return view('UserSide.login');


    }
    public function LoginPost(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();
    
        $request->session()->regenerate();
    
        $email=$request->email;
        $password=$request->password;
    
        if(Auth::attempt(['email'=>$email,'password'=>$password]))
        {
            $user = Auth::user();
            
            if ($user->is_admin == 1) {
                return redirect()->route('dashboard');
            } else {
                return redirect()->route('home');
            }
        }
    }
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('home');
    }
}