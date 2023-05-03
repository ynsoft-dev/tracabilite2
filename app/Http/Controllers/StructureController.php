<?php

namespace App\Http\Controllers;

use App\Models\Structure;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateStructureRequest;
use App\Models\Line;

class StructureController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('structures.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


        // return redirect()->route('structure.index')
        //     ->with('success', 'Structure créée avec succès.');

        return 'Structure stored successfully!';
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $structure = Structure::find($id);
        return view('structure.show')->with('structure',$structure);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Structure $structure)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateStructureRequest $request, Structure $structure)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Structure $structure)
    {
        //
    }
}
