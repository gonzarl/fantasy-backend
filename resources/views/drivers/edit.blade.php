@extends('layouts.plantillabase');

@section('contenido')
<h2>EDIT DRIVER</h2>

<form action="/drivers/{{$driver->id}}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" name="name" value="{{$driver->name}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Age</label>
        <input type="text" class="form-control" id="age" name="age" value="{{$driver->age}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Nationality</label>
        <input type="text" class="form-control" id="nationality" name="nationality" value="{{$driver->nationality}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Points</label>
        <input type="text" class="form-control" id="points" name="points" value="{{$driver->points}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Scuderia</label>
        <input type="text" class="form-control" id="scuderia" name="scuderia" value="{{$driver->scuderia}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Value</label>
        <input type="text" class="form-control" id="value" name="value" value="{{$driver->value}}">
    </div>

    <div>
        <a href="/drivers" class="btn btn-secondary">CANCEL</a>
        <button type="submit" class="btn btn-primary">SAVE</button>
    </div>
</form>
@endsection