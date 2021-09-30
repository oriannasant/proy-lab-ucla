@extends('layouts.Menu')

  @section('MenuPrincipal')
    <div class="container"> 
      <h2>EDITAR REGISTROS</h2>

      @if(session('success'))
      <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
          {{ session('success') }}
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times</span>
          </button>
      </div>
      @endif




        <form action="/programs/{{$program->id}}" method="POST">
          @csrf    
          @method('PUT')
        <div class="mb-3">
          <label for="" class="form-label">Código del Programa:</label>
            <input id="name_program" name="name_program" type="text" class="form-control"  value="{{$program->name_program}}">    
          </div>
          
          

        <div class="mb-3">
          <label for="" class="form-label">Descripción del Programa:</label>
            <input id="descrip_program" name="descrip_program" type="text" class="form-control" value="{{$program->descrip_program}}">
          </div>


        

        <div class="mb-3">
          
          <input id="status" name="status" type="hidden" value="{{$program->status}}">


        </div>

        <a href="/programs" class="btn btn-secondary">Cancelar</a>
        <button type="submit" class="btn btn-primary">Guardar</button>
      </form>
    </div>
   
   
  
 
    
  @endsection