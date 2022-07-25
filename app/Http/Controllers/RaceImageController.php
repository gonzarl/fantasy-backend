<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RaceImage;
use Illuminate\Support\Facades\File;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;

class RaceImageController extends Controller
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
        $race = $request->get('race_id');

        if ($request->has('image')){
            $image = $request->file('image');
            $stored = $image->storeOnCloudinary('Races');

            $local_copy = new RaceImage();
            $local_copy->path = $stored->getSecurePath();
            $local_copy->service_id = $stored->getPublicId();
            $local_copy->race_id = $race;
            $local_copy->timestamps = false;
            $local_copy->save();
        }
        return redirect("/races/".$race);
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $image = RaceImage::find($id);
        $race = $image->race_id;

        Cloudinary::destroy($image->service_id);

        $image->delete();
        return redirect("/races/");
    }
}
