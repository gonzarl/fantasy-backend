@extends('layouts.plantillabase')

@section('contenido')
<h2>Edit grid finish result</h2>
@if ($errors->any())
        <div class="alert alert-danger">
            <h3>Some error ocurred:</h3>
            <ul>
                <li>No driver can finish in more than one position</li>
            </ul>
        </div>
@endif
<form action="/finishes/{{$finish->id}}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="" class="form-label">Race</label>
        <input type="text" class="form-control" id="race_id" name="race_id" value="{{$race->city}}" readonly>
    </div>
    <div class="mb-3">
        <label for="" class="form-label">First driver</label>
        <select name="driver_1_id" class="form-control rounded-0">
            @foreach ($drivers as $driver)
                <option value="{{$driver->id}}" {{($driver->id == $finish->driver_1_id) ? "selected" : ""}}>{{$driver->name}}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Second driver</label>
        <select name="driver_2_id" class="form-control rounded-0">
            @foreach ($drivers as $driver)
                <option value="{{$driver->id}}" {{($driver->id == $finish->driver_2_id) ? "selected" : ""}}>{{$driver->name}}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Third driver</label>
        <select name="driver_3_id" class="form-control rounded-0">
            @foreach ($drivers as $driver)
                <option value="{{$driver->id}}" {{($driver->id == $finish->driver_3_id) ? "selected" : ""}}>{{$driver->name}}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Fourth driver</label>
        <select name="driver_4_id" class="form-control rounded-0">
            @foreach ($drivers as $driver)
                <option value="{{$driver->id}}" {{($driver->id == $finish->driver_4_id) ? "selected" : ""}}>{{$driver->name}}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Fifth driver</label>
        <select name="driver_5_id" class="form-control rounded-0">
            @foreach ($drivers as $driver)
                <option value="{{$driver->id}}" {{($driver->id == $finish->driver_5_id) ? "selected" : ""}}>{{$driver->name}}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Sixth driver</label>
        <select name="driver_6_id" class="form-control rounded-0">
            @foreach ($drivers as $driver)
                <option value="{{$driver->id}}" {{($driver->id == $finish->driver_6_id) ? "selected" : ""}}>{{$driver->name}}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Seventh driver</label>
        <select name="driver_7_id" class="form-control rounded-0">
            @foreach ($drivers as $driver)
                <option value="{{$driver->id}}" {{($driver->id == $finish->driver_7_id) ? "selected" : ""}}>{{$driver->name}}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Eight driver</label>
        <select name="driver_8_id" class="form-control rounded-0">
            @foreach ($drivers as $driver)
                <option value="{{$driver->id}}" {{($driver->id == $finish->driver_8_id) ? "selected" : ""}}>{{$driver->name}}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Nineth driver</label>
        <select name="driver_9_id" class="form-control rounded-0">
            @foreach ($drivers as $driver)
                <option value="{{$driver->id}}" {{($driver->id == $finish->driver_9_id) ? "selected" : ""}}>{{$driver->name}}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Tenth driver</label>
        <select name="driver_10_id" class="form-control rounded-0">
            @foreach ($drivers as $driver)
                <option value="{{$driver->id}}" {{($driver->id == $finish->driver_10_id) ? "selected" : ""}}>{{$driver->name}}</option>
            @endforeach
        </select>
    </div>
    <div>
        <a href="/races" class="btn btn-outline-secondary">Cancel</a>
        <button type="submit" class="btn btn-outline-primary">Save</button>
    </div>
</form>
@endsection
