<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Race;
use App\Models\Finishes;

class RaceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $races = Race::orderBy('id', 'asc')->paginate(10);
        return view('races.index')->with('races', $races);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('races.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newRace = new Race();
        $newRace->city = $request->get('city');
        $newRace->country = $request->get('country');
        $newRace->date = $request->get('date');
        $newRace->style = $request->get('style');
        $newRace->save();
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $race = Race::find($id);
        return view('races.edit')->with('race',$race);
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
        $race = Race::find($id);
        $race->city = $request->get('city');
        $race->country = $request->get('country');
        $race->date = $request->get('date');
        $race->style = $request->get('style');
        $race->save();
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
        $race = Race::find($id);
        $race->delete();
        return view('races.index');
    }

    public function createFinishes($id){
        return view('races.create');
    }

    public function viewFinishes($id){
        return view('races.create');
    }
}
