@extends('layout')

@section('title', 'Alumno' . $alumno->cAluNombre)

@section('content')
  <h2> Datos </h2>
  <h4> Alumno {{$alumno->id}} </h4>

  <p><b> Nombre: </b> {{ $alumno->cAluNombre }}</p>
  <p><b> Curso: </b>{{ $alumno->cAluCurso }}</p>
  <p><b> Nota 1: </b>{{ $alumno->nAluNota1 }}</p>
  <p><b> Nota 2: </b>{{ $alumno->nAluNota2 }}</p>
  <p><b> Promedio: </b>{{ $promedio }}</p>
  <p><b> Condición: </b>{{ $condicion }}</p>
  <p><b> Fecha de Registro: </b>{{ $alumno->created_at }}</p>

  <a href="{{ route('alumnos.index')}}"> << Retornar a vista principal </a>

@endsection