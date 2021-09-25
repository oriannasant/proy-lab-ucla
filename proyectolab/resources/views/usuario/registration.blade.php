      
  <!DOCTYPE html>
  <html>
  <head>
           <meta charset="utf-8"/>
       <title>Registro Académico del DCYT</title>
       <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
       <link rel="stylesheet" href="/adminlte/plugins/fontawesome-free/css/all.min.css">
       <link rel="stylesheet" href="/adminlte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
       <link rel="stylesheet" href="/adminlte/dist/css/adminlte.min.css">
       <link rel="stylesheet" href="css/login.css">
       <link rel="stylesheet" href="css/style.css">
  
  </head>
  <body>
  <nav class="navbar navbar-dark bg-dark">
          <div>
                      <p>Registro de Usuario</p>
          </div>
          
  </nav>
  @if(session('datos'))
  <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
      {{ session('datos') }}
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times</span>
      </button>
  </div>
  @endif
                 <br />
          <div class="content">
 
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


                            </div>
                            <div class="form-group">
                              <label for="">Cedula:</label>
                              <input type="text" class="form-control @error('identification') is-invalid @enderror" id="identification" placeholder="Cedula" name="identification" value="{{old('identification')}}">
                              @error('identification')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{$message}}</strong>
                              </span>
                              @enderror
                            
                            </div>


                              <div class="form-group">
                                <label for="">Telefono:</label>
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
                        <label for="">Correo Electronico:</label>
                          <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" aria-describedby="emailHelp" placeholder="Email" name="email" value="{{old('email')}}">
                          @error('email')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{$message}}</strong>
                          </span>
                          @enderror
                        
                        </div>
                        
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
                          <label for="">Rol:</label>
                            <input type="text" class="form-control @error('role') is-invalid @enderror" id="role" placeholder="Rol" name="role" value="{{old('role')}}">
                            @error('role')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                            @enderror
                          
                          </div>



                          <div class="form-group">
                            <label for="">Programa:</label>
                              <input type="text" class="form-control @error('program') is-invalid @enderror" id="program" placeholder="Programa" name="program" value="{{old('program')}}">
                              @error('program')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{$message}}</strong>
                              </span>
                              @enderror
                            
                            </div>
                     
                            <div class="form-group">
     
                              <input id="status" name="status" type="hidden" value="A">
                            </div>
                  <hr />
              
                    <button type="submit" class="btn btn-primary" >Guardar</button>
                    
                 
                  <hr />
                         
              </form>
          </div>
  
  </body>
  </html>
  