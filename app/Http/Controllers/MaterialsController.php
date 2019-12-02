<?php

namespace App\Http\Controllers;

use App\Gearitem;
use App\Material;
use Illuminate\Http\Request;

class MaterialsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //get all the data from the database
        $materials = Material::all();

        //returning everything to the view
        return view('material', compact('materials'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('materialcreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //$validated = $request->validated();

        $material = new Material ();

        $material->name = $request->name;
        $material->description = $request->description;
        $material->save();

        return redirect()->route('materials.index')->with('message', 'Material aangemaakt');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Gearitem  $gearitem
     * @return \Illuminate\Http\Response
     */
    public function show(Material $material)
    {
        //
        return view('materialshow', compact('material'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Gearitem  $gearitem
     * @return \Illuminate\Http\Response
     */
    public function edit(Material $material)
    {
        //
        return view('materialedit', compact('material'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Gearitem  $gearitem
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Material $material)
    {
        //
        $material->name = $request->name;
        $material->description = $request->description;
        $material->save();

        return redirect()->route('materials.index')->with('message', 'Material updated');
    }


    public function delete(Material $material)
    {
        return view('materialdelete', compact('material'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Gearitem  $gearitem
     * @return \Illuminate\Http\Response
     */

    public function destroy(Material $material)
    {
        //
        $material->delete();
        return redirect()->route('materials.index')->with('message', 'Succesfully deleted');
    }
}
