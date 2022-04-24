@extends('layouts.plantillabase')

@section('contenido')
<h2>Create race</h2>
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
<form action="/races" method="POST">
    @csrf
    <div class="mb-3">
        <label for="" class="form-label">City</label>
        <input type="text" class="form-control" id="city" name="city" value="{{ old('city') }}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Country</label>
        <input type="text" class="form-control" id="country" name="country" value="{{ old('country') }}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Date</label>
        <input type="date" class="form-control" id="date" name="date" value="{{ old('date') }}" min="2022-01-01" max="2022-12-31">
    </div>
    <div>
        <label for="" class="form-label">Style</label>
        <select name="style" class="form-select" aria-label="">
            <option selected value="classic">Classic</option>
            <option value="street">Street</option>
        </select>
    </div>
    <div>
        <a href="/races" class="btn btn-outline-secondary">Cancel</a>
        <button type="submit" class="btn btn-outline-primary">Save</button>
    </div>
</form>
@endsection
