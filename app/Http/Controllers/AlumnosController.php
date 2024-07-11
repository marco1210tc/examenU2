<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alumno;
use App\Http\Requests\CreateAlumnoRequest;

class AlumnosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $alumnos = Alumno::get();
        return view('index', compact('alumnos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Alumno $alumno)
    {
        return view('registro', ['alumno' => new Alumno]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateAlumnoRequest $request)
    {
        Alumno::create($request->validated());
        return redirect(route('alumnos.index'));
    }   

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $alumno = Alumno::find($id);
        $nota1 = $alumno->nAluNota1; 
        $nota2 = $alumno->nAluNota2;
        $promedio = calcularPromedio($nota1, $nota2);
        $condicion = calcularCondicion($promedio);
        $condicionDescripcion = ($condicion) ? 'Aprobado' : 'Desaprobado';

        return view('show', [
            'alumno' => $alumno, 
            'promedio' => $promedio, 
            'condicion' => $condicionDescripcion
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
