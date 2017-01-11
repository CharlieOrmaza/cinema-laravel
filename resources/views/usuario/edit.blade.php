@extends('layouts.admin')
@section('content')
    <div class="row">

        <h2 class="page-header text-center">Editar Usuario</h2>
        <div class="col-md-6 col-md-offset-1">

        {!! Form::model($user, ['route' => ['usuario.update', $user->id],'method'=>'PUT']) !!}
            @include('usuario.forms.user')
        {!! Form::submit('Actualizar',['class' => 'btn btn-primary']) !!}
        {!! Form::close() !!}
        </div>
    </div>
@endsection