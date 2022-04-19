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
                            <h3 class="text-center">Cursos</h3>
                            @can('crear.curso')
                                
                            @endcan
                            <a class="btn btn-warning" href="{{route('cursos.create')}}">Nuevo</a>
                         <table class="table table-striped mt-2">

                                <thead style = "background-color: #6777ef;">
                                  <th style = "display:none;">ID</th>
                                  <th style="color: #ffff;">Código</th>
                                  <th style="color: #ffff;">Nombre</th>
                                  <th style="color: #ffff;">Descripción</th>
                                  <th style="color: #ffff;">Acciones</th>
                                </thead>
                            <tbody>
                               @foreach($cursos as $curso)
                                     <tr>
                                        <td style ="display: none;">{{$curso->id}} </td>
                                        <td> {{$curso->codigo_curso}}</td>
                                        <td> {{$curso->nombre_curso}}</td>
                                        <td> {{$curso->descripcion}}</td>
                                        
                                        <td>
                                          <form action="{{route('cursos.destroy',$curso->id)}}" method="POST">
                                           @can('editar.curso')
                                            <a class= "btn btn-info" href="#" title="{{route('cursos.edit',$curso->id)}}">Editar</a>   
                                           @endcan   
                                           @csrf
                                           @method('DELETE')
                                           @can('borrar.cursos')
                                           <button type="submit" class="btn btn-danger">Borrar</button>   
                                           @endcan
                                        
                                          </form>  
                                        </td>
                                    </tr>
                                      
                                 @endforeach

                            </tbody>
                         </table>
                            <div class="pagination justify-content-end">
                            {!!$cursos->links() !!}
                           </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
