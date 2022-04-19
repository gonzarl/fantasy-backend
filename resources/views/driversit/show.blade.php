@extends('layouts.plantillabase')

@section('contenido')
<h2>SHOW DRIVERS IN TEAMS </h2>
<div action="/drivers_in_teams/{{$driversit->id}}" class="card mx-auto" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title">Drivers in team {{$driversit->id}}</h5>
        <h6 class="card-subtitle">Team ID {{$driversit->team_id}}</h6>
        <ul>
            <li>First driver: {{$driversit->driver_1_id}}</li>
            <li>Second driver: {{$driversit->driver_2_id}}</li>
        </ul>
        <form action="{{route('drivers_in_teams.destroy', $driversit->id)}}" method="POST">
        @csrf
        @method('DELETE')
            <a class="btn btn-info" href="/drivers_in_teams/{{$driversit->id}}/edit">Edit</a>
            <button type="submit" class="btn btn-primary">Delete</button>
            <a class="btn btn-secondary" href="/teams">Cancel</a>
        </form>
    </div>
</div>

@endsection
