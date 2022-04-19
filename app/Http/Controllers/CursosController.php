<?php

namespace App\Http\Controllers;

use App\Models\cursos;
use Illuminate\Http\Request;


class CursosController extends Controller
{
     
    function __construct()
    {

        $this-> middleware('permission:ver-curso | crear-curso | editar-curso | borrar-curso', ['only'=>['index']]);
        $this-> middleware('permission:crear-curso', ['only'=>['create','store']]);
        $this-> middleware('permission:editar-curso', ['only'=>['edit','update']]);
        $this-> middleware('permission:borrar-curso', ['only'=>['destroy']]);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cursos = cursos::paginate(5);
        return view('cursos.index', compact('cursos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cursos.crear');   
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
            'codigo' => 'required|codigo|unique:cursos,codigo',
            'nombre' => 'required',
            'descripcion'=> 'required'
        ]);
        cursos::create($request->all());
        return redirect()->route('cursos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\cursos  $cursos
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\cursos  $cursos
     * @return \Illuminate\Http\Response
     */
    public function edit(cursos $cursos)
    {
        return view('cursos.editar', compact('cursos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @param  \App\Models\cursos  $cursos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, cursos $cursos)
    {
        request()->validate([
            'codigo' => 'required|codigo|unique:cursos,codigo',
            'nombre' => 'required',
            'descripcion'=> 'required',
        ]);
        $cursos->update($request->all());
        return redirect()->route('cursos.index');
              
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\cursos  $cursos
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(cursos $cursos)
    {
        $cursos->delete();
        return redirect()->route('cursos.index');
                
    }
}
