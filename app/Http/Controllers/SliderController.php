<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;
class SliderController extends Controller
{
    public function index()
    {
        $sliders =Slider::all();
        return view('admin.slider.addSlider',compact('sliders'));
    }

    //store slider 
    public function store(REQUEST $request)
    {
           $validatedData = $request->validate([
            'slider_title' => 'required|min:2',
            'slider_details' => 'required|min:2',
            'slider_image' => 'image|mimes:jpeg,jpg,png',
        ]);

        $slider = new Slider;

        $slider->slider_title   =$request->input('slider_title');
        $slider->slider_details =$request->input('slider_details');
        
        //image upload
		$upload_image = $request->hasFile('slider_image');
		if ($upload_image){
        $image = $request->file('slider_image');
        $x     ="abcdefghijklmnopqrstuvwxyz0123456789";
        $x     =str_shuffle($x);
        $x     =substr($x, 0, 6).".";
        $name  = time().$x.$image->getClientOriginalExtension();
        $destinationPath ='Admin_images/Slider_images/';
        $image_url =$name;
        $success = $image->move($destinationPath, $name);
        $slider->slider_image = $image_url;
        $slider->save();
        return back()->with('message', 'Slider Successfully Added');
        }
        else{
            $slider->save();
            return back()->with('message', 'Slider Successfully Add Without Image ');
        }


    }
}
