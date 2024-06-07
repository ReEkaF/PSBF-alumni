<?php

namespace App\Http\Controllers;

use App\Models\HasilKuisioner;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\HasilKuisionerRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class HasilKuisionerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $hasilKuisioners = HasilKuisioner::paginate();

        return view('hasil-kuisioner.index', compact('hasilKuisioners'))
            ->with('i', ($request->input('page', 1) - 1) * $hasilKuisioners->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $hasilKuisioner = new HasilKuisioner();

        return view('hasil-kuisioner.create', compact('hasilKuisioner'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(HasilKuisionerRequest $request): RedirectResponse
    {
        HasilKuisioner::create($request->validated());

        return Redirect::route('hasil-kuisioners.index')
            ->with('success', 'HasilKuisioner created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $hasilKuisioner = HasilKuisioner::find($id);

        return view('hasil-kuisioner.show', compact('hasilKuisioner'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $hasilKuisioner = HasilKuisioner::find($id);

        return view('hasil-kuisioner.edit', compact('hasilKuisioner'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(HasilKuisionerRequest $request, HasilKuisioner $hasilKuisioner): RedirectResponse
    {
        $hasilKuisioner->update($request->validated());

        return Redirect::route('hasil-kuisioners.index')
            ->with('success', 'HasilKuisioner updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        HasilKuisioner::find($id)->delete();

        return Redirect::route('hasil-kuisioners.index')
            ->with('success', 'HasilKuisioner deleted successfully');
    }
}
