@extends('layouts.plantillabase')

@section('contenido')
    <div class="text-center">
            <div class="mt-5"><img src="https://i.ibb.co/wpQz0jr/red-flag.png" alt="not authorized" id="fantasy-logo"></div>

            <div class="bottom">
                <h3 class="mt-5 mb-5">YOU DONT HAVE ACCESS</h3>
                <a class="btn btn-outline-primary btn-lg " href="{{ url()->previous() }}">Go back</a>
            </div>
    </div>
@endsection