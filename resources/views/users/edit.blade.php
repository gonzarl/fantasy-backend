@extends('layouts.plantillabase')

@section('contenido')
<h2>EDIT USER</h2>

<form action="/users/{{$user->id}}" method="POST">
    @method('PUT')
    @csrf
    <div class="mb-3">
        <label for="" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" name="name" value="{{$user->name}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Email</label>
        <input type="text" class="form-control" id="email" name="email" value="{{$user->email}}">
    </div>
    <div>
        <label for="" class="form-label">Rol</label>
        <select class="form-select" name="rol" aria-label="">
            @if ($user->rol=='user')
                <option selected value="user">User</option> 
                <option value="points_manager">Points Manager</option>
                <option value="admin">Administrator</option>
            @else
                @if ($user->rol=='points manager')
                    <option value="user">User</option> 
                    <option selected value="points_manager">Points Manager</option>
                    <option value="admin">Administrator</option>
                @else
                    <option value="user">User</option> 
                    <option value="points_manager">Points Manager</option>
                    <option selected value="admin">Administrator</option>
                @endif
            @endif
        </select>
    </div>

    <div>
        <a href="/users" class="btn btn-secondary">CANCEL</a>
        <button type="submit" class="btn btn-primary">SAVE</button>
    </div>
</form>
@endsection
