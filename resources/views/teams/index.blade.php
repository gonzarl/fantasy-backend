@extends('layouts.plantillabase')

@section('contenido')
<h1>TEAMS</h1>

<table class="table table-striped text-center">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Budget</th>
            <th scope="col">Points</th>
            <th scope="col">User ID</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody class="text-center">
        @foreach ($teams as $team)
            <tr>
                <td>{{$team->id}}</td>
                <td>{{$team->name}}</td>
                <td>{{$team->budget}}</td>
                <td>{{$team->points}}</td>
                <td>{{$team->user_id}}</td>
                <td>
                    <form action="{{route('teams.destroy', $team->id)}}" method="POST">
                    @csrf
                    @method('DELETE')  
                        <a class="btn btn-info" href="/teams/{{$team->id}}/edit">Edit</a>
                        <button class="btn btn-primary">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
<div class="d-flex justify-content-end">
    {!! $teams->links() !!}
</div>

<a href="teams/create" class="btn btn-primary">CREATE</a>
@endsection()