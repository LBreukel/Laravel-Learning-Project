<?php

namespace App\Http\Controllers;

use App\Craftingitem;
use App\Http\Requests\StoreCookingRequest;
use App\Http\Requests\UpdateCookingRequest;
use Illuminate\Http\Request;

class CookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //get all the data from the database
        $cooking= Craftingitem::all()->where('type_id', '1');

        //returning everything to the view
        return view('cooking', compact('cooking'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('cookingcreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCookingRequest $request)
    {
        //adding a new Cooking Item (using the Model Craftingitems)
        //$validated = $request->validated();
        $cooking = new Craftingitem();

        //attributes
        $cooking->name = $request->name;
        $cooking->attribute = $request->attribute;
        $cooking->category = $request->category;
        $cooking->guidenumber = $request->guidenumber;
        $cooking->type_id = $request->type_id;

        //save items in the database
        $cooking->save();

        return redirect()->route('cooking.index')->with('message', 'Item has been created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Craftingitem  $craftingitem
     * @return \Illuminate\Http\Response
     */
    public function show(Craftingitem $cooking)
    {
        //
        return view('cookingshow', compact('cooking'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Craftingitem  $craftingitem
     * @return \Illuminate\Http\Response
     */
    public function edit(Craftingitem $cooking)
    {
        //
        return view('cookingedit', compact('cooking'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Craftingitem  $craftingitem
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCookingRequest $request, Craftingitem $cooking)
    {
        //attributes
        $cooking->name      = $request->name;
        $cooking->attribute = $request->attribute;
        $cooking->category  = $request->category;
        $cooking->type_id   = $request->type_id;
        //save item in database
        $cooking->save();

        return redirect('/cooking')->with('message', 'Item has been updated');
    }

    public function delete(Craftingitem $cooking)
    {
        return view('cookingdelete', compact('cooking'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Craftingitem  $craftingitem
     * @return \Illuminate\Http\Response
     */
    public function destroy(Craftingitem $cooking)
    {
        //
        $cooking->delete();
        return redirect()->route('cooking.index')->with('message', 'Item Deleted');
    }
}