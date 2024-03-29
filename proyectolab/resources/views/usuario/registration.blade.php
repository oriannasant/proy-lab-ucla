      
@extends('layouts.Menu')

  @section('MenuPrincipal')
        
    @if(session('datos'))
    <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
        {{ session('datos') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times</span>
        </button>
    </div>
    @endif
    <br />
    
    <div class=" container">
 
      <form method="POST" action="/users">
            
        <h4 class="form-title">Registrar Usuario</h4>
                
        @csrf
        <div class="form-group">
          <label for="">Nombre:</label>
          <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Nombre" name="name" value="{{old('name')}}">
          @error('name')
            <span class="invalid-feedback" role="alert">
              <strong>{{$message}}</strong>
            </span>
          @enderror
        </div>
                              
        <div class="form-group">
          <label for="">Apellido:</label>
          <input type="text" class="form-control @error('surname') is-invalid @enderror" id="surname" placeholder="Apellido" name="surname" value="{{old('surname')}}">
          @error('surname')
            <span class="invalid-feedback" role="alert">
              <strong>{{$message}}</strong>
            </span>
          @enderror
                              
        </div>


                
                <div class="form-group">
                  <label for="">Cédula:</label>
                  <input type="text" class="form-control @error('identification') is-invalid @enderror" id="identification" placeholder="Cedula" name="identification" value="{{old('identification')}}">
                  @error('identification')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{$message}}</strong>
                  </span>
                  @enderror     
                  </div>


                <div class="form-group">
                  <label for="">Teléfono:</label>
                  <input type="text" class="form-control @error('telephone') is-invalid @enderror" id="telephone" placeholder="Telefono" name="telephone" value="{{old('telephone')}}">
                  @error('telephone')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{$message}}</strong>
                  </span>
                  @enderror
                </div>


                              <div class="form-group">
                                <label for="">Nombre de Usuario:</label>
                                <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="Example1234" name="username" value="{{old('username')}}">
                                @error('username')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                                @enderror
                              
                              </div>

                        <div class="form-group">
                        <label for="">Correo Electrónico:</label>
                          <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" aria-describedby="emailHelp" placeholder="Email" name="email" value="{{old('email')}}">
                          @error('email')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{$message}}</strong>
                          </span>
                          @enderror
                        
                        
        <div class="form-group">
          <label for="">Contraseña:</label>
          <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Contraseña" name="password" >
          @error('password')
            <span class="invalid-feedback" role="alert">
              <strong>{{$message}}</strong>
            </span>
          @enderror
        </div>
                        
        <div class="form-group">
          <label for=""> Confirmar Contraseña:</label>
          <input type="password" class="form-control @error('confirmationPassword') is-invalid @enderror" id="confirmationPassword" placeholder="Confirmar Contraseña" name="confirmationPassword">
          @error('confirmationPassword')
            <span class="invalid-feedback" role="alert">
               <strong>{{$message}}</strong>
            </span>
          @enderror
        </div>




        <div class="form-group">
         
         <label for="" class="form-label">Roles:</label>
                          
             <select name="role" id="role" class="form-control">
                            
                <option value="">Elegir opción</option>
                            
                   @foreach ($roles as $rol)
                      <option value="{{$rol->id}}">{{ $rol->name_roles}}</option>
                    @endforeach
                          
             </select>
        </div>


        <div class="form-group">
          <label for="" class="form-label">Código del Programa:</label>
         
                          
          <select name="program" id="program" class="form-control">
                        
            <option value="">Elegir opción</option>
                        
                @foreach ($programs as $program)
                              
                  <option value="{{ $program->id}}">{{ $program->name_program }}</option>
                 
                @endforeach
                      
          </select>
         
        </div>
      
                     
        <div class="form-group">
          <input id="status" name="status" type="hidden" value="A">
        </div>
        

              
        <button type="submit" class="btn btn-primary" >Guardar</button>
                       
      </form>
    </div>
  
  @endsection
  