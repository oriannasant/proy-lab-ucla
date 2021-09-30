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
      <button type="button" class="btn btn-primary" style="margin-top: 20px;" data-bs-toggle="modal" data-bs-target="#ModalCrearPrograma">
      <i class="fas fa-plus"> Crear Programa</i>
      </button>
    

      <table class="table table-dark table-striped mt-4">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Nombre del Programa</th>
            <th scope="col">Descripción del Programa</th>
            <th scope="col">Acciones</th>
          </tr>
        </thead>
      

      <tbody>    
        @foreach ($programs as $program)
        <tr>
                
            <td>{{$program->id}}</td>
            <td>{{$program->name_program}}</td>
            <td>{{$program->descrip_program}}</td>
            
            
            <td>
              <form action="{{ route('programs.destroy',$program->id) }}" method="POST">
                <a href="/programs/{{$program->id}}/edit" class="btn btn-info">Editar</a>         
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
      <div class="modal fade " id="ModalCrearPrograma" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog ">
          <div class="modal-content bg-dark ">
            <div class="modal-header">
              <h5 class="modal-title" id="staticBackdropLabel">Crear Nuevo Programa</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <form method="POST" action="/programs">
  
              @csrf
              <div class="mb-3">
              
                <label for="" class="form-label">Nombre del Programa:</label>
                <input id="name_program" name="name_program" type="text" class="form-control  @error('name_program') is-invalid @enderror" tabindex="1">    
                @error('name_program')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{$message}}</strong>
                  </span>
                @enderror
              </div>

              <div class="mb-3">
                <label for="" class="form-label">Descripción del Programa:</label>
                <input id="descrip_program" name="descrip_program" type="text" class="form-control  @error('descrip_program') is-invalid @enderror" tabindex="2">
                @error('descrip_program')
                <span class="invalid-feedback" role="alert">
                    <strong>{{$message}}</strong>
                </span>
                @enderror
              </div>
              <div class="mb-3">

                <input id="status" name="status" type="hidden" value="A">
              </div>
              <a href="/programs" class="btn btn-danger" tabindex="5">Cancelar</a>
              <button type="submit" class="btn btn-success" tabindex="4">Guardar</button>
            </form>
            
            </div>
          </div>
        </div>
      </div>




    </div>
          
  @endsection