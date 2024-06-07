<?php

namespace App\Http\Controllers;

use App\Models\SosialMedia;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\SosialMediaRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class SosialMediaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $sosialMedia = SosialMedia::paginate();

        return view('sosial-media.index', compact('sosialMedia'))
            ->with('i', ($request->input('page', 1) - 1) * $sosialMedia->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $sosialMedia = new SosialMedia();

        return view('sosial-media.create', compact('sosialMedia'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SosialMediaRequest $request): RedirectResponse
    {
        SosialMedia::create($request->validated());

        return Redirect::route('sosial-media.index')
            ->with('success', 'SosialMedia created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $sosialMedia = SosialMedia::find($id);

        return view('sosial-media.show', compact('sosialMedia'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $sosialMedia = SosialMedia::find($id);

        return view('sosial-media.edit', compact('sosialMedia'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SosialMediaRequest $request, SosialMedia $sosialMedia): RedirectResponse
    {
        $sosialMedia->update($request->validated());

        return Redirect::route('sosial-media.index')
            ->with('success', 'SosialMedia updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        SosialMedia::find($id)->delete();

        return Redirect::route('sosial-media.index')
            ->with('success', 'SosialMedia deleted successfully');
    }
}
