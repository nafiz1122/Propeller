<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;
use App\About;
use App\Service;
use App\Team;
use App\PatientForm;
use DB;
class ClientController extends Controller
{
    public function index()
    {
        $abouts   = About::all();
        $sliders  = Slider::all();
        $services = Service::all();
        $teams    = Team::all();
         return view('client.client_content',compact('sliders','abouts','services','teams'));
    }
    //for view a single service
    public function ViewService($id)
    {
        $service = Service::find($id);
        return view('client.viewService',compact('service'));
    }
    //patient form index
    public function PatientReg()
    {
        $district = DB::table('districts')->get();
        return view('client.PatientReg',compact('district'));
    }
    //patient store
    public function PatientStore(Request $request)
    {
        $patient = new PatientForm;

        $patient->patient_type       = $request->input('patient_type');
        $patient->appoint_time       = $request->input('appoint_time');
        $patient->patient_name       = $request->input('patient_name');
        $patient->patient_gender     = $request->input('gender');
        $patient->patient_phone      = $request->input('patient_phone');
        $patient->patient_ex_phone   = $request->input('patient_ex_phone');
        $patient->patient_age        = $request->input('patient_age');
        $patient->patient_district   = $request->input('district_id');
        $patient->patient_upazila    = $request->input('upazila_id');
        $patient->patient_union      = $request->input('union');
        $patient->current_diseases   = $request->input('current_disease');
        $patient->current_medicine   = $request->input('current_medicine');
        $patient->prescription_image = $request->input('prescription_image');

        //image upload
		$upload_image = $request->hasFile('prescription_image');
		if ($upload_image){
        $image = $request->file('prescription_image');
        $x     ="abcdefghijklmnopqrstuvwxyz0123456789";
        $x     =str_shuffle($x);
        $x     =substr($x, 0, 6).".";
        $name  = time().$x.$image->getClientOriginalExtension();
        $destinationPath ='Admin_images/Patient_images/';
        $image_url =$name;
        $success = $image->move($destinationPath, $name);
        $patient->prescription_image = $image_url;
        $patient->save();
        return back()->with('message', 'Blog Successfully Added');
        }
        else{
            echo"No";
        }
    }

    //get district
    public function getUpazilas(Request $request)
    {
        if ($request->has('district_id')) {
            return DB::table('upazilas')->where('district_id',$request->input('district_id'))->get();
        }
        

        // echo "<pre>";
        // print_r($district_id);
        // echo "</pre>";
    }
}
