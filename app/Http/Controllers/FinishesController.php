<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use App\Models\Finishes;
use App\Models\Driver;
use App\Models\Team;
use App\Models\DriversInTeams;

class FinishesController extends Controller
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
        $newFinishes = new Finishes();
        $newFinishes->race_id = $request->get('race_id');
        $newFinishes->driver_1_id = $request->get('driver_1_id');
        $newFinishes->driver_2_id = $request->get('driver_2_id');
        $newFinishes->driver_3_id = $request->get('driver_3_id');
        $newFinishes->driver_4_id = $request->get('driver_4_id');
        $newFinishes->driver_5_id = $request->get('driver_5_id');
        $newFinishes->driver_6_id = $request->get('driver_6_id');
        $newFinishes->driver_7_id = $request->get('driver_7_id');
        $newFinishes->driver_8_id = $request->get('driver_8_id');
        $newFinishes->driver_9_id = $request->get('driver_9_id');
        $newFinishes->driver_10_id = $request->get('driver_10_id');

        $amount = [25, 18, 15, 12, 10, 8, 6, 4, 2, 1];
        for ($i = 1; $i <= 10; $i++) {
            $this->addTeamPoints($newFinishes->driver_.$i, $amount[$i-1]);
            $this->addDriverPoints($newFinishes->driver_.$i, $amount[$i-1]);
        }
        $newFinishes->save();
        return redirect('/races');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $finish = Finishes::find($id);
        $driversArray = ['name1' => Driver::find($finish->driver_1_id)->name];
        $driversArray = Arr::add($driversArray, 'name2', Driver::find($finish->driver_2_id)->name);
        $driversArray = Arr::add($driversArray, 'name3', Driver::find($finish->driver_3_id)->name);
        $driversArray = Arr::add($driversArray, 'name4', Driver::find($finish->driver_4_id)->name);
        $driversArray = Arr::add($driversArray, 'name5', Driver::find($finish->driver_5_id)->name);
        $driversArray = Arr::add($driversArray, 'name6', Driver::find($finish->driver_6_id)->name);
        $driversArray = Arr::add($driversArray, 'name7', Driver::find($finish->driver_7_id)->name);
        $driversArray = Arr::add($driversArray, 'name8', Driver::find($finish->driver_8_id)->name);
        $driversArray = Arr::add($driversArray, 'name9', Driver::find($finish->driver_9_id)->name);
        $driversArray = Arr::add($driversArray, 'name10', Driver::find($finish->driver_10_id)->name);
        return view('finishes.show')->with('finish', $finish)->with('names',$driversArray);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $finish = Finishes::find($id);
        return view('finishes.edit')->with('finish', $finish);
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
        $finishes = Finishes::find($id);
        $amount = [25, 18, 15, 12, 10, 8, 6, 4, 2, 1];
        for ($i = 1; $i <= 10; $i++) {
            $this->removeTeamPoints($finishes->driver_.$i, $amount[$i-1]);
            $this->removeDriverPoints($finishes->driver_.$i, $amount[$i-1]);
        }
        $finishes->race_id = $request->get('race_id');
        $finishes->driver_1_id = $request->get('driver_1_id');
        $finishes->driver_2_id = $request->get('driver_2_id');
        $finishes->driver_3_id = $request->get('driver_3_id');
        $finishes->driver_4_id = $request->get('driver_4_id');
        $finishes->driver_5_id = $request->get('driver_5_id');
        $finishes->driver_6_id = $request->get('driver_6_id');
        $finishes->driver_7_id = $request->get('driver_7_id');
        $finishes->driver_8_id = $request->get('driver_8_id');
        $finishes->driver_9_id = $request->get('driver_9_id');
        $finishes->driver_10_id = $request->get('driver_10_id');
        for ($i = 1; $i <= 10; $i++) {
            $this->addTeamPoints($finishes->driver_.$i, $amount[$i-1]);
            $this->addDriverPoints($finishes->driver_.$i, $amount[$i-1]);
        }
        $finishes->save();
        return redirect('/races');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $finish = Finishes::find($id);
        $amount = [25, 18, 15, 12, 10, 8, 6, 4, 2, 1];
        for ($i = 1; $i <= 10; $i++) {
            $this->removeTeamPoints($finish->driver_.$i, $amount[$i-1]);
            $this->removeDriverPoints($finish->driver_.$i, $amount[$i-1]);
        }
        $finish->delete();
        return redirect('/races');
    }

    public function createResult($id)
    {
        return view('finishes.create')->with('id', $id);
    }

    private function addTeamPoints($driver, $amount){
        $teams_with_first_pilot = DriversInTeams::where('driver_1_id', $driver)->select('team_id')->get();
        $teams_with_second_pilot = DriversInTeams::where('driver_2_id', $driver)->select('team_id')->get();
        foreach ($teams_with_first_pilot as $t) {
            $points = Team::find($t->team_id)->points;
            Team::where('id', $t->team_id)
                ->update(['points' => $points+$amount]);
        }
        foreach ($teams_with_second_pilot as $t) {
            $points = Team::find($t->team_id)->points;
            Team::where('id', $t->team_id)
                ->update(['points' => $points+$amount]);
        }
    }

    private function addDriverPoints($driver, $amount){
        $driver_points = Driver::find($driver)->points;
        Driver::where('id', $driver)
            ->update(['points' => $driver_points+$amount]);
    }

    private function removeTeamPoints($driver, $amount){
        $teams_with_first_pilot = DriversInTeams::where('driver_1_id', $driver)->select('team_id')->get();
        $teams_with_second_pilot = DriversInTeams::where('driver_2_id', $driver)->select('team_id')->get();
        foreach ($teams_with_first_pilot as $t) {
            $points = Team::find($t->team_id)->points;
            Team::where('id', $t->team_id)
                ->update(['points' => $points-$amount]);
        }
        foreach ($teams_with_second_pilot as $t) {
            $points = Team::find($t->team_id)->points;
            Team::where('id', $t->team_id)
                ->update(['points' => $points-$amount]);
        }
    }

    private function removeDriverPoints($driver, $amount){
        $driver_points = Driver::find($driver)->points;
        Driver::where('id', $driver)
            ->update(['points' => $driver_points-$amount]);
    }
}
