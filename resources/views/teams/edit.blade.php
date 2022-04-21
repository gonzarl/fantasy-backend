@extends('layouts.plantillabase')

@section('contenido')
<h2>EDIT TEAM </h2>

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
        <input type="text" class="form-control" id="user_id" name="user_id" value="{{$team->user_id}}">
    </div>


    <a href="/teams" class="btn btn-secondary">CANCEL</a>
    <button type="submit" class="btn btn-primary">SAVE</button>
</form>
@endsection
