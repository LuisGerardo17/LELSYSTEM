@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">ADMINISTRADOR</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="text-center">Editar Actividad</h3>

                            @if ($errors->any())
                            <div class="alert alert-dark alert-dismissible fade show" role="alert">
                             <strong>!Revise los campos! </strong>  
                              @foreach ($errors->all() as $error)
                                  <span class=" badge badge-danger">{{$error}}</span>
                              @endforeach
                             <button type="button" class="close" data-dismiss="alert" aria-label="Close"> 
                             <span aria-hidden="true">&times;</span> 
                             </button>
                            </div>
                           @endif


                         <form action="{{route('actividades.update', $actividade->id)}}"  method='POST'>
                            @method('PATCH')
                            @csrf
                          
                           <div class="row">
                               <div class="col-xs-12 col-sm-12 col-md-12">
                                   <div class="form-group">
                                     <label for="codigo">Código</label>
                                     <input type="text" name="codigo" class="form-control" value="{{$actividade->codigo}}"> 
                                    </div> 
                               </div>
                              
                               <div class="col-xs-12 col-sm-12 col-md-12">
                                 <div class="form-group">
                                  <label for="nombre">Nombre</label>
                                  <input type="text" name="nombre" class="form-control" value="{{ $actividade->nombre }}"> 
                                 </div> 
                              
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-12">
                                   <div class="form-group">
                                       <label for="descripcion">Descripción</label>
                                       <textarea class="form-control" name="descripcion" style="height:100px">{{ $actividade->descripcion }}</textarea>
                                    </div>
                                </div>
                               <br>
                                 
                             </div>
                           <button type="submit" class="btn btn-primary">Guardar</button>
                         </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

