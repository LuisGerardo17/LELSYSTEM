@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">ADMINISTRADOR</h3></h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="text-center">Actividades</h3>
                            @can('crear.curso')
                            <a class="btn btn-warning" href="{{route('actividades.create')}}">Nuevo</a>
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
                               @foreach($actividades as $actividad)
                                     <tr>
                                        <td style ="display: none;">{{$actividad->id}}</td>
                                        <td> {{$actividad->codigo}}</td>
                                        <td> {{$actividad->nombre}}</td>
                                        <td> {{$actividad->descripcion}}</td>
                                        
                                    <td>
                                          <form action="{{route('actividades.destroy',$actividad->id)}}" method="POST">
                                           @can('editar.actividad')
                                            <a class= "btn btn-info" href="{{route('actividades.edit', $actividad->id)}}">Editar</a>   
                                           @endcan   
                                           @csrf
                                           @method('DELETE')
                                           @can('borrar.actividad')
                                           <button type="submit" class="btn btn-danger" onclick = "return  confirm('¿ Esta seguro de eliminar esta Actividad?');">Borrar</button>   
                                           @endcan
                                        
                                          </form>  
                                        </td>
                                    </tr>
                                      
                                 @endforeach

                            </tbody>
                         </table>
                            <div class="pagination justify-content-end">
                            {!!$actividades->links() !!}
                           </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
