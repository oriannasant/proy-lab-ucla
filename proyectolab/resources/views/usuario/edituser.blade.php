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
     <link rel="stylesheet" href="css/menu.css">

</head>
<body>
  <nav class="navbar navbar-dark bg-primary justify-content-end">
          
          <h6>Editar Usuario</h6>

          <h4>|</h4>

          <ul class="nav">
              
                 
            <li class="nav-item ">
               <a class="nav-link" href="#" >Volver</a>
            </li>
              
          
          </ul>
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
      <div class=" container">

        <form method="POST" action="/users">
          
          <h4 class="form-title">Editar Usuario</h4>
              
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
                      
                      </div>
                      
                     


                      <div class="form-group">
         
                        <label for="">Roles:</label>
                                         
                                         <select name="role" id="role" class="form-control">
                                           
                                           <option value="">Elegir opción</option>
                                           
                                               @foreach ($roles as $rol)
                                                 <option value="{{ $rol->id}}">{{ $rol->name_roles}}</option>
                                               @endforeach
                                         
                                         </select>
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
