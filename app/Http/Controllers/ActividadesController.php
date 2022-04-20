<?php

namespace App\Http\Controllers;

use App\Models\Actividad;
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
        $actividades = Actividad::paginate(5);
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
            'codigo' => 'required',
            'nombre' => 'required',
            'descripcion'=> 'required',
        ]);
        Actividad::create($request->all());
        return redirect()->route('actividades.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Acctividad  $actividades
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Actividad  $actividades
     * @return \Illuminate\Http\Response
     */
    public function edit(Actividad $actividad)
    {
        return view('actividades.editar', compact('actividad'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Actividad  $actividades
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Actividad $actividad)
    {
        request()->validate([
            'codigo' => 'required',
            'nombre' => 'required',
            'descripcion'=> 'required',
        ]);
        $actividad->update($request->all());
        return redirect()->route('actividades.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Actividad  $actividades
     * @return \Illuminate\Http\Response
     */
    public function destroy(Actividad $actividad)
    {
        $actividad->delete();
        return redirect()->route('actividades.index');
    }
}
