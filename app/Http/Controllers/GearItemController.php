<?php

namespace App\Http\Controllers;

use App\Gearitem;
use Illuminate\Http\Request;

class GearItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //get all the data from the database
        $gearitems = Gearitem::all();

        //returning everything to the view
        return view('gearitem', compact('gearitems'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('gearitemcreate');
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

        $gearitem = new Gearitem ();

        $gearitem->name = $request->name;
        $gearitem->gearstats = $request->gearstats;
        $gearitem->category = $request->category;
        $gearitem->gearset = $request->gearset;
        $gearitem->attribute = $request->attribute;
        $gearitem->guidenumber = $request->guidenumber;
        $gearitem->save();

        return redirect()->route('gearitems.index')->with('message', 'Gearitem aangemaakt');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Gearitem  $gearitem
     * @return \Illuminate\Http\Response
     */
    public function show(Gearitem $gearitem)
    {
        //
        return view('gearitemshow', compact('gearitem'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Gearitem  $gearitem
     * @return \Illuminate\Http\Response
     */
    public function edit(Gearitem $gearitem)
    {
        //
        return view('gearitemedit', compact('gearitem'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Gearitem  $gearitem
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gearitem $gearitem)
    {
        //
        $gearitem->name = $request->name;
        $gearitem->gearstats = $request->gearstats;
        $gearitem->category = $request->category;
        $gearitem->gearset = $request->gearset;
        $gearitem->attribute = $request->attribute;
        $gearitem->guidenumber = $request->guidenumber;
        $gearitem->save();

        return redirect()->route('gearitems.index')->with('message', 'Gearitem updated');
    }


    public function delete(Gearitem $gearitem)
    {
        return view('gearitemdelete', compact('gearitem'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Gearitem  $gearitem
     * @return \Illuminate\Http\Response
     */

    public function destroy(Gearitem $gearitem)
    {
        //
        $gearitem->delete();
        return redirect()->route('gearitems.index')->with('message', 'Succesfully deleted');
    }
}
