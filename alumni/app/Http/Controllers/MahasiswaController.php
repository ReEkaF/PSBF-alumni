<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\MahasiswaRequest;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $mahasiswas = Mahasiswa::paginate();

        return view('mahasiswa.index', compact('mahasiswas'))
            ->with('i', ($request->input('page', 1) - 1) * $mahasiswas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $mahasiswa = new Mahasiswa();

        return view('mahasiswa.create', compact('mahasiswa'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(MahasiswaRequest $request): RedirectResponse
    {
        Mahasiswa::create($request->validated());

        return Redirect::route('mahasiswa.index')
            ->with('success', 'Mahasiswa created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $mahasiswa = Mahasiswa::find($id);
        // dd($mahasiswa);

        return view('mahasiswa.show', compact('mahasiswa'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $mahasiswa = Mahasiswa::find($id);

        return view('mahasiswa.edit', compact('mahasiswa'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(MahasiswaRequest $request, Mahasiswa $mahasiswa): RedirectResponse
    {
        $mahasiswa->update($request->validated());

        return Redirect::route('mahasiswa.index')
            ->with('success', 'Mahasiswa updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Mahasiswa::find($id)->delete();

        return Redirect::route('mahasiswa.index')
            ->with('success', 'Mahasiswa deleted successfully');
    }

    public function profile()
    {
        return view('mahasiswa.profile');
    }

    public function showProfile(Request $request)
    {
        // $user = Session::get('user');
        // dd($user);
        // $mahasiswa = Mahasiswa::find($user->id);
        // dd($mahasiswa);
        echo 'aaa';
        // return view('mahasiswa.show', compact('mahasiswa'));
    }
}
