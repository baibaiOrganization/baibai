@extends('plantille')

@section('title')
    baibai usuarios
@stop

@section('content')

    @include('Complements.messages.message')
    <p>Hay {{$users->lastPage()}} paginas</p>
    <p>Hay {{$users->total()}} registros</p>
    <p>Hay {{$users->count()}} registros</p>
    <a href="{{route('createUser')}}">Crear un nuevo usuario</a>
    @include('Complements.Users.search')
    @include('Complements.Users.table')
    {!!$users->appends(Request::only(['name','type']))->render()!!}

@stop