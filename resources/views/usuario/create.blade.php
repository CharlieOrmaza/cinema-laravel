@extends('layouts.admin')
@section('content')
    <div class="row">

        <h2 class="page- text-center">Crear Usuario</h2>

        <div class="col-md-6 col-md-offset-1">

            {!! Form::open(['route'=> 'usuario.store', 'method' => 'POST']) !!}
                @include('usuario.forms.user')
                {!! Form::submit('Registrar',['class' => 'btn btn-primary']) !!}
            {!! Form::close() !!}

        </div>
    </div>
@endsection