@extends('layouts.plantillabase')

@section('contenido')
<h1>DRIVERS</h1>

<table class="table table-striped text-center">
    <thead>
        <tr>
            <th scope="col">Name</th>
            <th scope="col">Age</th>
            <th scope="col">Nationality</th>
            <th scope="col">Points</th>
            <th scope="col">Scuderia</th>
            <th scope="col">Value</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody class="text-center">
        @foreach ($drivers as $driver)
            <tr>
                <td>{{$driver->name}}</td>
                <td>{{$driver->age}}</td>
                <td>{{$driver->nationality}}</td>
                <td>{{$driver->points}}</td>
                <td>{{$driver->scuderia}}</td>
                <td>{{$driver->value}}</td>
                <td>
                    <form action="{{route('drivers.destroy', $driver->id)}}" method="POST">
                        @csrf
                        @method('DELETE')  
                        <a class="btn btn-info" href="/drivers/{{$driver->id}}/edit">Edit</a>
                        <button class="btn btn-primary">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
<div class="d-flex justify-content-end">
    {!! $drivers->links() !!}
</div>

<a href="drivers/create" class="btn btn-primary">CREATE</a>
@endsection()