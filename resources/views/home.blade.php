@extends('layouts.plantillabase');

@section('contenido')

<div class="content text-center">
    <div><img src="https://i.ibb.co/ZHnjh79/opcion1.png" alt="opcion1" id="fantasy-logo"></div>
    <div class="welcome">Welcome admin!!</div>
    <div class="links">
        <a class="btn btn-danger" href="/teams">Teams</a>
        <a class="btn btn-danger" href="/drivers">Drivers</a>
        <a class="btn btn-danger" href="/races">Races</a>
        <a class="btn btn-danger" href="/userss">Users</a>
    </div>
</div>
@endsection()