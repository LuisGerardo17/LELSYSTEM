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
                            <h3 class="text-center">Usuarios</h3>
                            <a class="btn btn-warning" href="{{route('usuarios.create')}}">Nuevo</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
