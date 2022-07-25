@extends('layouts.plantillabase')

@section('contenido')
<h2>Show drivers from team</h2>
<div action="/drivers_in_teams/{{$driversit->id}}" class="card mx-auto" style="width: 18rem;">
    <div class="card-body">
        <h3 class="card-title text-center">{{$team->name}}</h5>
        <h4 class="card-subtitle">Drivers in team:</h6>
        <ul>
            <li>First driver: {{$driverNames["name1"]}}</li>
            <li>Second driver: {{$driverNames["name2"]}}</li>
        </ul>
        <a class="btn btn-outline-info" href="/drivers_in_teams/{{$driversit->id}}/edit">Edit</a>
        <!-- Button trigger modal -->
        <button class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#deleteModal" data-bs-id="{{$driversit->id}}">Delete</button>
        <a class="btn btn-outline-secondary" href="/teams">Go back</a>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Delete</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          You are about to delete, do you want to continue deleting?
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <form id="deleteForm" data-bs-action="/drivers_in_teams/" action="" method="POST">
            @csrf
            @method('DELETE') 
                <button class="btn btn-outline-primary">Yes, delete</button>
            </form>
        </div>
      </div>
    </div>
</div>
<!-- Script del Modal -->
<script>
    var deleteModal = document.getElementById('deleteModal')
    deleteModal.addEventListener('show.bs.modal', function (event) {
        var button = event.relatedTarget
        var id = button.getAttribute('data-bs-id')     
        var deleteForm = deleteModal.querySelector('#deleteForm')
        var action = deleteForm.getAttribute("data-bs-action")
        deleteForm.setAttribute("action",action+id)
    })
</script>
@endsection
