@extends('layouts.plantillabase')

@section('contenido')
<h2>Create grid finish result</h2>
@if ($errors->any())
        <div class="alert alert-danger">
            <h3>Some error ocurred:</h3>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
@endif
<form action="/finishes" method="POST">
    @csrf
    <div class="mb-3">
        <label for="" class="form-label">Race</label>
        <input type="text" class="form-control" id="race_id" name="race_id" value="{{$id}}" readonly>
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
    <div class="mb-3">
        <label for="" class="form-label">Third driver</label>
        <select name="driver_3_id" class="form-control rounded-0">
            @foreach ($drivers as $driver)
                <option value="{{$driver->id}}">{{$driver->name}}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Fourth driver</label>
        <select name="driver_4_id" class="form-control rounded-0">
            @foreach ($drivers as $driver)
                <option value="{{$driver->id}}">{{$driver->name}}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Fifth driver</label>
        <select name="driver_5_id" class="form-control rounded-0">
            @foreach ($drivers as $driver)
                <option value="{{$driver->id}}">{{$driver->name}}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Sixth driver</label>
        <select name="driver_6_id" class="form-control rounded-0">
            @foreach ($drivers as $driver)
                <option value="{{$driver->id}}">{{$driver->name}}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Seventh driver</label>
        <select name="driver_7_id" class="form-control rounded-0">
            @foreach ($drivers as $driver)
                <option value="{{$driver->id}}">{{$driver->name}}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Eight driver</label>
        <select name="driver_8_id" class="form-control rounded-0">
            @foreach ($drivers as $driver)
                <option value="{{$driver->id}}">{{$driver->name}}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Nineth driver</label>
        <select name="driver_9_id" class="form-control rounded-0">
            @foreach ($drivers as $driver)
                <option value="{{$driver->id}}">{{$driver->name}}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Tenth driver</label>
        <select name="driver_10_id" class="form-control rounded-0">
            @foreach ($drivers as $driver)
                <option value="{{$driver->id}}">{{$driver->name}}</option>
            @endforeach
        </select>
    </div>
    <div>
        <a href="/races" class="btn btn-outline-secondary">Cancel</a>
        <button type="submit" class="btn btn-outline-primary">Save</button>
    </div>
</form>
@endsection
