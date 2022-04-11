@extends('layouts.plantillabase');

@section('contenido')
<h2> CREATE RACE </h2>

<form action="/races" method="POST">
    @csrf
    <div class="mb-3">
        <label for="" class="form-label">City</label>
        <input type="text" class="form-control" id="city" name="city">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Country</label>
        <input type="text" class="form-control" id="country" name="country">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Date</label>
        <input type="date" class="form-control" id="date" name="date" value="2022-04-10" value="2022-01-01" max="2022-12-31">
    </div>
    <div>
        <label for="" class="form-label">Type</label>
        <select class="form-select" aria-label="">
            <option selected value="classic">Classic</option>
            <option value="street">Street</option>
        </select>
    </div>
    <div>
        <a href="/races" class="btn btn-secondary">CANCEL</a>
        <button type="submit" class="btn btn-primary">SAVE</button>
    </div>
</form>
@endsection
