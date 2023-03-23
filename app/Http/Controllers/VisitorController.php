<?php

namespace App\Http\Controllers;

use App\Models\Visitor;
use Illuminate\Http\Request;

class VisitorController extends Controller
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
       //input validation
        $visitor = new Visitor;
        $visitor-> country          = $request->input('country');
        $visitor-> ip               = $request->input('ip');
        $visitor-> os               = $request->input('os');
        $visitor-> os_version       = $request->input('os_version');
        $visitor-> city             = $request->input('city');
        $visitor-> region           = $request->input('region');
        $visitor-> country_code     = $request->input('country_code');
        $visitor-> latitude         = $request->input('latitude');
        // $visitor-> languages        = $request->input('languages');
        $visitor-> browser          = $request->input('browser');
        $visitor-> browser_version  = $request->input('browser_version');
        $visitor-> save();
        return response()->json([
        'status' => 200,
        'message' => 'Visitor added successfully',
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Visitor  $visitor
     * @return \Illuminate\Http\Response
     */
    public function show(Visitor $visitor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Visitor  $visitor
     * @return \Illuminate\Http\Response
     */
    public function edit(Visitor $visitor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Visitor  $visitor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Visitor $visitor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Visitor  $visitor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Visitor $visitor)
    {
        //
    }
}