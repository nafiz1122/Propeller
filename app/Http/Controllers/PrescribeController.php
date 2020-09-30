<?php

namespace App\Http\Controllers;

use App\Prescribe;
use Illuminate\Http\Request;
use Auth;
class PrescribeController extends Controller
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
        $prescribe = new Prescribe;
        $prescribe->user_id = Auth::id();
        $prescribe->patient_id =  $request->patient_id;
        $prescribe->prescription =  $request->prescription;

        $prescribe->save();
        return back();


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Prescribe  $prescribe
     * @return \Illuminate\Http\Response
     */
    public function show(Prescribe $prescribe)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Prescribe  $prescribe
     * @return \Illuminate\Http\Response
     */
    public function edit(Prescribe $prescribe)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Prescribe  $prescribe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Prescribe $prescribe)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Prescribe  $prescribe
     * @return \Illuminate\Http\Response
     */
    public function destroy(Prescribe $prescribe)
    {
        //
    }
}
