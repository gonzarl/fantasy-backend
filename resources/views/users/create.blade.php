@extends('layouts.plantillabase');

@section('contenido')
<h2>CREATE USER</h2>

<form action="/users" method="POST">
    @csrf
    <div class="mb-3">
        <label for="" class="form-label">ID</label>
        <input type="text" class="form-control" id="id" name="id">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" name="name">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Email</label>
        <input type="text" class="form-control" id="email" name="email">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Password</label>
        <input type="text" class="form-control" id="password" name="password">
    </div>
    <div>
        <label for="" class="form-label">Rol</label>
        <select class="form-select" aria-label="">
            <option selected value="">None</option>
            <option value="points_manager">Points Manager</option>
            <option value="admin">Administrator</option>
        </select>
    </div>

    <div>
        <a href="/users" class="btn btn-secondary">CANCEL</a>
        <button type="submit" class="btn btn-primary">SAVE</button>
    </div>
</form>
@endsection
