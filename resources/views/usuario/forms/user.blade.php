<div class="form-group">
    {!! Form::label('Nombre') !!}
    {!! Form::text('name',null,['class' => "form-control {{ $errors->has('name') ? ' has-error' : '' }}"]) !!}
    @if ($errors->has('name'))
        <span class="help-block">
            <strong>{{ $errors->first('name') }}</strong>
        </span>
    @endif
</div>
<div class="form-group">
    {!! Form::label('Correo') !!}
    {!! Form::email('email',null,['class' => "form-control {{ $errors->has('email') ? ' has-error' : '' }}"]) !!}
    @if ($errors->has('email'))
        <span class="help-block">
            <strong>{{ $errors->first('email') }}</strong>
        </span>
    @endif
</div>
<div class="form-group">
    {!! Form::label('Password') !!}
    {!! Form::password('password',['placeholder' => 'Ingrese su password','class' => "form-control {{ $errors->has('password') ? ' has-error' : '' }}"]) !!}
    @if ($errors->has('password'))
        <span class="help-block">
            <strong>{{ $errors->first('password') }}</strong>
        </span>
    @endif
</div>