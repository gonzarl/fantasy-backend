<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use App\Models\Team;
use App\Models\User;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teams = Team::orderBy('id','asc')->paginate(10);
        $users = [];
        foreach ($teams as $team) {
            $user = User::find($team->user_id);
            $users = Arr::add($users, $team->id, $user);
        }
        return view('teams.index')->with('teams', $teams)->with('users',$users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
        return view('teams.create')->with('users',$users);
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
            'name' => 'required|alpha_num',
            'user_id' => 'required|integer',
        ]);
        $newTeam = new Team();
        $newTeam->name = $request->get('name');
        $newTeam->user_id = $request->get('user_id');
        $newTeam->save();
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
        $team = Team::find($id);
        $user = User::find($team->user_id);
        return view('teams.show')->with('team',$team)->with('user',$user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $team = Team::find($id);
        $users = User::all();
        return view('teams.edit')->with('team',$team)->with('users',$users);
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
            'name' => 'required|alpha_num',
            'user_id' => 'required|integer',
        ]);
        $team = Team::find($id);
        $team->name = $request->get('name');
        $team->user_id = $request->get('user_id');
        $team->save();
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
        $team = Team::find($id);
        $team->delete();
        return redirect ('/teams');
    }
}
