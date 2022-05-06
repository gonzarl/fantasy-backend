<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Driver;
use App\Models\Image;


class DriverController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $drivers = Driver::orderBy('points', 'desc')->paginate(10);
        return view('drivers.index')->with('drivers', $drivers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('drivers.create');
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
            'name' => 'required',
            'age' => 'required|numeric',
            'nationality' => 'required|alpha',
            'scuderia' => 'required',
            'number' => 'required|numeric',
            'value' => 'required|integer',
        ]);

        $newDriver = new Driver();
        $newDriver->name = $request->get('name');
        $newDriver->age = $request->get('age');
        $newDriver->nationality = $request->get('nationality');
        $newDriver->scuderia = $request->get('scuderia');
        $newDriver->number = $request->get('number');
        $newDriver->value = $request->get('value');
        $newDriver->save();
        return redirect('/drivers');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $driver = Driver::find($id);
        $image = Image::where('driver_id',$driver->id)->first();
        return view('drivers.show')->with('driver', $driver)->with('image',$image);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $driver = Driver::find($id);
        return view('drivers.edit')->with('driver',$driver);
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
            'name' => 'required',
            'age' => 'required|numeric',
            'nationality' => 'required|alpha',
            'points' => 'required|integer|numeric',
            'scuderia' => 'required',
            'number' => 'required|numeric',
            'value' => 'required|integer',
        ]);

        $driver = Driver::find($id);
        $driver->name = $request->get('name');
        $driver->age = $request->get('age');
        $driver->nationality = $request->get('nationality');
        $driver->points = $request->get('points');
        $driver->scuderia = $request->get('scuderia');
        $driver->number = $request->get('number');
        $driver->value = $request->get('value');
        $driver->save();
        return redirect('/drivers');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $driver = Driver::find($id);
        $driver->delete();
        return redirect('/drivers');
    }
}
