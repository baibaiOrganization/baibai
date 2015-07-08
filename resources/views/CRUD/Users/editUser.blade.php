@extends('plantille')

@section('title')

    baibai creacion de cuentas

@stop

@section('content')


    @include('Complements.messages.errors')
    @include('Complements.messages.message')
    {!! Form::model($user,['route'=>['updateUser',$user],'method'=>'POST']) !!}
    @include('Complements.Users.fields')
    {!! Form::submit('Actualizar Usuario') !!}
    {!! Form::close() !!}

@stop