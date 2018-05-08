<?php

namespace App\Http\Controllers;

use App\Dream;
use Illuminate\Http\Request;

class DreamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $request->validate([
        'title' => 'required|min:3|max:255',
        'body' => 'required',
        ]);

        return 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Dream  $dream
     * @return \Illuminate\Http\Response
     */
    public function show(Dream $dream)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Dream  $dream
     * @return \Illuminate\Http\Response
     */
    public function edit(Dream $dream)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Dream  $dream
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dream $dream)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Dream  $dream
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dream $dream)
    {
        //
    }
}
