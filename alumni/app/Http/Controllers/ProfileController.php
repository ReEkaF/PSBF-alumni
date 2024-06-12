<?php

namespace App\Http\Controllers;
use App\Models\Lulusan;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\LulusanRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ProfileController extends Controller
{
    public function index():View
    {
        $username = session('username');
        $lulusan = Lulusan::find($username);

        return view('profile', compact('lulusan', 'username'));
    }

}
