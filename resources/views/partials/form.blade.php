@csrf
<div class="form">
  <div class="form-group">
    <label for="cAluNombre"> Nombre: </label>
    <input type="text" name="cAluNombre" value="{{ old('cAluNombre', $alumno->cAluNombre) }}">
    {{ $errors->first('cAluNombre') }}
  </div>
  <div class="form-group">
    <label for="cAluCurso"> Curso: </label>
    <input type="text" name="cAluCurso" value="{{ old('cAluCurso', $alumno->cAluCurso) }}">
    {{ $errors->first('cAluCurso') }}
  </div>
  <div class="form-group">
    <label for="nAluNota1"> Nota 1: </label>
    <input type="number" step="0.01" min="0" max="20" name="nAluNota1" value="{{ old('nAluNota1', $alumno->nAluNota1) }}">
    {{ $errors->first('nAluNota1') }}
  </div>
  <div class="form-group">
    <label for="nAluNota2"> Nota 2: </label>
    <input type="number" step="0.01" min="0" max="20" name="nAluNota2" value="{{ old('nAluNota2', $alumno->nAluNota2) }}">
    {{ $errors->first('nAluNota2') }}
  </div>

  <div class="form-group">
    <button type="submit" class="btn btn-send"> {{ $btnText }} </button>
  </div>
  
</div>