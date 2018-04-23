@extends('home')

@section('principal')

<div class="container">
    
    <div class="card">
        <h2 class="text-center mt-3 text-primary lead display-5">Datos Personales</h2>
        <hr>
        <div class="row text-center d-flex align-items-center">
            
    @if(!$response_saime)
            <h3>No hay conexión con el Saime</h3>
    @else
    @if($response_saime->r_suc=='true')
            <div class="col-md-2 ml-2">
    @if($response_saime->r_sex == 'm')
                <img src="{{ asset('img/avatarH.png') }}" alt="avatarH" class="img-fluid rounded-circle" width="200px">
    @else
                <img src="{{ asset('img/avatarM.png') }}" alt="avatarM" class="img-fluid rounded-circle" width="200px">
    @endif
            </div>
            
                    <div class="col-md-3">
                        <p>Primer Nombre: {{ $response_saime->r_pno }} </p>
                        <p>Segundo Nombre: {{ $response_saime->r_sno }} </p>
                    </div>

                    <div class="col-md-3">
                        <p>Primer apellido: {{ $response_saime->r_pap }} </p>
                        <p>Segundo apellido: {{ $response_saime->r_sap}} </p>
                    </div>
                               
                    <div class="col-md-3">
                        <p>Cedula: {{ $response_saime->r_dni }} </p>
                        <p>Fecha de nacimiento: {{ $response_saime->r_fna  }} </p>                
                    </div>
@else
            {{ $response_saime->r_msj }}
@endif
@endif
            </div>
@if(!$response_patria)
        <h3>No hay conexión con el webservices de Patria</h3>
@else
@if($response_patria->success=='true')
            <div class="row text-center">
                <div class="col-md-2 ml-5">
                    <div class="form-check mb-4 mx-auto">
                      <input class="form-check-input" type="checkbox" name="patria-check" id="patria-check" checked>
                      <label class="form-check-label" for="">
                        Carnet de la Patria
                      </label>
                    </div>
                </div>               
                    <div class="col-md-3">
                        <p id="codigo">Codigo de Carnet: {{ $response_patria->r_cod }}</p>
                    </div>

                    <div class="col-md-2">
                        <p id="serial">Serial: {{ $response_patria->r_ser }}</p>
                    </div>
                    <div class="col-md-4">
                        <p id="correo">Correo: {{ $response_patria->r_mail }}</p>
                    </div>
                                  
                
            </div>
@else
            <div class="row text-center">
                <div class="ml-5">
                    <div class="form-check disabled mb-4 mx-auto">
                      <input class="form-check-input" type="checkbox" name="" disabled>
                      <label class="form-check-label" for="">
                        {{ $response_patria->mensaje }}
                      </label>
                    </div>
                </div>
            </div>
@endif
@endif
         
    </div>

    <div class="mt-5 d-flex justify-content-center">
        <div class="row">
            
            <div class="col-">
            <div class="alert alert-dismissible fade show card px-5 py-5 ml-2" role="alert">
              <h2><strong>Entidad 1</strong></h2>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              <hr>
              <p class="d-flex" style="width: 200px;">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis, fugiat, alias! Delectus nemo suscipit vero magnam, dignissimos. Sunt porro odio laboriosam, non odit quisquam, ipsam, voluptatem atque rem praesentium pariatur.
              </p>
            </div>
            </div>
            
            
            <div class="col-">
            <div class="alert alert-dismissible fade show card px-5 py-5 ml-2" role="alert">
              <h2><strong>Entidad 2</strong></h2>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              <hr>
              <p class="d-flex" style="width: 200px;">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis, fugiat, alias! Delectus nemo suscipit vero magnam, dignissimos. Sunt porro odio laboriosam, non odit quisquam, ipsam, voluptatem atque rem praesentium pariatur.
              </p>
            </div>
            </div>
            
            
            <div class="col-">
            <div class="alert alert-dismissible fade show card px-5 py-5 ml-2" role="alert">
              <h2><strong>Entidad 3</strong></h2>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              <hr>
              <p class="d-flex" style="width: 200px;">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis, fugiat, alias! Delectus nemo suscipit vero magnam, dignissimos. Sunt porro odio laboriosam, non odit quisquam, ipsam, voluptatem atque rem praesentium pariatur.
              </p>
            </div>
            </div>

            <div class="col-">
            <div class="alert alert-dismissible fade show card px-5 py-5 ml-2" role="alert">
              <h2><strong>Entidad 4</strong></h2>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              <hr>
              <p class="d-flex" style="width: 200px;">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis, fugiat, alias! Delectus nemo suscipit vero magnam, dignissimos. Sunt porro odio laboriosam, non odit quisquam, ipsam, voluptatem atque rem praesentium pariatur.
              </p>
            </div>
            </div>

            <div class="col-">
            <div class="alert alert-dismissible fade show card px-5 py-5 ml-2" role="alert">
              <h2><strong>Entidad 5</strong></h2>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              <hr>
              <p class="d-flex" style="width: 200px;">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis, fugiat, alias! Delectus nemo suscipit vero magnam, dignissimos. Sunt porro odio laboriosam, non odit quisquam, ipsam, voluptatem atque rem praesentium pariatur.
              </p>
            </div>
            </div>

        </div>
    </div>
    

</div>

@endsection
@section('script')
<script src="{{ asset('js/beneficiaries.js') }}"></script>
@endsection
