<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use App\Models\DriversInTeams;
use App\Models\Driver;
use App\Models\Team;

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
        $request->validate([
            'team_id' => 'required',
            'driver_1_id' => 'different:driver_2_id',
            'driver_2_id' => 'different:driver_1_id',
        ]);

        $newDriversIT = new DriversInTeams();
        $newDriversIT->team_id = $request->get('team_id');
        $newDriversIT->driver_1_id = $request->get('driver_1_id');
        $newDriversIT->driver_2_id = $request->get('driver_2_id');

        $this->updateBudget($newDriversIT->team_id, $newDriversIT->driver_1_id, $newDriversIT->driver_2_id);
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
        $driversArray = ['name1' => Driver::find($driversIT->driver_1_id)->name];
        $driversArray = Arr::add($driversArray, 'name2', Driver::find($driversIT->driver_2_id)->name);
        $team = Team::find($driversIT->team_id) ;
        return view('driversit.show')->with('driversit',$driversIT)->with('driverNames', $driversArray)->with('team', $team);
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
        $team = Team::find($driversIT->team_id);
        $drivers = Driver::all();
        return view('driversit.edit')->with('driversit', $driversIT)->with('team',$team)
            ->with('drivers',$drivers);
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
        $request->validate([
            'driver_1_id' => 'different:driver_2_id',
            'driver_2_id' => 'different:driver_1_id',
        ]);
        
        $driversIT = DriversInTeams::find($id);
        $driversIT->driver_1_id = $request->get('driver_1_id');
        $driversIT->driver_2_id = $request->get('driver_2_id');
        $this->updateBudget($driversIT->team_id, $driversIT->driver_1_id, $driversIT->driver_2_id);
        $driversIT->save();
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
        Team::where('id', $driversIT->team_id)
            ->update(['budget' => 1000000]);
        $driversIT->delete();
        return redirect('/teams');
    }

    public function createLinup($id)
    {
        $drivers = Driver::all();
        return view('driversit.create')->with('id', $id)->with('drivers', $drivers);
    }

    private function updateBudget($team_id, $driver_1_id, $driver_2_id){
        $driver_1_value = Driver::find($driver_1_id)->value;
        $driver_2_value = Driver::find($driver_2_id)->value;
        $budget = 1000000 - $driver_1_value - $driver_2_value;
        Team::where('id', $team_id)
            ->update(['budget' => $budget]);
    }
}
