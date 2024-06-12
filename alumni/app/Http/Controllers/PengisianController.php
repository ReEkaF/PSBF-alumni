<?php

namespace App\Http\Controllers;

use App\Http\Requests\HasilKuisionerRequest;
use App\Models\HasilKuisioner;
use Illuminate\Http\Request;
use App\Models\Kuisioner;
use App\Models\Lulusan;
use App\Models\MainKuisioner;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
class PengisianController extends Controller
{
    public function index(): View
    {
        $kuisioner = Kuisioner::all();
        // $lulusan = Lulusan::find($id);
        return view('kuisioner', compact('kuisioner'));
    }
    public function main_kuisioner():View
    {
        $main_kuisioner = MainKuisioner::all();
        return view('main_kuisioner', compact('main_kuisioner'));
    }
    public function masukan(HasilKuisionerRequest $request ): RedirectResponse
    {
        HasilKuisioner::create($request->validated());

        return Redirect::route('kuisioner')
            ->with('success', 'Kuisioner created successfully.');
    }
}
