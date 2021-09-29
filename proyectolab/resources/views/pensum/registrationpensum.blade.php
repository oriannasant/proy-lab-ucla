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
    </div>

    @endsection