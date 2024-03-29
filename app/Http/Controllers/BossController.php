<?php

namespace App\Http\Controllers;

use App\Boss;
use Illuminate\Http\Request;

class BossController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //get all the data from the database
        $bosses = Boss::all();

        //returning everything to the view
        return view('boss', compact('bosses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Boss  $boss
     * @return \Illuminate\Http\Response
     */
    public function show(Boss $boss)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Boss  $boss
     * @return \Illuminate\Http\Response
     */
    public function edit(Boss $boss)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Boss  $boss
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Boss $boss)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Boss  $boss
     * @return \Illuminate\Http\Response
     */
    public function destroy(Boss $boss)
    {
        //
    }
}
