<?php

namespace App\Http\Controllers;

use App\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::all();
        return view('admin.service.addService',compact('services'));
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
            'service_name' => 'required|min:2',
            'service_icon' => 'required|min:2',
            'service_short_details' => 'required|min:2',
            'service_long_details' => 'required|min:2',
            'about_image' => 'image|mimes:jpeg,jpg,png',
        ]);

        $service = new Service;

        $service->service_name            =$request->input('service_name');
        $service->service_icon            =$request->input('service_icon');
        $service->service_short_details   =$request->input('service_short_details');
        $service->service_long_details    =$request->input('service_long_details');

        //image upload
		$upload_image = $request->hasFile('service_image');
		if ($upload_image){
        $image = $request->file('service_image');
        $x     ="abcdefghijklmnopqrstuvwxyz0123456789";
        $x     =str_shuffle($x);
        $x     =substr($x, 0, 6).".";
        $name  = time().$x.$image->getClientOriginalExtension();
        $destinationPath ='Admin_images/Service_images/';
        $image_url =$name;
        $success = $image->move($destinationPath, $name);
        $service->service_image = $image_url;
        $service->save();
        return back()->with('message', 'Service Successfully Added');
        }
        else{
            $service->save();
            return back()->with('message', 'Service Successfully Add Without Image ');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $service)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        //
    }
}
