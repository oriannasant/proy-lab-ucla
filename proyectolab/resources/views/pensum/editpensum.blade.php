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


  <form action="/pensums/{{$pensum->id}}" method="POST" accept-charset="UTF-8" enctype="multipart/form-data">
    @csrf    
    @method('PUT')
    <div class="mb-3">
     
        <label for="" class="form-label">Código del Programa:</label>
       
                        
        <select name="id_program" id="id_program" class="form-control">
                      
          <option value="">Elegir opción</option>
                      
              @foreach ($programs as $program)
                            
                <option value="{{ $program->id}}">{{ $program->name_program }}</option>
               
              @endforeach
                    
        </select>
       
      </div>
     
      
      

    <div class="mb-3">
      <label for="" class="form-label">Descripción:</label>
      <input id="descrip_pensum" name="descrip_pensum" type="text" class="form-control" value="{{$pensum->descrip_pensum}}">
    </div>


    <div class="mb-3">
      <label for="" class="form-label">Fecha:</label>
      <input id="date" name="date" type="date" class="form-control" value="{{$pensum->date}}">
    </div>

    <div class="mb-3">
      <label for="" class="form-label">Código del Departamento:</label>
                          
      <select name="id_departament" id="id_departament" class="form-control">
                    
        <option value="">Elegir opción</option>
                    
            @foreach ($departaments as $departament)
                          
              <option value="{{ $departament->id}}">{{ $departament->name_departament }}</option>
             
            @endforeach
                  
      </select>
    </div>
      
    <div class="mb-3">
      <label for="exampleFormControlFile1">Archivo:</label>
      <input type="file" class="form-control-file" id="archivo" name="archivo" value="{{$pensum->pdf}}"">
    </div>

    <div class="mb-3">
      <input id="status" name="status" type="hidden" value="{{$pensum->status}}">
    </div>

    <a href="/pensums" class="btn btn-secondary">Cancelar</a>
    <button type="submit" class="btn btn-primary">Guardar</button>
  </form>

@endsection
