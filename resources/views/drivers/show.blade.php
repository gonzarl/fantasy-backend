@extends('layouts.plantillabase')

@section('contenido')
<h2>SHOW DRIVER</h2>
<div action="/drivers/{{$driver->id}}" class="card mx-auto" style="width: 18rem;">
    <img src="{{$driver->image}}" class="card-img-top" alt="{{$driver->name}} profile">
    <div class="card-body">
        <h5 class="card-title">{{$driver->name}}</h5>
        <h6 class="card-subtitle">Full description</h6>
        <ul>
            <li>ID: {{$driver->driver_id}}</li>
            <li>Age: {{$driver->age}}</li>
            <li>Nationality: {{$driver->nationality}}</li>
            <li>Points: {{$driver->points}}</li>
            <li>Scuderia: {{$driver->scuderia}}</li>
            <li>Number: {{$driver->number}}</li>
            <li>Value: {{$driver->value}}</li>
        </ul>
        <a class="btn btn-info" href="/drivers/{{$driver->id}}/edit">Edit</a>
        <a class="btn btn-secondary" href="/drivers">Go back</a>
    </div>
</div>

@endsection
