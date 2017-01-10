@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-2">

            {!! Form::open(['route'=> 'usuario.store', 'method' => 'POST']) !!}
                <div class="form-group">
                    {!! Form::label('Nombre') !!}
                    {!! Form::text('name',null,['placeholder' => 'Ingrese su nombre','class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('Correo') !!}
                    {!! Form::email('email',null,['placeholder' => 'Ingrese su email','class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('Password') !!}
                    {!! Form::password('password',['placeholder' => 'Ingrese su password','class' => 'form-control']) !!}
                </div>
                {!! Form::submit('Registrar',['class' => 'btn btn-primary']) !!}
            {!! Form::close() !!}


            <!--
            <form action="">
                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" class="form-control" name="name">
                </div>
                <div class="form-group">
                    <label for="nombre">Correo</label>
                    <input type="text" class="form-control" name="email">
                </div>
                <div class="form-group">
                    <label for="nombre">Password</label>
                    <input type="password" class="form-control" name="password">
                </div>
                <button class="btn btn-primary">Registrarse</button>
            </form>
            -->
        </div>

    </div>
@endsection