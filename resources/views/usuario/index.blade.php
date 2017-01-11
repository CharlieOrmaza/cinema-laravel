@extends('layouts.admin')

@if(Session::has('message-success'))
    <div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <strong>{{ session('message-success') }}</strong>
    </div>
@endif

@section('content')

    <h2 class="text-center page-header"> Listado de Usuarios</h2>

    <table class="table">
        <thead>
            <th>Nombre</th>
            <th>Email</th>
            <th>Opciones</th>
        </thead>
        <tbody>

        @foreach($usuarios as $user)
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>
                    {!! link_to_route('usuario.edit', 'Editar', $parameters = ['id' => $user->id], $attributes = ['class' => 'btn btn-primary']) !!}
                    <br>
                    {!! Form::open(['route' => ['usuario.destroy', $user->id],'method'=>'DELETE']) !!}
                    {!! Form::submit('Delete',['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection