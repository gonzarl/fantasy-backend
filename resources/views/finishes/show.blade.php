@extends('layouts.plantillabase')

@section('contenido')
<h2>Grid finish result</h2>
<div action="/finishes/{{$finish->id}}" class="card mx-auto" style="width: 18rem;">
    <div class="card-body">
        <h4 class="card-title">{{$race->city}}</h6>
        <ol>
            @foreach ($names as $name)
                <li>{{$name}}</li>
            @endforeach
        </ol>
        <a class="btn btn-outline-info" href="/finishes/{{$finish->id}}/edit">Edit</a>
        <!-- Button trigger modal -->
        <button type="submit" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#deleteModal" data-bs-id="{{$finish->id}}">Delete</button>
        <a class="btn btn-outline-secondary" href="/races">Go back</a>
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
          You are about to delete a result, do you want to continue deleting?
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <form id="deleteForm" data-bs-action="/finishes/" action="" method="POST">
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
