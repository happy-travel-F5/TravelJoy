<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use Illuminate\Http\Request;

class DestinationController extends Controller
{
    public function index()
    {
        $destinations = Destination::all();
        return view('destinations', compact('destinations'));
    }


/**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('destinations.create');//
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $destination = Destination::findOrFail($id);
        return view('destinations.detail', compact('destinations'));//
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $destinantion= Destination::findOrFail($id);
        return view('destinations.edit', compact('destinations'));//
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $destinantion= Destination::findOrFail($id);

        $request->validate([
            'title' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'reason' => 'required|string',
        ]);

        $destinantion->update($request->all());
    
    return redirect()->route('destinations.show', ['destinations' => $destino->id])->with('success', 'Destino actualizado exitosamente.');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $destinantion = Destination::findOrFail($id);
        $destinantion->delete();
        return redirect()->route('destinations.index')->with('success', 'Destino eliminado exitosamente.');//
    }
}
