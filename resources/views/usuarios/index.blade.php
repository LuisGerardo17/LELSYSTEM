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
                            <h3 class="text-center">Usuarios</h3>
                            <a class="btn btn-warning" href="{{route('usuarios.create')}}">Nuevo</a>
                            <table class="table table-striped mt-2">

                                <thead style = "background-color: #6777ef;">
                                  <th style = "display:none;">ID</th>
                                  <th style="color: #ffff;">Nombre</th>
                                  <th style="color: #ffff;">E-mail</th>
                                  <th style="color: #ffff;">Rol</th>
                                  <th style="color: #ffff;">Acciones</th>
                                </thead>
                               <tbody>
                                   @foreach($usuarios as $usuario)
                                     <tr>
                                        <td style ="display: none;">{{$usuario->id}} </td>
                                        <td> {{$usuario->name}}</td>
                                        <td> {{$usuario->email}}</td>
                                         <td> 
                                            @if(!empty($usuario->getRoleNames()))
                                            @foreach($usuario->getRoleNames() as $rolNombre)                                       
                                              <h5><span class="badge badge-dark">{{ $rolNombre }}</span></h5>
                                            @endforeach
                                          @endif
                                        </td>
                                        <td>
                                            <form action="{{route('usuarios.destroy',$usuario->id)}}" method="POST">
                                                @can('editar.usuario')
                                                 <a class= "btn btn-info" href="{{route('usuarios.edit',$usuario->id)}}">Editar</a>   
                                                @endcan   
                                                @csrf
                                                @method('DELETE')
                                                @can('borrar.usuarios')
                                                <button type="submit" class="btn btn-danger" onclick = "return  confirm('¿ Esta seguro de eliminar este Usuario?');">Borrar</button>   
                                                @endcan
                                             
                                               </form>  
                                        </td>
                                    </tr>
                                      
                                 @endforeach

                               </tbod>
                             </table>
                            <div class="pagination justify-content-end">
                            {!!$usuarios->links() !!}

                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

