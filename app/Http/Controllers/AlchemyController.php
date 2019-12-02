<?php

namespace App\Http\Controllers;

use App\Craftingitem;
use App\Http\Requests\StorealchemyRequest;
use App\Http\Requests\UpdatealchemyRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class alchemyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //get all the data from the database
        $alchemy = DB::select("select * from `craftingitems` where `type_id`=2");


        //returning everything to the view
        return view('alchemy', compact('alchemy'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('alchemycreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAlchemyRequest $request)
    {
        //adding a new alchemy Item (using the Model Craftingitems)
        //$validated = $request->validated();
        $alchemy = new Craftingitem();

        //attributes
        $alchemy->name = $request->name;
        $alchemy->attribute = $request->attribute;
        $alchemy->category = $request->category;
        $alchemy->guidenumber = $request->guidenumber;
        $alchemy->type_id = $request->type_id;

        //save items in the database
        $alchemy->save();

        return redirect()->route('alchemy.index')->with('message', 'Item has been created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Craftingitem  $craftingitem
     * @return \Illuminate\Http\Response
     */
    public function show(Craftingitem $alchemy)
    {
        //
        return view('alchemyshow', compact('alchemy'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Craftingitem  $craftingitem
     * @return \Illuminate\Http\Response
     */
    public function edit(Craftingitem $alchemy)
    {
        //
        return view('alchemyedit', compact('alchemy'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Craftingitem  $craftingitem
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatealchemyRequest $request, Craftingitem $alchemy)
    {
        //attributes
        $alchemy->name      = $request->name;
        $alchemy->attribute = $request->attribute;
        $alchemy->category  = $request->category;
        $alchemy->type_id   = $request->type_id;
        //save item in database
        $alchemy->save();

        return redirect('/alchemy')->with('message', 'Item has been updated');
    }





    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Craftingitem  $craftingitem
      */

    public function destroy(Craftingitem $alchemy)
    {
        //
        $alchemy->delete();
        return redirect()->route('alchemy.index')->with('status', 'AlchemyItem deleted');
    }
}