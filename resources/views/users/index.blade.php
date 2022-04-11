@extends('layouts.plantillabase');

@section('contenido')
<h1>USERS</h1>

<table class="table table-striped text-center">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">E-mail</th>
            <th scope="col">Password</th>
            <th scope="col">Rol</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody class="text-center">
        @foreach ($users as $user)
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->password}}</td>
                <td>{{$user->rol}}</td>
                <td>
                    <a class="btn btn-info" href="/users/{{$user->id}}/edit">Edit</a>
                    <button class="btn btn-primary">Delete</button>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
<div class="d-flex justify-content-end">
    {!! $users->links() !!}
</div>

<a href="users/create" class="btn btn-primary">CREATE</a>
@endsection()