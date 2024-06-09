<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Lulusan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index');
    }

    public function postLogin(Request $request):  RedirectResponse
    {
        $credentials = $request->only('username', 'password');
        // dd(auth()->guard('web-admin')->attempt($credentials));
        if (auth()->guard('web-admin')->attempt($credentials)) {
            // If authentication is successful, store user data in session
            $request->session()->regenerate();
            return redirect()->intended('admin/home');
        }elseif(auth()->guard('web-lulusan')->attempt($credentials)){
            $request->session()->regenerate();
            // return redirect()->intended('profile')
            // ->with('username',$credentials['username']);
            // return view('profile', ['username'=>$credentials['username']]);        
            // return redirect()->route('profile')->with('username',$credentials['username']);
            return redirect()->route('profile', ['id' => $credentials['username']]);
        }else{
            return back()->withErrors([
            'username' => 'Login Gagal'
            ])->onlyInput('username');
        }
    }
    public function getLogout(Request $request)
    {
        $request->session()->flush();
        return redirect()->guest('login');
    }
}

// class LoginController extends Controller{
//     public function index()
//     {
//         return view('login.index');
//     }
//     public function postLogin(Request $request): RedirectResponse
//     {
//         $credentials = $request->only('username', 'password');
//         if (!Auth::attempt($credentials)) {
//             return back()->withErrors([
//                 'username' => 'Login Gagal'
//                 ])->onlyInput('username');
//         }
//         else{
//             $request->authenticate();
//             $request->session()->regenerate();
//             $admin =Admin::where('username', '=', $credentials['username'])
//             ->where('password', '=', $credentials['password'])->id_login
//             ->first();
//             $admin = Admin::where('username', $credentials['username'])
//                             ->where('password', $credentials['password'])->user()->id_admin // Ensure the password is hashed if needed
//                             ->first();
//             $lulusan = Lulusan::where('username', $credentials['username'])
//             ->where('password', $credentials['password'])->user()->id_lulusan // Ensure the password is hashed if needed
//             ->first();

//             if ($admin) {
//                 $request->session()->put('user', $admin);
//                 return redirect()->intended(route('home'));
//             } else {
//                 $request->session()->put('user', $lulusan);
//                 return redirect(route('dashboard'));
//             }
//         }
        
//     }
// }