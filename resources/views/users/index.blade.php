@extends('layouts.plantillabase')

@section('contenido')
<h1>USERS</h1>
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
                    <form action="{{route('users.destroy', $user->id)}}" method="POST">
                    @csrf
                    @method('DELETE')    
                        <a class="btn btn-outline-info" href="/users/{{$user->id}}/edit">Edit</a>
                        <button type="submit" class="btn btn-outline-primary">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
<div class="d-flex justify-content-end">
    {!! $users->links() !!}
</div>
@endsection()