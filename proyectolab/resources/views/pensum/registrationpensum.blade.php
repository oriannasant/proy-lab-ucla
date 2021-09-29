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

      <a href="pensums/create" class="btn btn-primary" style="margin-top: 20px;">CREAR</a>

      <!-- Button trigger modal -->
      <button type="button" class="btn btn-primary" style="margin-top: 20px;" data-bs-toggle="modal" data-bs-target="#ModalCrearPensum">
        Crear Pensum
      </button>

      <table class="table table-dark table-striped mt-4">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Código del Programa</th>
            <th scope="col">Descripción del Pensum</th>
            <th scope="col">Fecha</th>
            <th scope="col">Acciones</th>
          </tr>
        </thead>
  

        <tbody>    
          @foreach ($pensums as $pensum)
          <tr>
                  
            <td>{{$pensum->id}}</td>
            <td>{{$pensum->id_program}}</td>
            <td>{{$pensum->descrip_pensum}}</td>
            <td>{{$pensum->date}}</td>
              
            <td>
              <form action="{{ route('pensums.destroy',$pensum->id) }}" method="POST">
                <a href="/pensums/{{$pensum->id}}/edit" class="btn btn-info">Editar</a>         
                  @csrf
                  @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
                
              </form>          
            </td>        
          </tr>
          @endforeach

        </tbody>
      </table>

      <!-- Modal -->
      <div class="modal fade" id="ModalCrearPensum" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="staticBackdropLabel">Crear Nuevo Pensum</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
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
                
                <a class="btn btn-secondary text-white" data-bs-dismiss="modal" tabindex="5">Cancelar</a>
                <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
              </form>
            
            </div>
          </div>
        </div>
      </div>



    </div>

    @endsection