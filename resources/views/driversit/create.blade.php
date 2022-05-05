@extends('layouts.plantillabase')

@section('contenido')
<h2>Select drivers for team {{$team->name}}</h2>
@if ($errors->any())
        <div class="alert alert-danger">
            <h3>Some error ocurred:</h3>
            <ul>
                <li>The drivers must be different</li>
            </ul>
        </div>
@endif
<div id="errorBudget" class="alert alert-dismissible alert-primary text-center" hidden>
    <p>Error: el valor de los pilotos sobrepasa el budget de 1.000.000 USD</p>
</div>
<form action="/drivers_in_teams" method="POST">
    @csrf
    <div class="mb-3">
        <label for="" class="form-label" hidden>Team</label>
        <input type="text" class="form-control" id="team_id" name="team_id" value="{{$team->id}}" hidden>
    </div>
    <div class="mb-3">
        <label for="" class="form-label">First driver</label>
        <select id="driver1" name="driver_1_id" class="form-control rounded-0" value="{{ old('driver_1_id') }}" onchange="checkBudget()">
            @foreach ($drivers as $driver)
                <option x-data-price="{{$driver->value}}" value="{{$driver->id}}">{{$driver->name}} - {{$driver->value}} USD</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Second driver</label>
        <select id="driver2" name="driver_2_id" class="form-control rounded-0" value="{{ old('driver_2_id') }}" onchange="checkBudget()">
            @foreach ($drivers as $driver)
                <option x-data-price="{{$driver->value}}" value="{{$driver->id}}">{{$driver->name}} - {{$driver->value}} USD</option>
            @endforeach
        </select>
    </div>
    <div>
        <a href="/teams" class="btn btn-outline-secondary">Cancel</a>
        <button id="saveButton" type="submit" class="btn btn-outline-primary">Save</button>
    </div>
</form>

<script>
    function checkBudget(){
        let driver1 = document.getElementById("driver1");
        let driver2 = document.getElementById("driver2");
        let hidden_element = document.getElementById("errorBudget");
        let save_button = document.getElementById("saveButton");

        driver1_price = parseInt(driver1.options[driver1.selectedIndex].getAttribute('x-data-price'));
        driver2_price = parseInt(driver2.options[driver2.selectedIndex].getAttribute('x-data-price'));

        if (driver1_price+driver2_price>1000000){
           hidden_element.hidden = false;
           save_button.disabled = true;
        }else{
            hidden_element.hidden = true;
            save_button.disabled = false;
        }
    }
</script>
@endsection
