<?php

namespace App\Http\Controllers;

use App\Advisor;
use Illuminate\Http\Request;

class AdvisorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $advisors = Advisor::all();
        return view('admin.advisor.addAdvisor',compact('advisors'));
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $validatedData = $request->validate([
            'advisor_name' => 'required|min:2',
            'advisor_position' => 'required|min:2',
            'advisor_details' => 'required|min:8',
            'about_image' => 'image|mimes:jpeg,jpg,png',
        ]);

        $advisor = new advisor;

        $advisor->advisor_name     =$request->input('advisor_name');
        $advisor->advisor_position =$request->input('advisor_position');
        $advisor->advisor_details  =$request->input('advisor_details');
        //image upload
		$upload_image = $request->hasFile('advisor_image');
		if ($upload_image){
        $image = $request->file('advisor_image');
        $x     ="abcdefghijklmnopqrstuvwxyz0123456789";
        $x     =str_shuffle($x);
        $x     =substr($x, 0, 6).".";
        $name  = time().$x.$image->getClientOriginalExtension();
        $destinationPath ='Admin_images/advisor_images/';
        $image_url =$name;
        $success = $image->move($destinationPath, $name);
        $advisor->advisor_image = $image_url;
        $advisor->save();
        return back()->with('message', 'Advisor Successfully Added');
        }
        else{
            $advisor->save();
            return back()->with('message', 'Advisor Successfully Add Without Image ');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Advisor  $advisor
     * @return \Illuminate\Http\Response
     */
    public function show(Advisor $advisor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Advisor  $advisor
     * @return \Illuminate\Http\Response
     */
    public function edit(Advisor $advisor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Advisor  $advisor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Advisor $advisor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Advisor  $advisor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Advisor $advisor)
    {
        //
    }
}
