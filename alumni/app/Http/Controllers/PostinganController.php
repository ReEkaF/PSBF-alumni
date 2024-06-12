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
        $postingan = Postingan::paginate();

        return view('postingan.index', compact('postingan'))
            ->with('i', ($request->input('page', 1) - 1) * $postingan->perPage());
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
        $validatedData = $request->validated();

        // Periksa apakah ada file gambar yang diunggah
        if ($request->file("gambar")) {
            $validatedData["gambar"] = $request->file("gambar")->store("postingan-img");
        }
 
        // Simpan data ke dalam tabel 'postingan'
        Postingan::create($validatedData);

        // Redirect ke halaman index dengan pesan sukses
        return Redirect::route('post')
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

        return Redirect::route('postingan.index')
            ->with('success', 'Postingan updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Postingan::find($id)->delete();

        return Redirect::route('postingan.index')
            ->with('success', 'Postingan deleted successfully');
    }
}
