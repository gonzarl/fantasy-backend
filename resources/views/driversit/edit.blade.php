@extends('layouts.plantillabase')

@section('contenido')
<h2>Edit drivers from team</h2>

<form action="/drivers_in_teams/{{$driversit->id}}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="" class="form-label">Team</label>
        <input type="text" class="form-control" id="team_id" name="team_id" value="{{$driversit->team_id}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">First driver</label>
        <select name="driver_1_id" class="form-control rounded-0">
            @foreach ($drivers as $driver)
                <option value="{{$driver->id}}" {{($driver->id == $driversit->driver_1_id) ? "selected" : ""}}>{{$driver->name}} - {{$driver->value}} USD</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Second driver</label>
        <select name="driver_2_id" class="form-control rounded-0">
            @foreach ($drivers as $driver)
                <option value="{{$driver->id}}" {{($driver->id == $driversit->driver_2_id) ? "selected" : ""}}>{{$driver->name}} - {{$driver->value}} USD</option>
            @endforeach
        </select>
    </div>
    <div>
        <a href="/teams" class="btn btn-outline-secondary">Cancel</a>
        <button type="submit" class="btn btn-outline-primary">Save</button>
    </div>
</form>
@endsection
