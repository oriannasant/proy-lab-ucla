@extends('layouts.Menu')

  @section('MenuPrincipal')

    @if(session('success'))
      <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
          {{ session('success') }}
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times</span>
          </button>
      </div>
    @endif
    
    <div class="container">
     
    
      <!--<a href="programs/create" class="btn btn-primary">CREAR PROGRAMA</a>-->
      <button type="button" class="btn btn-primary" style="margin-top: 20px;" data-bs-toggle="modal" data-bs-target="#ModalCrearDepartamento">
      <i class="fas fa-plus"> Crear Departamento</i>
      </button>
    

      <table class="table table-dark table-striped mt-4">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Nombre del Departamento</th>
            <th scope="col">Descripción del Departamento</th>
            <th scope="col">Acciones</th>
          </tr>
        </thead>
      

      <tbody>    
        @foreach ($departaments as $departament)
        <tr>
                
            <td>{{$departament->id}}</td>
            <td>{{$departament->name_departament}}</td>
            <td>{{$departament->descrip_departament}}</td>
            
            
            <td>
              <form action="{{ route('departaments.destroy',$departament->id) }}" method="POST">
                <a href="/departaments/{{$departament->id}}/edit" class="btn btn-info">Editar</a>         
                    @csrf
                    @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
              
            </form>          
            </td>        
        </tr>
        @endforeach
      </tbody>


      </table>

      <!-- Modal Crear Programa -->
      <div class="modal fade " id="ModalCrearDepartamento" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog ">
          <div class="modal-content bg-dark ">
            <div class="modal-header">
              <h5 class="modal-title" id="staticBackdropLabel">Crear Nuevo Departamento</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <form method="POST" action="/departaments">
  
              @csrf
              <div class="mb-3">
              
                <label for="" class="form-label">Nombre del Departamento:</label>
                <input id="name_departament" name="name_departament" type="text" class="form-control  @error('name_departament') is-invalid @enderror" tabindex="1">    
                @error('name_departament')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{$message}}</strong>
                  </span>
                @enderror
              </div>

              <div class="mb-3">
                <label for="" class="form-label">Descripción del Departamento:</label>
                <input id="descrip_departament" name="descrip_departament" type="text" class="form-control  @error('descrip_departament') is-invalid @enderror" tabindex="2">
                @error('descrip_departament')
                <span class="invalid-feedback" role="alert">
                    <strong>{{$message}}</strong>
                </span>
                @enderror
              </div>
              <div class="mb-3">

                <input id="status" name="status" type="hidden" value="A">
              </div>
              <a href="/departaments" class="btn btn-danger" tabindex="5">Cancelar</a>
              <button type="submit" class="btn btn-success" tabindex="4">Guardar</button>
            </form>
            
            </div>
          </div>
        </div>
      </div>




    </div>
          
  @endsection