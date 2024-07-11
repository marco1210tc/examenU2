@extends('layout')

@section('title', 'Listado alumnos')

@section('content')
  <h1> Listado de alumnos </h1>  
  
  <div>
    @if ($alumnos)
      <table class="table">
        <thead>
          <tr>
            <th> # </th>
            <th> Nombre </th>
          </tr>
        </thead>
        <tbody>
          @foreach($alumnos as $alumno)
            <tr>
              <td> {{ $alumno['id'] }} </td>
              <td> <a href="{{ route('alumnos.show', $alumno->id) }}"> {{ $alumno->cAluNombre }} </a> </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    @else
      <h3> No existen alumnos que mostrar </h3>
    @endif
  </div>
@endsection