@extends('layouts.plantillabase')

@section('contenido')
<h2>Create driver</h2>
@if ($errors->any())
        <div class="alert alert-danger">
            <h3>Some error ocurred:</h3>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
@endif
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
        <label for="" class="form-label">Scuderia</label>
        <input type="text" class="form-control" id="scuderia" name="scuderia">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Number</label>
        <input type="text" class="form-control" id="number" name="number">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Value</label>
        <input type="text" class="form-control" id="value" name="value">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Profile image</label>
        <input type="text" class="form-control" id="image" name="image">
    </div>
    <div>
        <a href="/drivers" class="btn btn-outline-secondary">Cancel</a>
        <button type="submit" class="btn btn-outline-primary">Save</button>
    </div>
</form>
@endsection