@extends('layout')

@section('title', 'Consultar')

@section('contenido')

<h1>Consulta de usuarios</h1>



<p>{{ "Nombre: " . $users->nombre . " Apellido: " . $users->apellido . " Y vivo en: " . $users->direccion }}</p>


@endsection