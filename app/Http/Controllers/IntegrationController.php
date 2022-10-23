<?php

namespace App\Http\Controllers;

use App\Models\integration;
use Illuminate\Http\Request;

class IntegrationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('integration');
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
     * @param  \App\Models\integration  $integration
     * @return \Illuminate\Http\Response
     */
    public function show(integration $integration)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\integration  $integration
     * @return \Illuminate\Http\Response
     */
    public function edit(integration $integration)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\integration  $integration
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, integration $integration)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\integration  $integration
     * @return \Illuminate\Http\Response
     */
    public function destroy(integration $integration)
    {
        //
    }
}
