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
                            <h3 class="text-center">Roles</h3>
                            @can('crear.rol')
                                <a class="btn btn-warning" href="{{route('roles.create')}}">Nuevo</a>
                            
                            @endcan

                    <table class="table table-striped mt-2">
                        <thead style="background-color:#6777ef">
                          <th style="color:#fff">Rol</th>
                          <th style="color:#fff">Acciones</th>
                        </thead>
                        @foreach($roles as $role)
                          <tr>
                            <td>{{$role->name}} </td>
                           
                            <td>
                                    <form action="{{route('roles.destroy',$role->id)}}" method="POST">
                                      @can('editar.rol')
                                      <a class= "btn btn-info" href="{{route('roles.edit',$role->id)}}">Editar</a>   
                                      @endcan   
                                      @csrf
                                      @method('DELETE')
                                      @can('borrar.roles')
                                      <button type="submit" class="btn btn-danger" onclick = "return  confirm('¿ Esta seguro de eliminar este Rol?');">Borrar</button>   
                                       @endcan
                                     </form>  
                               
                            </td>
                          </tr>
                         
                         @endforeach

                     </table>
                           
                        <div class="pagination justify-content-end">
                          {!! $roles->links() !!}
                        </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

