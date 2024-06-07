<?php

namespace App\Http\Controllers;

use App\Models\Pekerjaan;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\PekerjaanRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class PekerjaanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $pekerjaans = Pekerjaan::paginate();

        return view('pekerjaan.index', compact('pekerjaans'))
            ->with('i', ($request->input('page', 1) - 1) * $pekerjaans->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $pekerjaan = new Pekerjaan();

        return view('pekerjaan.create', compact('pekerjaan'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PekerjaanRequest $request): RedirectResponse
    {
        Pekerjaan::create($request->validated());

        return Redirect::route('pekerjaans.index')
            ->with('success', 'Pekerjaan created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $pekerjaan = Pekerjaan::find($id);

        return view('pekerjaan.show', compact('pekerjaan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $pekerjaan = Pekerjaan::find($id);

        return view('pekerjaan.edit', compact('pekerjaan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PekerjaanRequest $request, Pekerjaan $pekerjaan): RedirectResponse
    {
        $pekerjaan->update($request->validated());

        return Redirect::route('pekerjaans.index')
            ->with('success', 'Pekerjaan updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Pekerjaan::find($id)->delete();

        return Redirect::route('pekerjaans.index')
            ->with('success', 'Pekerjaan deleted successfully');
    }
}
