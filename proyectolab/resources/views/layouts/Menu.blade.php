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
                    <h6>Hola Administrador, Bienvenido <i class="fas fa-child"></i></h6>

                    <h4>|</h4>

                    
                    <li class="nav-item ">
                        <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#ConfirmarSalida"><i class="fas fa-sign-out-alt"> Salir</i></a>
                    </li>
                    
            
                </ul>


                <div class="offcanvas offcanvas-start bg-primary fade" tabindex="-1" id="MenuPrincipal" aria-labelledby="MenuPrincipalLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasNavbarLabel"><i class="fas fa-home"> Menú Principal</i></h5>
                        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>

                    <div class="offcanvas-body">
                        <ul class="navbar-nav flex-grow-1 pe-3">
                            


                            @csrf
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="offcanvasNavbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-pencil-alt"><b> Gestión de Programa </b></i></a>
                                </a>
                                <ul class="dropdown-menu bg-dark" aria-labelledby="offcanvasNavbarDropdown">
                                    <li><a class="dropdown-item" href="{{route('program.registerprogram')}}"><i class="fas fa-book-open"> Listado de Programas</i></a></li>
                                </ul>
                            </li>

                            @csrf
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="offcanvasNavbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-file-alt"><b> Gestión de Pensum </b></i></a>
                                </a>
                                <ul class="dropdown-menu bg-dark" aria-labelledby="offcanvasNavbarDropdown">
                                    <li><a class="dropdown-item" href="{{route('pensum.registerpensum')}}"><i class="fas fa-book-open"> Listado de Pensum</i></a></li>
                                </ul>
                            </li>

                            @csrf
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="offcanvasNavbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-users"><b> Gestión de Usuario</b></i>
                                </a>
                                <ul class="dropdown-menu bg-dark" aria-labelledby="offcanvasNavbarDropdown">
                                  
                                    <li><a class="dropdown-item" href="{{route('user.listar')}}"><i class="fas fa-book-open"> Listado de Usuarios</i></a></li>
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

        @yield('MenuPrincipal')


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
        <script src="/adminlte/plugins/jquery/jquery.min.js"></script>
        <script src="/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="/adminlte/dist/js/adminlte.min.js"></script>
    </body>
</html>