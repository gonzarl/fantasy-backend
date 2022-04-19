@extends('layouts.plantillabase')

@section('contenido')
<h2> CREATE FINISHES </h2>

<form action="/finishes" method="POST">
    @csrf
    <div class="mb-3">
        <label for="" class="form-label">Race ID</label>
        <input type="text" class="form-control" id="race_id" name="race_id" value="{{$id}}" readonly>
    </div>
    <div class="mb-3">
        <label for="" class="form-label">First driver id</label>
        <input type="text" class="form-control" id="driver_1_id" name="driver_1_id">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Second driver id</label>
        <input type="text" class="form-control" id="driver_2_id" name="driver_2_id">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Third driver id</label>
        <input type="text" class="form-control" id="driver_3_id" name="driver_3_id">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Fourth driver id</label>
        <input type="text" class="form-control" id="driver_4_id" name="driver_4_id">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Fifth driver id</label>
        <input type="text" class="form-control" id="driver_5_id" name="driver_5_id">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Sixth driver id</label>
        <input type="text" class="form-control" id="driver_6_id" name="driver_6_id">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Seventh driver id</label>
        <input type="text" class="form-control" id="driver_7_id" name="driver_7_id">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Eight driver id</label>
        <input type="text" class="form-control" id="driver_8_id" name="driver_8_id">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Nineth driver id</label>
        <input type="text" class="form-control" id="driver_9_id" name="driver_9_id">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Tenth driver id</label>
        <input type="text" class="form-control" id="driver_10_id" name="driver_10_id">
    </div>
    <div>
        <a href="/races" class="btn btn-secondary">CANCEL</a>
        <button type="submit" class="btn btn-primary">SAVE</button>
    </div>
</form>
@endsection
