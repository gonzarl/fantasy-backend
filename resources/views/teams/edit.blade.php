@extends('layouts.plantillabase')

@section('contenido')
<h2>Edit team</h2>

<form action="/teams/{{$team->id}}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" name="name" value="{{$team->name}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Budget</label>
        <input type="text" class="form-control" id="budget" name="budget" value="{{$team->budget}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Points</label>
        <input type="text" class="form-control" id="points" name="points" value="{{$team->points}}" readonly>
    </div>
    <div class="mb-3">
        <label for="" class="form-label">User</label>
        <select name="user_id" class="form-control rounded-0">
            @foreach ($users as $user)
                <option value="{{$user->id}}" {{($user->id == $team->user_id) ? "selected" : ""}}>{{$user->name}}</option>
            @endforeach
        </select>
    </div>


    <a href="/teams" class="btn btn-outline-secondary">Cancel</a>
    <button type="submit" class="btn btn-outline-primary">Save</button>
</form>
@endsection
