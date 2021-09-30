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
     
    

      <button type="button" class="btn btn-primary" style="margin-top: 20px;" data-bs-toggle="modal" data-bs-target="#ModalCrearUsuario">
      <i class="fas fa-plus"> Crear Usuario</i>
      </button>
    

      <table class="table table-dark table-striped mt-4">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Nombre</th>
            <th scope="col">Apellido</th>
            <th scope="col">Cédula</th>
            <th scope="col">Teléfono</th>
            <th scope="col">Nombre de Usuario</th>
            <th scope="col">Correo Electrónico</th>
            <th scope="col">Id del Rol</th>
            <th scope="col">Id del Programa</th>
            <th scope="col">Acciones</th>
          </tr>
        </thead>
      

      <tbody>    
        @foreach ($users as $user)
        <tr>
          
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->surname}}</td>
            <td>{{$user->identification}}</td>
            <td>{{$user->telephone}}</td>
            <td>{{$user->username}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->role}}</td>
            <td>{{$user->program}}</td>
           
            
            <td>
                
              <form action="{{ route('users.destroy',$user->id) }}" method="POST">
                <a href="/users/{{$user->id}}/edit" class="btn btn-info">Editar</a>         
                    @csrf
                    @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
              
            </form>          
            </td>        
        </tr>
        @endforeach
      </tbody>


      </table>

      <!-- Modal Crear Usuario -->
      <div class="modal fade " id="ModalCrearUsuario" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog ">
          <div class="modal-content bg-dark ">
            <div class="modal-header">
              <h5 class="modal-title" id="staticBackdropLabel">Crear Nuevo Usuario</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <form method="POST" action="/users">
  

              @csrf
              <div class="mb-3">
                <label for="">Nombre:</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Nombre" name="name" value="{{old('name')}}">
                @error('name')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{$message}}</strong>
                  </span>
                @enderror
              </div>
                                    
              <div class="mb-3">
                <label for="">Apellido:</label>
                <input type="text" class="form-control @error('surname') is-invalid @enderror" id="surname" placeholder="Apellido" name="surname" value="{{old('surname')}}">
                @error('surname')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{$message}}</strong>
                  </span>
                @enderror
                                    
              </div>
      
      
                      
                      <div class="mb-3">
                        <label for="">Cédula:</label>
                        <input type="text" class="form-control @error('identification') is-invalid @enderror" id="identification" placeholder="Cedula" name="identification" value="{{old('identification')}}">
                        @error('identification')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{$message}}</strong>
                        </span>
                        @enderror     
                        </div>
      
      
                      <div class="mb-3">
                        <label for="">Teléfono:</label>
                        <input type="text" class="form-control @error('telephone') is-invalid @enderror" id="telephone" placeholder="Telefono" name="telephone" value="{{old('telephone')}}">
                        @error('telephone')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{$message}}</strong>
                        </span>
                        @enderror
                      </div>
      
      
                                    <div class="mb-3">
                                      <label for="">Nombre de Usuario:</label>
                                      <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="Example1234" name="username" value="{{old('username')}}">
                                      @error('username')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{$message}}</strong>
                                      </span>
                                      @enderror
                                    
                                    </div>
      
                              <div class="mb-3">
                              <label for="">Correo Electrónico:</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" aria-describedby="emailHelp" placeholder="Email" name="email" value="{{old('email')}}">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                                @enderror
                              
                              
              <div class="mb-3">
                <label for="">Contraseña:</label>
                <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Contraseña" name="password" >
                @error('password')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{$message}}</strong>
                  </span>
                @enderror
              </div>
                              
              <div class="mb-3">
                <label for=""> Confirmar Contraseña:</label>
                <input type="password" class="form-control @error('confirmationPassword') is-invalid @enderror" id="confirmationPassword" placeholder="Confirmar Contraseña" name="confirmationPassword">
                @error('confirmationPassword')
                  <span class="invalid-feedback" role="alert">
                     <strong>{{$message}}</strong>
                  </span>
                @enderror
              </div>
      
      
      
      
              <div class="mb-3">
                <label for="">Rol:</label>
                <input type="text" class="form-control @error('role') is-invalid @enderror" id="role" placeholder="Rol" name="role" value="{{old('role')}}">
                @error('role')
                  <span class="invalid-feedback" role="alert">
                  <strong>{{$message}}</strong>
                  </span>
                @enderror
              </div>
      
      
      
              <div class="mb-3">
                <label for="">Programa:</label>
                <input type="text" class="form-control @error('program') is-invalid @enderror" id="program" placeholder="Programa" name="program" value="{{old('program')}}">
                @error('program')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{$message}}</strong>
                  </span>
                @enderror
              </div>
                           
              <div class="mb-3">
                <input id="status" name="status" type="hidden" value="A">
              </div>
              
       
              <a href="/users" class="btn btn-danger" tabindex="5">Cancelar</a>
              <button type="submit" class="btn btn-success" tabindex="4">Guardar</button>
            </form>
            
            </div>
          </div>
        </div>
      </div>




    </div>
          
  @endsection