@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">MODULO ADMINISTRADOR</h3>
         </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                          <div class="row">
                               <div class="col-md-4 col-xl-4">

                                  <div class="card-bg-c-blue order-card">

                                       <div class = "card-block">
                                          <h5>Usuarios</h5>
                                          <h2 class="text-right"><i class="fas fa-users f-left"></i><spn></spn></h2>
                                        <p class="m-b-0 text-right"><a href="/usuarios" class="text-white">Ver más </a></p>
                                       </div>
                                </div>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

