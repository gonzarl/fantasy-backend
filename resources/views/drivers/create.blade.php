@extends('layouts.plantillabase')

@section('contenido')
<h2>CREATE DRIVER</h2>

<form action="/drivers" method="POST">
    @csrf
    <div class="mb-3">
        <label for="" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" name="name">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Age</label>
        <input type="text" class="form-control" id="age" name="age">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Nationality</label>
        <input type="text" class="form-control" id="nationality" name="nationality">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Points</label>
        <input type="text" class="form-control" id="points" name="points" value="0">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Scuderia</label>
        <input type="text" class="form-control" id="scuderia" name="scuderia">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Value</label>
        <input type="text" class="form-control" id="value" name="value">
    </div>

    <div>
        <a href="/drivers" class="btn btn-secondary">CANCEL</a>
        <button type="submit" class="btn btn-primary">SAVE</button>
    </div>
</form>
@endsection