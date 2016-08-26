@extends('layout')

@section('title', 'Consultar')

@section('contenido')

<h1>Consulta de usuarios</h1>



@foreach($users as $user)

<li>{{ $user->nombre }}</li>

@endforeach

@endsection                                                                 