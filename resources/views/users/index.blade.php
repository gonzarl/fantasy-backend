@extends('layouts.plantillabase')

@section('contenido')
<h1>Users</h1>
<div class="d-flex justify-content-end">
    <a href="users/create" class="btn btn-outline-primary">Create new user</a>
</div>

<table class="table table-striped text-center" id="small-table">
    <thead>
        <tr>
            <th scope="col">Name</th>
            <th scope="col">E-mail</th>
            <th scope="col">Rol</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody class="text-center">
        @foreach ($users as $user)
            <tr>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->rol}}</td>
                <td>
                    <a class="btn btn-outline-info" href="/users/{{$user->id}}/edit">Edit</a>
                    <!--button trigger modal -->
                    <button class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#deleteModal" data-bs-id="{{$user->id}}">Delete</button>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
<div class="d-flex justify-content-end">
    {!! $users->links() !!}
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
            You are about to delete a user, do you want to continue deleting?
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <form id="deleteForm" data-bs-action="/users/" action="" method="POST">
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