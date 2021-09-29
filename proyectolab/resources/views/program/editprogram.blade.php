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
<body >
      
<h2>EDITAR REGISTROS</h2>

@if(session('success'))
<div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
    {{ session('success') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times</span>
    </button>
</div>
@endif




  <form action="/programs/{{$program->id}}" method="POST">
    @csrf    
    @method('PUT')
  <div class="mb-3">
    <label for="" class="form-label">Código del Programa:</label>
      <input id="name_program" name="name_program" type="text" class="form-control"  value="{{$program->name_program}}">    
    </div>
    
    

  <div class="mb-3">
    <label for="" class="form-label">Descripción del Programa:</label>
      <input id="descrip_program" name="descrip_program" type="text" class="form-control" value="{{$program->descrip_program}}">
    </div>


   

  <div class="mb-3">
    
    <input id="status" name="status" type="hidden" value="{{$program->status}}">


  </div>

  <a href="/programs" class="btn btn-secondary">Cancelar</a>
  <button type="submit" class="btn btn-primary">Guardar</button>
</form>
   
   
  
 
    

        <script src="/adminlte/plugins/jquery/jquery.min.js"></script>
        <script src="/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="/adminlte/dist/js/adminlte.min.js"></script>

</body>
</html>