<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DriversInTeams;

class DriversInTeamsController extends Controller
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
        $newDriversIT = new DriversInTeams();
        $newDriversIT->team_id = $request->get('team_id');
        $newDriversIT->driver_1_id = $request->get('driver_1_id');
        $newDriversIT->driver_2_id = $request->get('driver_2_id');
        $newDriversIT->save();
        return redirect('/teams');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $driversIT = DriversInTeams::find($id);
        return view('driversit.show')->with('driversit',$driversIT);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $driversIT = DriversInTeams::find($id);
        return view('driversit.edit')->with('driversit', $driversIT);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $driversIT = DriversInTeams::find($id);
        $driversIT->race_id = $request->get('team_id');
        $driversIT->driver_1_id = $request->get('driver_1_id');
        $driversIT->driver_2_id = $request->get('driver_2_id');
        $newDriversIT->save();
        return redirect('/teams');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $driversIT = DriversInTeams::find($id);
        $driversIT->delete();
        return redirect('/teams');
    }

    public function createLinup($id)
    {
        return view('driversit.create')->with('id', $id);
    }
}
