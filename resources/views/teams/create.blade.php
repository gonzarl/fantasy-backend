@extends('layouts.plantillabase')

@section('contenido')
<h2>CREATE TEAM </h2>

<form action="/teams" method="POST">
    @csrf
    <div class="mb-3">
        <label for="" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" name="name">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Budget</label>
        <input type="text" class="form-control" id="budget" name="budget">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Points</label>
        <input type="text" class="form-control" id="points" name="points">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">User_ID</label>
        <input type="text" class="form-control" id="user_id" name="user_id">
    </div>


    <a href="/teams" class="btn btn-secondary">CANCEL</a>
    <button type="submit" class="btn btn-primary">SAVE</button>
</form>
@endsection
