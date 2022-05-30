@extends('layouts.plantillabase')

@section('contenido')

<div class="content text-center">
    <div><img src="https://i.ibb.co/ZHnjh79/opcion1.png" alt="opcion1" id="fantasy-logo"></div>
    <div class="welcome">Welcome {{Auth::user()->name}}!!</div>
    @if (Auth::user()->rol == 'user')
        <h3>Ask an admin for permissions</h3>
    @else
        @if (Auth::user()->rol == 'points-manager')
            <div class="text-center my-5">
                <a class="btn btn-lg btn-outline-success" href="/races">Races</a>
            </div>
        @else
            <div class="links mt-5">
                <a class="btn btn-lg btn-outline-success" href="/teams">Teams</a>
                <a class="btn btn-lg btn-outline-success" href="/drivers">Drivers</a>
                <a class="btn btn-lg btn-outline-success" href="/races">Races</a>
                <a class="btn btn-lg btn-outline-success" href="/users">Users</a>
            </div>
        @endif
    @endif
</div>
@endsection()