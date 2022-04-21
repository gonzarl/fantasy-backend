@extends('layouts.plantillabase')

@section('contenido')
<h2>SHOW DRIVERS IN TEAMS </h2>
<div action="/drivers_in_teams/{{$driversit->id}}" class="card mx-auto" style="width: 18rem;">
    <div class="card-body">
        <h3 class="card-title text-center">{{$team->name}}</h5>
        <h4 class="card-subtitle">Drivers in team:</h6>
        <ul>
            <li>First driver: {{$driverNames["name1"]}}</li>
            <li>Second driver: {{$driverNames["name2"]}}</li>
        </ul>
        <form action="{{route('drivers_in_teams.destroy', $driversit->id)}}" method="POST">
        @csrf
        @method('DELETE')
            <a class="btn btn-info" href="/drivers_in_teams/{{$driversit->id}}/edit">Edit</a>
            <button type="submit" class="btn btn-primary">Delete</button>
            <a class="btn btn-secondary" href="/teams">Go back</a>
        </form>
    </div>
</div>

@endsection
