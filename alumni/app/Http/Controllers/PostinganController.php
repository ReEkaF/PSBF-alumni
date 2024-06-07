<?php

namespace App\Http\Controllers;

use App\Models\Postingan;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\PostinganRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class PostinganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $postingans = Postingan::paginate();

        return view('postingan.index', compact('postingans'))
            ->with('i', ($request->input('page', 1) - 1) * $postingans->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $postingan = new Postingan();

        return view('postingan.create', compact('postingan'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PostinganRequest $request): RedirectResponse
    {
        Postingan::create($request->validated());

        return Redirect::route('postingans.index')
            ->with('success', 'Postingan created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $postingan = Postingan::find($id);

        return view('postingan.show', compact('postingan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $postingan = Postingan::find($id);

        return view('postingan.edit', compact('postingan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PostinganRequest $request, Postingan $postingan): RedirectResponse
    {
        $postingan->update($request->validated());

        return Redirect::route('postingans.index')
            ->with('success', 'Postingan updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Postingan::find($id)->delete();

        return Redirect::route('postingans.index')
            ->with('success', 'Postingan deleted successfully');
    }
}
