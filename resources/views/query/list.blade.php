@extends('layout')

@section('content')
<div class="container">
    <h1>
        Lista de Usuarios para Select (LIST)
    </h1>
    {!! Form::open() !!}
	{!! Form::select('users', $users, null, ['class' => 'form-control']) !!}
    {!! Form::close() !!}
</div>
@stop
