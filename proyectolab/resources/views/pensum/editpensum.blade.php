@extends('layouts.Menu')

@section('MenuPrincipal')
      
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
      <input id="id_program" name="id_program" type="number" class="form-control"  value="{{$pensum->id_program}}">    
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