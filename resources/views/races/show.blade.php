@extends('layouts.plantillabase')

@section('contenido')
<div action="/races/{{$race->id}}" class="card mx-auto" style="width: 25rem;">
    @if ($image!=null)
        <img src="{{$image->path}}" class="card-img-top mx-auto" id="race-circuit" alt="{{$race->city}} circuit">
    @endif
    <div class="card-body">
        <h5 class="card-title text-center">{{$race->city}}</h5>
        <h6 class="card-subtitle">Full description</h6>
        <ul>
            <li>Country: {{$race->country}}</li>
            <li>Country code: {{$race->country_code}}</li>
            <li>Date: {{$race->date}}</li>
            <li>Style: {{$race->style}}</li>
            <li>Laps: {{$race->laps}}</li>
        </ul>
        <div class="container text-center">
            <a class="btn btn-outline-info" href="/races/{{$race->id}}/edit">Edit</a>
            <a class="btn btn-outline-secondary" href="/races">Go back</a>
            @if ($image!=null)
                <!-- Button trigger modal -->
                <button class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#deleteModal" data-bs-id="{{$image->id}}">Delete image</button>
            @else
                <div class="mt-4">
                    <form method="POST" action="/race_image" enctype="multipart/form-data">
                        @csrf
                        <div class="container mx-auto my-3">
                            <label for="file" class="my-2 d-flex">Upload race picture</label>
                            <input type="file" id="inputImage" name="image" class="form-control" accept="image/*" onchange="activateButton()">
                            <input type="hidden" name="race_id" class="form-control" value="{{ $race->id }}">
                        </div>
                        <div class="col-sm-2 mt-2">
                            <button type="submit" id="uploadButton" class="btn btn-outline-success" disabled>Upload</button>
                        </div>
                    </form>
                </div>
            @endif
        </div>
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
          You are about to delete the race circuit picture, do you want to continue deleting?
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
            @if ($image!=null)
                <form id="deleteForm" data-bs-action="/race_image/" action="" method="POST">
                @csrf
                @method('DELETE') 
                    <button class="btn btn-outline-primary">Yes, delete</button>
                </form>
            @endif
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

<!-- Script para habilitar boton de subir imagen -->
<script>
    function activateButton(){
        let fileInput = document.getElementById("inputImage");
        let uploadButton = document.getElementById("uploadButton");

        if (fileInput.value.length < 4){
            uploadButton.disabled = true;
        }else{
            uploadButton.disabled = false;
        }
    }
</script>

@endsection