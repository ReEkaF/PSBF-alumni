<?php

namespace App\Http\Controllers;

use App\Models\Lulusan;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\LulusanRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class LulusanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $lulusan = Lulusan::paginate();

        return view('lulusan.index', compact('lulusan'))
            ->with('i', ($request->input('page', 1) - 1) * $lulusan->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $lulusan = new Lulusan();

        return view('lulusan.create', compact('lulusan'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(LulusanRequest $request): RedirectResponse
    {
        Lulusan::create($request->validated());

        return Redirect::route('lulusan.index')
            ->with('success', 'Lulusan created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $lulusan = Lulusan::find($id);

        return view('lulusan.show', compact('lulusan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $lulusan = Lulusan::find($id);

        return view('lulusan.edit', compact('lulusan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(LulusanRequest $request, Lulusan $lulusan): RedirectResponse
    {
        $lulusan->update($request->validated());

        return Redirect::route('lulusan.index')
            ->with('success', 'Lulusan updated successfully');
    }

}
