@extends('layouts.plantillabase')

@section('contenido')

<div class="content text-center">
    <div><img src="https://i.ibb.co/ZHnjh79/opcion1.png" alt="opcion1" id="fantasy-logo"></div>
    <div class="welcome">Welcome admin!!</div>
    <div class="links mt-3">
        <a class="btn btn-lg btn-success" href="/teams">Teams</a>
        <a class="btn btn-lg btn-success" href="/drivers">Drivers</a>
        <a class="btn btn-lg btn-success" href="/races">Races</a>
        <a class="btn btn-lg btn-success" href="/users">Users</a>
    </div>
</div>
@endsection()