@extends('layouts.plantillabase')

@section('contenido')
<h1>DRIVERS</h1>

<table class="table table-striped text-center" id="small-table">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Points</th>
            <th scope="col">Number</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody class="text-center">
        @foreach ($drivers as $driver)
            <tr>
                <td>{{$driver->id}}</td>
                <td>{{$driver->name}}</td>
                <td>{{$driver->points}}</td>
                <td>{{$driver->number}}</td>
                <td>
                    <form action="{{route('drivers.destroy', $driver->id)}}" method="POST">
                        @csrf
                        @method('DELETE') 
                        <a class="btn btn-success" href="/drivers/{{$driver->id}}">More info</a> 
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