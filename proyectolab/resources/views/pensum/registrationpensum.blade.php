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
  <body >
    <nav class="navbar navbar-dark bg-primary justify-content-end">
                
      <h6>Registrar Pensum</h6>
      <h4>|</h4>
      <ul class="nav">          
        <li class="nav-item ">
        <a class="nav-link" href="#" >Volver</a>
        </li>   
      </ul>
      
    </nav>


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

    <script src="/adminlte/plugins/jquery/jquery.min.js"></script>
    <script src="/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/adminlte/dist/js/adminlte.min.js"></script>

  </body>
</html>