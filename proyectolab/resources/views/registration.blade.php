      
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
  <body class="login">
  <nav class="navbar navbar-dark bg-dark">
          <div>
                      <p>Registro de Usuario</p>
          </div>
          
  </nav>
          
                 <br />
          <div class="content">
 
          <form method="POST" action="{{route('user.registernewuser')}}">
            @csrf
                  <h4 class="form-title">Registrar Usuario</h4>
                

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

                      <!---  //'role'=> '1','program'=> '2',  que sean un desplegable-->
              <!---'status'=> 'A' sea un input ya puesto por defecto en A-->
                       
                  <hr />
                  <div class="form-actions">
                      <button class="btn btn-success btn-block">
                           Registrar </button>
                  </div>
                  <hr />
                          </div>
              </form>
          </div>
  
  
  </body>
  </html>
  