<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Registro Académico del DCYT</title>
        

        <!-- Fonts -->
        <link href="" rel="stylesheet">
        <link rel="stylesheet" href="/adminlte/plugins/fontawesome-free/css/all.min.css">
        <link rel="stylesheet" href="/adminlte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
        <link rel="stylesheet" href="/adminlte/dist/css/adminlte.min.css">
        <link rel="stylesheet" href="css/login.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/menu.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
        
    
    </head>

    <body class="antialiased">
        
        <nav class="navbar navbar-dark bg-primary">
                       
            <div class="container-fluid">
                <button class="navbar-toggler justify-content-start" type="button" data-bs-toggle="offcanvas" data-bs-target="#MenuPrincipal" aria-controls="offcanvasNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <ul class="nav justify-content-end">
                    @if(session('datos'))
                        <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
                            {{ session('datos') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times</span>
                            </button>
                        </div>
                    @endif
                    <li class="nav-item" style="margin-top: 6px">
                      <h6>Hola Administrador, Bienvenido <i class="fas fa-child"></i></h6>
                    </li>
                    
                    <li class="nav-item">
                      <h4>|</h4>
                    </li>
                    
                    <li class="nav-item ">
                        <a class="nav-link text-white" href="#" data-bs-toggle="modal" data-bs-target="#ConfirmarSalida"><i class="fas fa-sign-out-alt"> Salir</i></a>
                    </li>
                    
            
                </ul>


                <div class="offcanvas offcanvas-start bg-primary fade" tabindex="-1" id="MenuPrincipal" aria-labelledby="MenuPrincipalLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasNavbarLabel" style="font-size: 30px;"><i class="fas fa-home"> Menú Principal</i></h5>
                        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>

                    <div class="offcanvas-body">
                        <ul class="navbar-nav flex-grow-1 pe-3">
                            


                            @csrf
                            <li class="nav-item dropdown text-center">
                                <a class="nav-link dropdown-toggle" href="#" id="offcanvasNavbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="font-size: 25px;">
                                <i class="fas fa-pencil-alt"><b> Gestión de Programa </b></i></a>
                                </a>
                                <ul class="dropdown-menu bg-dark" aria-labelledby="offcanvasNavbarDropdown">
                                    <li><a class="dropdown-item text-white text-center" href="{{route('program.registerprogram')}}" style="font-size: 22px"><i class="fas fa-book-open"> Listado de Programas</i></a></li>
                                </ul>
                            </li>

                            @csrf
                            <li class="nav-item dropdown text-center">
                                <a class="nav-link dropdown-toggle" href="#" id="offcanvasNavbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="font-size: 25px;">
                                <i class="fas fa-file-alt"><b> Gestión de Pensum </b></i></a>
                                </a>
                                <ul class="dropdown-menu bg-dark" aria-labelledby="offcanvasNavbarDropdown">
                                    <li><a class="dropdown-item text-white text-center" href="{{route('pensum.registerpensum')}}" style="font-size: 22px"><i class="fas fa-book-open"> Listado de Pensum</i></a></li>
                                </ul>
                            </li>

                            @csrf
                            <li class="nav-item dropdown text-center">
                                <a class="nav-link dropdown-toggle" href="#" id="offcanvasNavbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="font-size: 25px;">
                                <i class="fas fa-users"><b> Gestión de Usuario</b></i>
                                </a>
                                <ul class="dropdown-menu bg-dark" aria-labelledby="offcanvasNavbarDropdown">
                                  
                                    <li><a class="dropdown-item text-white text-center" href="{{route('user.listar')}}" style="font-size: 22px"><i class="fas fa-book-open"> Listado de Usuarios</i></a></li>
                                </ul>
                            </li>

                            @csrf
                            <li class="nav-item dropdown text-center">
                                <a class="nav-link dropdown-toggle" href="#" id="offcanvasNavbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="font-size: 25px;">
                                <i class="fas fa-hotel"> <b> Gestión de Departamento </b></i></a>
                                </a>
                                <ul class="dropdown-menu bg-dark" aria-labelledby="offcanvasNavbarDropdown">
                                    <li><a class="dropdown-item text-white text-center" href="{{route('departament.registerdepartament')}}" style="font-size: 22px"><i class="fas fa-book-open"> Listado de Departamentos</i></a></li>
                                </ul>
                            </li>

                            
                        </ul>
                    </div>
                </div>
            </div>
        </nav>

        <!-- Modal Confirmar Salida -->
      <div class="modal fade" id="ConfirmarSalida" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content bg-dark">
            <div class="modal-header">
              <h5 class="modal-title" id="staticBackdropLabel">Confirmación</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h4 class="justify-text-center">
                    ¿Estas seguro que desea salir?
                </h4>
            
            </div>

            <div class="modal-footer justify-content-end">
                <form method="POST" action="{{route('user.logout')}}">
                    <a href="" class="btn btn-danger" data-bs-dismiss="modal"><i class="fas fa-times"> Cancelar</i></a>
                    @csrf
                    <a class="btn btn-success" href="#" onclick="this.closest('form').submit()"><i class="fas fa-sign-out-alt"> Salir</i></a>
                    
                </form>
            </div>
          </div>
        </div>
      </div>
  
  @if(session('datos'))
  <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
      {{ session('datos') }}
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times</span>
      </button>
  </div>
  @endif
    <br />
      <div class= "container">

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

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
        <script src="/adminlte/plugins/jquery/jquery.min.js"></script>
        <script src="/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="/adminlte/dist/js/adminlte.min.js"></script>
    </body>
</html>