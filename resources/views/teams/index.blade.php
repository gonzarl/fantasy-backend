@extends('layouts.plantillabase')

@section('contenido')
<h1>TEAMS</h1>
<div class="d-flex justify-content-end">
    <a href="teams/create" class="btn btn-outline-primary">Create new team</a>
</div>

<table class="table table-striped text-center" id="small-table">
    <thead>
        <tr>
            <th scope="col">Name</th>
            <th scope="col">Budget</th>
            <th scope="col">Points</th>
            <th scope="col">User</th>
            <th scope="col">Drivers</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody class="text-center">
        @foreach ($teams as $team)
            <tr>
                <td>{{$team->name}}</td>
                <td>{{$team->budget}}</td>
                <td>{{$team->points}}</td>
                <td>{{$users[$team->user_id]->name}}</td>
                <td>
                    @if ($team->drivers->isEmpty())
                        <a class="btn btn-outline-success" href="/drivers_in_teams/{{$team->id}}/create_lineup">Create</a>
                    @else
                        <a class="btn btn-outline-success" href="/drivers_in_teams/{{$team->id}}/">Show drivers</a>
                    @endif
                </td>
                <td>
                    <form action="{{route('teams.destroy', $team->id)}}" method="POST">
                    @csrf
                    @method('DELETE')  
                        <a class="btn btn-outline-info" href="/teams/{{$team->id}}/edit">Edit</a>
                        <button class="btn btn-outline-primary">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
<div class="d-flex justify-content-end">
    {!! $teams->links() !!}
</div>
@endsection()