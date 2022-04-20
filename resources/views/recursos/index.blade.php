@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">ADMINISTRADROR</h3></h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="text-center">Recursos</h3>
                            @can('crear.curso')
                            <a class="btn btn-warning" href="{{route('recursos.create')}}">Nuevo</a>
                            @endcan
                          
                         <table class="table table-striped mt-2">

                                <thead style = "background-color: #6777ef;">
                                  <th style = "display:none;">ID</th>
                                  <th style="color: #ffff;">Código</th>
                                  <th style="color: #ffff;">Nombre</th>
                                  <th style="color: #ffff;">Descripción</th>
                                  <th style="color: #ffff;">Acciones</th>
                                </thead>
                            <tbody>
                               @foreach($recursos as $recurso)
                                     <tr>
                                        <td style ="display: none;">{{$recurso->id}}</td>
                                        <td> {{$recurso->codigo}}</td>
                                        <td> {{$recurso->nombre}}</td>
                                        <td> {{$recurso->descripcion}}</td>
                                        
                                    <td>
                                          <form action="{{route('recursos.destroy',$recurso->id)}}" method="POST">
                                           @can('editar.recurso')
                                            <a class= "btn btn-info" href="{{route('recursos.edit',$recurso->id)}}">Editar</a>   
                                           @endcan   
                                           @csrf
                                           @method('DELETE')
                                           @can('borrar.recursos')
                                           <button type="submit" class="btn btn-danger">Borrar</button>   
                                           @endcan
                                        
                                          </form>  
                                        </td>
                                    </tr>
                                      
                                 @endforeach

                            </tbody>
                         </table>
                            <div class="pagination justify-content-end">
                            {!!$recursos->links() !!}
                           </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
