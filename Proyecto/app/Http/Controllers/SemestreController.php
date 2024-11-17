<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSemestreRequest;
use App\Http\Requests\UpdateSemestreRequest;
use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;
use App\Models\Semestre;
use Carbon\Carbon;

class SemestreController extends Controller
{

    public function index()
    {
        $semestres = Semestre::all();  // Obtiene todos los semestres
        return view('semestres.index', compact('semestres'));  // Muestra la vista con la lista de semestres
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('semestres.create');  // Muestra el formulario de creación
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSemestreRequest $request)
    {
$request->validate([
            'id_semestre' => 'required',
            'nombre' => 'required',
            'fecha_inicio' => 'required|date',
            'fecha_fin' => 'required|date',
        ]);

        // Crear el semestre y convertir las fechas a objetos Carbon
        $semestre = new Semestre();
        $semestre->id_semestre = $request->id_semestre;
        $semestre->nombre = $request->nombre;
        $semestre->fecha_inicio = Carbon::parse($request->fecha_inicio);
        $semestre->fecha_fin = Carbon::parse($request->fecha_fin);
        $semestre->save();

        // Redirige con mensaje de éxito
        return redirect()->route('semestres.index')->with('success', 'Semestre creado exitosamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Semestre $semestre)
    {
        return view('semestres.show', compact('semestre'));  // Muestra los detalles de un semestre
    }

    /**
     * Show the form for editing the specified resource.
     */
public function edit($id_semestre)
{
    // Buscar el semestre por el 'id_semestre'
    $semestre = Semestre::find($id_semestre);

    // Si no se encuentra el semestre, redirigir con mensaje de error
    if (!$semestre) {
        return redirect()->route('semestres.index')->with('error', 'Semestre no encontrado');
    }

    // Convertir las fechas a instancias de Carbon
    $semestre->fecha_inicio = Carbon::parse($semestre->fecha_inicio);
    $semestre->fecha_fin = Carbon::parse($semestre->fecha_fin);

    return view('semestres.edit', compact('semestre'));
}

public function update(UpdateSemestreRequest $request, $id_semestre)
{
    // Usa 'where' explícitamente para especificar el nombre correcto de la columna
    $semestre = Semestre::where('id_semestre', $id_semestre)->first();

    if ($semestre) {
        $semestre->nombre = $request->nombre;
        $semestre->fecha_inicio = Carbon::parse($request->fecha_inicio);
        $semestre->fecha_fin = Carbon::parse($request->fecha_fin);
        $semestre->save();

        return redirect()->route('semestres.index')->with('success', 'Semestre actualizado exitosamente');
    }

    return redirect()->route('semestres.index')->with('error', 'Semestre no encontrado');
}
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Semestre $semestre)
    {
        // Elimina el semestre
        $semestre->delete();

        // Redirige con mensaje de éxito
        return redirect()->route('semestres.index')->with('success', 'Semestre eliminado exitosamente');
    }
}
