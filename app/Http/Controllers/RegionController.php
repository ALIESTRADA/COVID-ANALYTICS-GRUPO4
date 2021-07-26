<?php

namespace App\Http\Controllers;

use App\Models\TRegion;
use Illuminate\Http\Request;

class RegionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        return Region::all;
    }
            
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
       $region = Regions::create($request->all());
       return $region;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TRegion  $tRegion
     * @return \Illuminate\Http\Response
     */
    public function show(TRegion $tRegion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TRegion  $tRegion
     * @return \Illuminate\Http\Response
     */
    public function edit(TRegion $tRegion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TRegion  $tRegion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TRegion $tRegion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TRegion  $tRegion
     * @return \Illuminate\Http\Response
     */
    public function destroy(TRegion $tRegion)
    {
        //
    }
}
