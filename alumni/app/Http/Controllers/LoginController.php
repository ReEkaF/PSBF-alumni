<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class LoginController extends Controller
{
    public function index(): View
    {
        return view('login.index');
    }

    public function postLogin(Request $request): RedirectResponse
    {
        $credentials = $request->only('username', 'password');

        if (auth()->guard('web-admin')->attempt($credentials)) {
            // If authentication is successful for web-admin, store user data in session
            $request->session()->regenerate();
            $request->session()->put('username', auth()->guard('web-admin')->user()->username);
            return redirect()->intended('admin/home');
        } elseif (auth()->guard('web-lulusan')->attempt($credentials)) {
            // If authentication is successful for web-lulusan, store user data in session
            $request->session()->regenerate();
            $request->session()->put('username', $credentials['username']);


            return redirect()->route('profile', ['id' => $credentials['username']]);
        } else {
            // If authentication fails
            return back()->withErrors([
                'username' => 'Login Gagal'
            ])->onlyInput('username');
        }
    }

    public function getLogout(Request $request): RedirectResponse
    {
        $request->session()->flush();
        auth()->guard('web-admin')->logout();
        auth()->guard('web-lulusan')->logout();
        return redirect()->guest('login');
    }
}

