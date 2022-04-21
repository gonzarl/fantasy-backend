@extends('layouts.plantillabase')

@section('contenido')
<h2> CREATE DRIVERS IN TEAMS</h2>

<form action="/drivers_in_teams" method="POST">
    @csrf
    <div class="mb-3">
        <label for="" class="form-label">Team</label>
        <input type="text" class="form-control" id="team_id" name="team_id" value="{{$id}}" readonly>
    </div>
    <div class="mb-3">
        <label for="" class="form-label">First driver</label>
        <select name="driver_1_id" class="form-control rounded-0">
            @foreach ($drivers as $driver)
                <option value="{{$driver->id}}">{{$driver->name}}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Second driver</label>
        <select name="driver_2_id" class="form-control rounded-0">
            @foreach ($drivers as $driver)
                <option value="{{$driver->id}}">{{$driver->name}}</option>
            @endforeach
        </select>
    </div>
    <div>
        <a href="/teams" class="btn btn-outline-secondary">CANCEL</a>
        <button type="submit" class="btn btn-outline-primary">SAVE</button>
    </div>
</form>
@endsection
