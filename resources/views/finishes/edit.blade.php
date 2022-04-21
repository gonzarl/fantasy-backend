@extends('layouts.plantillabase')

@section('contenido')
<h2>EDIT FINISHES </h2>

<form action="/finishes/{{$finish->id}}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="" class="form-label">Race</label>
        <input type="text" class="form-control" id="race_id" name="race_id" value="{{$finish->race_id}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">First driver</label>
        <input type="text" class="form-control" id="driver_1_id" name="driver_1_id" value="{{$finish->driver_1_id}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Second driver</label>
        <input type="text" class="form-control" id="driver_2_id" name="driver_2_id" value="{{$finish->driver_2_id}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Third driver</label>
        <input type="text" class="form-control" id="driver_3_id" name="driver_3_id" value="{{$finish->driver_3_id}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Fourth driver</label>
        <input type="text" class="form-control" id="driver_4_id" name="driver_4_id" value="{{$finish->driver_4_id}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Fifth driver</label>
        <input type="text" class="form-control" id="driver_5_id" name="driver_5_id" value="{{$finish->driver_5_id}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Sixth driver</label>
        <input type="text" class="form-control" id="driver_6_id" name="driver_6_id" value="{{$finish->driver_6_id}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Seventh driver</label>
        <input type="text" class="form-control" id="driver_7_id" name="driver_7_id" value="{{$finish->driver_7_id}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Eight driver</label>
        <input type="text" class="form-control" id="driver_8_id" name="driver_8_id" value="{{$finish->driver_8_id}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Nineth driver</label>
        <input type="text" class="form-control" id="driver_9_id" name="driver_9_id" value="{{$finish->driver_9_id}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Tenth driver</label>
        <input type="text" class="form-control" id="driver_10_id" name="driver_10_id" value="{{$finish->driver_10_id}}"> 
    </div>
    <div>
        <a href="/races" class="btn btn-outline-secondary">CANCEL</a>
        <button type="submit" class="btn btn-outline-primary">SAVE</button>
    </div>
</form>
@endsection
