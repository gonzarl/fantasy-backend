<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Finishes;

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
       //return view('finishes.create');
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
        return view('finishes.show')->with('finish',$finish);
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
        $finish->delete();
        return redirect('/races');
    }

    public function createResult($id){
        return view('finishes.create')->with('id', $id);
    }
}
