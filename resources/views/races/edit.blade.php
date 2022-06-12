@extends('layouts.plantillabase')

@section('contenido')
<h2>Edit race</h2>
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
<form action="/races/{{$race->id}}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="" class="form-label">City</label>
        <input type="text" class="form-control" id="city" name="city" value="{{$race->city}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Country</label>
        <input type="text" class="form-control" id="country" name="country" value="{{$race->country}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Country code</label>
        <input type="text" class="form-control" id="country_code" name="country_code" value="{{$race->country_code}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Date</label>
        <input type="date" class="form-control" id="date" name="date" value="{{$race->date}}" min="2022-01-01" max="2022-12-31">
    </div>
    <div>
        <label for="" class="form-label">Style</label>
        <select class="form-select" name="style" aria-label="">
            <option value="classic" {{($race->style==('classic')) ? "selected" : ""}}>Classic</option>
            <option value="street" {{($race->style==('street')) ? "selected" : ""}}>Street</option>
        </select>
        <label for="" class="form-label">Laps</label>
        <input type="text" class="form-control" id="laps" name="laps" value="{{$race->laps}}">
    </div>

    <a href="/races" class="btn btn-outline-secondary">Cancel</a>
    <button type="submit" class="btn btn-outline-primary">Save</button>
</form>
@endsection
