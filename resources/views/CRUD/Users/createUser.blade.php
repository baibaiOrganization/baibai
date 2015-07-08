@extends('plantille')

@section('title')

    baibai creacion de cuentas

@stop

@section('content')


    @include('Complements.messages.errors')
    @include('Complements.messages.message')
    {!! Form::open(['route'=>'createUser','method'=>'POST']) !!}
    @include('Complements.Users.fields')
    {!! Form::submit('Crear Usuario') !!}
    {!! Form::close() !!}

@stop