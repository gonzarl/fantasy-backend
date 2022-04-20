@extends('layouts.plantillabase')

@section('contenido')
<h2>SHOW FINISHES </h2>
<div action="/finishes/{{$finish->id}}" class="card mx-auto" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title">Race ID {{$finish->race_id}}</h5>
        <ol>
            <li>{{$names["name1"]}}</li>
            <li>{{$names["name2"]}}</li>
            <li>{{$names["name3"]}}</li>
            <li>{{$names["name4"]}}</li>
            <li>{{$names["name5"]}}</li>
            <li>{{$names["name6"]}}</li>
            <li>{{$names["name7"]}}</li>
            <li>{{$names["name8"]}}</li>
            <li>{{$names["name9"]}}</li>
            <li>{{$names["name10"]}}</li>
        </ol>
        <form action="{{route('finishes.destroy', $finish->id)}}" method="POST">
        @csrf
        @method('DELETE')
            <a class="btn btn-info" href="/finishes/{{$finish->id}}/edit">Edit</a>
            <button type="submit" class="btn btn-primary">Delete</button>
            <a class="btn btn-secondary" href="/races">Go back</a>
        </form>
    </div>
</div>

@endsection
