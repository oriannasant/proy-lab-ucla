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
      
    <h2>CREAR REGISTROS</h2>
   
    <form method="POST" action="/departaments">
  
        @csrf
      <div class="mb-3">
        
        <label for="" class="form-label">Nombre del Departamento:</label>
        <input id="name_departament" name="name_departament" type="text" class="form-control  @error('name_departament') is-invalid @enderror" tabindex="1">    
        @error('name_departament')
        <span class="invalid-feedback" role="alert">
            <strong>{{$message}}</strong>
        </span>
        @enderror
      </div>
      <div class="mb-3">
        <label for="" class="form-label">Descripción del Departamento:</label>
        <input id="descrip_departament" name="descrip_departament" type="text" class="form-control  @error('descrip_departament') is-invalid @enderror" tabindex="2">
        @error('descrip_departament')
        <span class="invalid-feedback" role="alert">
            <strong>{{$message}}</strong>
        </span>
        @enderror
      </div>
      <div class="mb-3">
     
        <input id="status" name="status" type="hidden" value="A">
      </div>
      <a href="/departaments" class="btn btn-secondary" tabindex="5">Cancelar</a>
      
     
      <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
    </form>
    

        <script src="/adminlte/plugins/jquery/jquery.min.js"></script>
        <script src="/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="/adminlte/dist/js/adminlte.min.js"></script>

</body>
</html>