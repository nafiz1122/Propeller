<?php

namespace App\Http\Controllers;

use App\PatientForm;
use Illuminate\Http\Request;

class PatientFormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $patient= PatientForm::all();
        return view('admin.patient.allPatient',compact('patient'));
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
     * @param  \App\PatientForm  $patientForm
     * @return \Illuminate\Http\Response
     */
    public function show(PatientForm $patientForm,$id)
    {
        $patient =PatientForm::find($id);

        // dd($patient);
        return view('admin.patient.viewPatient',compact('patient'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PatientForm  $patientForm
     * @return \Illuminate\Http\Response
     */
    public function edit(PatientForm $patientForm)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PatientForm  $patientForm
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PatientForm $patientForm)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PatientForm  $patientForm
     * @return \Illuminate\Http\Response
     */
    public function destroy(PatientForm $patientForm)
    {
        //
    }
}
