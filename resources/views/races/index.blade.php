@extends('layouts.plantillabase')

@section('contenido')
<h1>Races</h1>
@if (Auth::user()->rol == 'admin')
<div class="d-flex justify-content-end">
    <a href="/races/create" class="btn btn-outline-primary">Create new race</a>
</div>
@endif
<table class="table table-striped text-center">
    <thead>
        <tr>
            <th scope="col">City</th>
            <th scope="col">Date</th>
            <th scope="col">Result</th>
            @if (Auth::user()->rol == 'admin')
                <th scope="col">Actions</th>
            @endif
        </tr>
    </thead>
    <tbody class="text-center">
        @foreach ($races as $race)
            <tr>
                <td>{{$race->city}}</td>
                <td>{{$race->date}}</td>
                <td>
                    @if ($race->finishes->isEmpty())
                        <a class="btn btn-outline-success" href="/finishes/{{$race->id}}/create_result">Create result</a>
                    @else
                        <a class="btn btn-outline-success" href="/finishes/{{$race->id}}/show_result">Show result</a>
                    @endif
                </td>
                @if (Auth::user()->rol == 'admin')
                    <td>
                        <a class="btn btn-outline-success" href="/races/{{$race->id}}">More info</a> 
                        <a class="btn btn-outline-info" href="/races/{{$race->id}}/edit">Edit</a>
                        <!-- button trigger modal -->
                        <button class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#deleteModal" data-bs-id="{{$race->id}}">Delete</button>
                    </td>
                @endif
            </tr>
        @endforeach
    </tbody>
</table>
<div class="d-flex justify-content-end">
    {!! $races->links() !!}
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
          You are about to delete a race, do you want to continue deleting?
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <form id="deleteForm" data-bs-action="/races/" action="" method="POST">
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
@endsection()