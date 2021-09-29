@extends('layouts.Menu')

  @section('MenuPrincipal')

    <div class="container"> 
      <h2 style="margin-top: 20px;">CREAR REGISTROS</h2>
   
      <form method="POST" action="/pensums">
  
        @csrf
        <div class="mb-3">
          <label for="" class="form-label">Código del Programa:</label>
          <input id="id_program" name="id_program" type="number" class="form-control" tabindex="1">    
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
          <input id="status" name="status" type="hidden" value="A">
        </div>
        
        <a href="/pensums" class="btn btn-secondary" tabindex="5">Cancelar</a>
        <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
      </form>
    
    </div>
  
    @endsection