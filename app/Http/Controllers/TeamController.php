<?php

namespace App\Http\Controllers;

use App\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teams = Team::all();
        return view('admin.team.addTeam',compact('teams'));
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
            'team_name' => 'required|min:2',
            'team_position' => 'required|min:2',
            'team_details' => 'required|min:8',
            'about_image' => 'image|mimes:jpeg,jpg,png',
        ]);

        $team = new Team;

        $team->team_name     =$request->input('team_name');
        $team->team_position =$request->input('team_position');
        $team->team_details  =$request->input('team_details');
        //image upload
		$upload_image = $request->hasFile('team_image');
		if ($upload_image){
        $image = $request->file('team_image');
        $x     ="abcdefghijklmnopqrstuvwxyz0123456789";
        $x     =str_shuffle($x);
        $x     =substr($x, 0, 6).".";
        $name  = time().$x.$image->getClientOriginalExtension();
        $destinationPath ='Admin_images/Team_images/';
        $image_url =$name;
        $success = $image->move($destinationPath, $name);
        $team->team_image = $image_url;
        $team->save();
        return back()->with('message', 'Team Successfully Added');
        }
        else{
            $team->save();
            return back()->with('message', 'Team Successfully Add Without Image ');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function show(Team $team)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function edit(Team $team)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Team $team)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function destroy(Team $team)
    {
        //
    }
}
