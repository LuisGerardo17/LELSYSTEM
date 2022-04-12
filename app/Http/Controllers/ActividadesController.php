<?php

namespace App\Http\Controllers;

use App\Models\actividades;
use Illuminate\Http\Request;

class ActividadesController extends Controller
{
        
    function __construct()
    {

        $this-> middleware('permission:ver-actividad | crear-actividad | editar-actividad | borrar-actividad', ['only'=>['index']]);
        $this-> middleware('permission:crear-actividad', ['only'=>['create','store']]);
        $this-> middleware('permission:editar-actividad', ['only'=>['edit','update']]);
        $this-> middleware('permission:borrar-actividad', ['only'=>['destroy']]);
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $actividades = Actividades::paginate(5);
        return view('actividades.index', compact('actividades'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('actividades.crear');   
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        request()->validate([
            'codigo_actividad' => 'required|codigo_actividad|unique:actividades,codigo_actividad',
            'nombre_curso' => 'required',
            'descripcion'=> 'required',
        ]);
        Actividades::create($request->all());
        return redirect()->route('actividades.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\actividades  $actividades
     * @return \Illuminate\Http\Response
     */
    public function show(actividades $actividades)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\actividades  $actividades
     * @return \Illuminate\Http\Response
     */
    public function edit(actividades $actividades)
    {
        return view('actividades.editar', compact('actividades'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\actividades  $actividades
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, actividades $actividades)
    {
        request()->validate([
            'codigo_actividad' => 'required|codigo_actividad|unique:actividades,codigo_actividad',
            'nombre_actividad' => 'required',
            'descripcion'=> 'required',
        ]);
        $actividades->update($request->all());
        return redirect()->route('actividades.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\actividades  $actividades
     * @return \Illuminate\Http\Response
     */
    public function destroy(actividades $actividades)
    {
        $actividades->delete();
        return redirect()->route('actividades.index');
    }
}
