<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Driver;
use App\Models\Image;
use Illuminate\Support\Facades\Http;

class DriverController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }
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

    public function search(){
        return view('drivers.search');
    }

    public function searchInService(Request $request){
        $response = Http::get('https://ergast.com/api/f1/drivers/'.$request->name.'.json');
        
        //si encontre resultados los uso, sino voy a crear vacio
        if ($response["MRData"]["total"] != "0") {
            $table = $response->json()["MRData"]["DriverTable"];
            $driver = $table["Drivers"][0];
            $driver_name = $driver["givenName"].' '.$driver["familyName"];
            $driver_number = $driver["permanentNumber"];
            $driver_dob = $driver["dateOfBirth"];

            $driver_dob = explode("-", $driver_dob);

            //get age from date or birthdate
            $age = (date("md", date("U", mktime(0, 0, 0, $driver_dob[2], $driver_dob[1], $driver_dob[0]))) > date("md")
              ? ((date("Y") - $driver_dob[0]) - 1)
              : (date("Y") - $driver_dob[0]));

            $driver_nationality = $driver["nationality"];
            return view('drivers.createFromService')->with('driverName',$driver_name)
                ->with('driverNumber',$driver_number)->with('driverAge',$age-1)
                ->with('driverNationality',$driver_nationality);
        } else {
            return redirect('/drivers/create');
        }
    }
}
