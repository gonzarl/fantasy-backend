@extends('layouts.plantillabase')

@section('contenido')
<h2>EDIT DRIVERS IN TEAMS </h2>

<form action="/drivers_in_teams/{{$driversit->id}}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="" class="form-label">Team ID</label>
        <input type="text" class="form-control" id="team_id" name="team_id" value="{{$driversit->team_id}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">First driver</label>
        <input type="text" class="form-control" id="driver_1_id" name="driver_1_id" value="{{$driversit->driver_1_id}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Second driver</label>
        <input type="text" class="form-control" id="driver_2_id" name="driver_2_id" value="{{$driversit->driver_2_id}}">
    </div>
    <div>
        <a href="/teams" class="btn btn-secondary">CANCEL</a>
        <button type="submit" class="btn btn-primary">SAVE</button>
    </div>
</form>
@endsection
