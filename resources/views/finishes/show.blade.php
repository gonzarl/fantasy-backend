@extends('layouts.plantillabase')

@section('contenido')
<h2>SHOW FINISHES </h2>
<div action="/finishes/{{$finish->id}}" class="card mx-auto" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title">Race ID {{$finish->race_id}}</h5>
        <ol>
            <li>{{$finish->driver_1_id}}</li>
            <li>{{$finish->driver_2_id}}</li>
            <li>{{$finish->driver_3_id}}</li>
            <li>{{$finish->driver_4_id}}</li>
            <li>{{$finish->driver_5_id}}</li>
            <li>{{$finish->driver_6_id}}</li>
            <li>{{$finish->driver_7_id}}</li>
            <li>{{$finish->driver_8_id}}</li>
            <li>{{$finish->driver_9_id}}</li>
            <li>{{$finish->driver_10_id}}</li>
        </ol>
        <form action="{{route('finishes.destroy', $finish->id)}}" method="POST">
        @csrf
        @method('DELETE')
            <a class="btn btn-info" href="/finishes/{{$finish->id}}/edit">Edit</a>
            <button type="submit" class="btn btn-primary">Delete</button>
            <a class="btn btn-secondary" href="/races">Cancel</a>
        </form>
    </div>
</div>

@endsection
