@extends('home')

@section('principal')
    @if(session()->has('info'))
    <div class="alert alert-warning text-lead text-center mt-5" role="alert">{{ session('info') }}
    </div> 
    @endif

    <div class="container">
    <div class="row d-flex justify-content-center">
    <div class="col-12 
                  col-md-6
                  col-lg-6
                  col-xl-6
                  bg-form">
    
    <h2 class="text-center my-4">Consultar Beneficiario</h2>
    <form class="form" method="POST" action="{{ route('beneficiaries.show') }}">
        <div class="form-group mt-3">
            <label for="">Cedula</label>
            <div class="d-flex justify-content-around">
                <select class="form-control w-25 custom-select ml-2" name="nacionalidad">
                        <option>V</option>
                        <option>E</option>
                <input type="text" name="cedula" class="form form-control mx-2" placeholder="Ejemplo: 12345678" required>
                </select>
            </div>
           

        </div>
        <div class="form-group mt-3">
            <label for="">Codigo Carnet</label>
           <div class="d-flex justify-content-around">
                <input type="text" name="codigo" class="form form-control mx-2" placeholder="Ejemplo: 0001111111" required>
           </div>
        </div>
  
        <div class="text-center">
            <input type="submit" class="btn btn-primary mr-3 my-4" value="CONSULTAR">
        </div>
        {{ csrf_field() }}
    </form>
    
    </div>
</div>
</div>

@endsection