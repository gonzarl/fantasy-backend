@extends('layouts.plantillabase')

@section('contenido')
<h2>Team description</h2>
<div action="/teams/{{$team->id}}" class="card mx-auto" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title">{{$team->name}}</h5>
        <h6 class="card-subtitle">Full description</h6>
        <ul>
            <li>Budget: {{$team->budget}}</li>
            <li>Points: {{$team->points}}</li>
            <li>Owner: {{$user->name}}</li>
        </ul>
        <a class="btn btn-outline-info" href="/teams/{{$team->id}}/edit">Edit</a>
        <a class="btn btn-outline-secondary" href="/teams">Go back</a>
    </div>
</div>

@endsection
