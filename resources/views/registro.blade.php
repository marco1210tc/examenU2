@extends('layout')

@section('title', 'Registro de alumno')

@section('content')
  <h3 style="width: 100%; text-align: center"> Agregar alumno </h3>

  <div class="form-section">
    <form action="{{ route('alumnos.store') }}" method="POST">
      @include('partials.form', ['btnText' => 'Agregar'])
    </form>
  </div>
@endsection