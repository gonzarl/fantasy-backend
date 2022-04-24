@extends('layouts.plantillabase')

@section('contenido')
<h2>Select drivers for team {{$team->name}}</h2>
@if ($errors->any())
        <div class="alert alert-danger">
            <h3>Some error ocurred:</h3>
            <ul>
                <li>The drivers must be different</li>
            </ul>
        </div>
@endif
<form action="/drivers_in_teams" method="POST">
    @csrf
    <div class="mb-3">
        <label for="" class="form-label" hidden>Team</label>
        <input type="text" class="form-control" id="team_id" name="team_id" value="{{$team->id}}" hidden>
    </div>
    <div class="mb-3">
        <label for="" class="form-label">First driver</label>
        <select name="driver_1_id" class="form-control rounded-0">
            @foreach ($drivers as $driver)
                <option value="{{$driver->id}}">{{$driver->name}} - {{$driver->value}} USD</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Second driver</label>
        <select name="driver_2_id" class="form-control rounded-0">
            @foreach ($drivers as $driver)
                <option value="{{$driver->id}}">{{$driver->name}} - {{$driver->value}} USD</option>
            @endforeach
        </select>
    </div>
    <div>
        <a href="/teams" class="btn btn-outline-secondary">Cancel</a>
        <button type="submit" class="btn btn-outline-primary">Save</button>
    </div>
</form>
@endsection
