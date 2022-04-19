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
                            <h3 class="text-center">Crear Curso</h3>

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
                        <form action="{{route('cursos.store')}}" method="POST">
                               @csrf
                             <div class="row">
                                  <div class="col-xs-12 col-sm-12 col-md-12">
                                       <div class="form-group">
                                         <label for="codigo">Codigo</label>
                                           <input type="text" class="form-control"  name="codigo">
                                      </div> 
                                  </div>
                               
                                  <div class="col-xs-12 col-sm-12 col-md-12">
                                      <div class="form-group">
                                         <label for="nombre">Nombre</label>
                                         <input type="text" class="form-control"  name="nombre">
                                      </div> 
                                  </div>
                                  
                                  <div class="col-xs-12 col-sm-12 col-md-12">
                                      <div class="form-group">
                                          <label for="descripcion">Descripcion</label>
                                          <input type="text" class="form-control"  name="descripcion">
                                       </div> 
                                  </div>
                                 
                            </div>  

                               
                           </form>
                    
                           
                               <button type="submit" class="btn btn-primary">Guardar</button>
                        

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

