@extends('layouts.plantillabase')

@section('contenido')
<h2>Show grid finish result</h2>
<div action="/finishes/{{$finish->id}}" class="card mx-auto" style="width: 18rem;">
    <div class="card-body">
        <h4 class="card-title">Finish grid for:</h5>
        <h5 class="card-subtilte">{{$race->city}}</h6>
        <ol>
            @foreach ($names as $name)
                <li>{{$name}}</li>
            @endforeach
        </ol>
        <form action="{{route('finishes.destroy', $finish->id)}}" method="POST">
        @csrf
        @method('DELETE')
            <a class="btn btn-outline-info" href="/finishes/{{$finish->id}}/edit">Edit</a>
            <button type="submit" class="btn btn-outline-primary">Delete</button>
            <a class="btn btn-outline-secondary" href="/races">Go back</a>
        </form>
    </div>
</div>

@endsection
