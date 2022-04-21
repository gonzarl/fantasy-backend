@extends('layouts.plantillabase')

@section('contenido')
<h2>Create team</h2>

<form action="/teams" method="POST">
    @csrf
    <div class="mb-3">
        <label for="" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" name="name">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Budget</label>
        <input type="text" class="form-control" id="budget" name="budget" value="1000000">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Points</label>
        <input type="text" class="form-control" id="points" name="points" value="0" readonly>
    </div>
    <div class="mb-3">
        <label for="" class="form-label">User</label>
        <select name="user_id" class="form-control rounded-0">
            @foreach ($users as $user)
                <option value="{{$user->id}}">{{$user->name}}</option>
            @endforeach
        </select>
    </div>
    <a href="/teams" class="btn btn-outline-secondary">Cancel</a>
    <button type="submit" class="btn btn-outline-primary">Save</button>
</form>
@endsection
