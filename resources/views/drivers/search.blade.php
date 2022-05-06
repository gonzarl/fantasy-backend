@extends('layouts.plantillabase')

@section('contenido')
<h2>Search driver info</h2>
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
<form action="/drivers/search" method="POST">
    @csrf
    <div class="mb-3">
        <label for="" class="form-label">Driver lastname</label>
        <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
    </div>
    <div class="d-flex justify-content-end">
        <a href="/drivers" class="btn btn-outline-secondary mx-2">Cancel</a>
        <button type="submit" class="btn btn-outline-primary mx-2">Search</button>
    </div>
</form>
@endsection