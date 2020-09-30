<?php

namespace App\Http\Controllers;

use App\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $abouts =About::all();
        return view('admin.about.addAbout',compact('abouts'));
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
              $validatedData = $request->validate([
            'about_title' => 'required|min:2',
            'about_details' => 'required|min:2',
            'about_image' => 'image|mimes:jpeg,jpg,png',
        ]);

        $about = new About;

        $about->about_title   =$request->input('about_title');
        $about->about_details =$request->input('about_details');
        
        //image upload
		$upload_image = $request->hasFile('about_image');
		if ($upload_image){
        $image = $request->file('about_image');
        $x     ="abcdefghijklmnopqrstuvwxyz0123456789";
        $x     =str_shuffle($x);
        $x     =substr($x, 0, 6).".";
        $name  = time().$x.$image->getClientOriginalExtension();
        $destinationPath ='Admin_images/About_images/';
        $image_url =$name;
        $success = $image->move($destinationPath, $name);
        $about->about_image = $image_url;
        $about->save();
        return back()->with('message', 'About Successfully Added');
        }
        else{
            $about->save();
            return back()->with('message', 'About Successfully Add Without Image ');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function show(About $about)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function edit(About $about)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, About $about)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function destroy(About $about)
    {
        //
    }
}
