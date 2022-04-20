<?php

namespace App\Http\Controllers;

use App\Models\Recurso;
use Illuminate\Http\Request;

class RecursosController extends Controller
{
    function __construct()
    {

        $this-> middleware('permission:ver-recurso | crear-recurso | editar-recurso | borrar-recurso', ['only'=>['index']]);
        $this-> middleware('permission:crear-recurso', ['only'=>['create','store']]);
        $this-> middleware('permission:editar-recurso', ['only'=>['edit','update']]);
        $this-> middleware('permission:borrar-recurso', ['only'=>['destroy']]);
    }
   
   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recursos = Recurso::paginate(5);
        return view('recursos.index', compact('recursos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('recursos.crear');
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
        Recurso::create($request->all());
        return redirect()->route('recursos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Recursos  $recursos
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\recursos  $recursos
     * @return \Illuminate\Http\Response
     */
    public function edit(Recurso $recurso)
    {
        return view('recursos.editar', compact('recurso'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\recursos  $recursos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Recurso $recurso)
    {
         request()->validate([
            'codigo' => 'required',
            'nombre' => 'required',
            'descripcion'=> 'required',
        ]);
        $recurso->update($request->all());
        return redirect()->route('recursos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Recurso  $recursos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Recurso $recurso)
    {
        $recurso->delete();
        return redirect()->route('recursos.index');
    }
}
