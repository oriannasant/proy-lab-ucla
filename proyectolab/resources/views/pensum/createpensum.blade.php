@extends('layouts.Menu')

  @section('MenuPrincipal')


    <div class="container"> 
      <h2 style="margin-top: 20px;">CREAR REGISTROS</h2>
   
      <form method="POST" action="/pensums" accept-charset="UTF-8" enctype="multipart/form-data">
  
        @csrf
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
          <input id="descrip_pensum" name="descrip_pensum" type="text" class="form-control" tabindex="2">
        </div>

        <div class="mb-3">
          <label for="" class="form-label">Fecha:</label>
          <input id="date" name="date" type="date" class="form-control">
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
          <input type="file" class="form-control-file" id="archivo" name="archivo">
        </div>
        
        <div class="mb-3">
          <input id="status" name="status" type="hidden" value="A">
        </div>
        
        <a href="/pensums" class="btn btn-secondary" tabindex="5">Cancelar</a>
        <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
      </form>
    
    </div>
  
    @endsection