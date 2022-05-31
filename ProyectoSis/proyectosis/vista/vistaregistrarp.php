<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" type="text/css" href="../cssregistrarp/registrarpp.css"/>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-CuOF+2SnTUfTwSZjCXf01h7uYhfOBuxIhGKPbfEJ3+FqH/s6cIFN9bGr1HmAg4fQ" crossorigin="anonymous">

    <title>Registrar Paciente</title>
  </head>
  <body>
      
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-popRpmFF9JQgExhfw5tZT4I9/CI5e2QcuUZPOVXb1m7qUmeR2b50u+YFEYe1wgzy" crossorigin="anonymous"></script>
    <nav class="navbar " id="barra">
  <div class="container-fluid">
      <a class="navbar-brand" href="#" id="dentalclinic">
        <img src="../imagenes/logo.png" alt="" width="50" height="50" class="d-inline-block align-top">
      Dental Clinic
    </a>
      
  </div>
    
</nav> 
    
    
    <h1 id="tituloprincipal">Registrar Paciente</h1>
     <div class="position-absolute top-50 left-50 translate-middle">
         <div class="shadow-lg p-3 mb-5 bg-white rounded">
    <div class="container" id="formularioregistro">
  <div class="row">
    
    <div class="col-sm" id="parteformulario">
        <form method="POST" action="../controlador/controladorregistrarp.php" id="formulario">
  <div class="mb-3">
      <label for="ci" class="form-label" id="cititulo">Carnet de Identidad</label>
      <input type="text" class="form-control" id="usuarioingresar" aria-describedby="emailHelp" name="ci">
   
  </div>
  <div class="mb-3">
    <label for="nc" class="form-label" id="nombrectitulo">Nombre Completo</label>
    <input type="text" class="form-control" id="passwordingresar" name="nc">
  </div>
    <div class="mb-3">
    <label for="cda" class="form-label" id="codigodtitulo">Codigo de Dentista Asignado</label>
    <input type="number" class="form-control" id="passwordingresar" name="cda">
     <div id="emailHelp" class="form-text">El codigo del Dentista es numerico</div>
  </div>
    <div class="mb-3">
    <label for="cca" class="form-label" id="codigoctitulo">Codigo de Consultorio Asignado</label>
    <input type="number" class="form-control" id="passwordingresar" name="cca">
     <div id="emailHelp" class="form-text">El codigo del Consultorio es numerico</div>
  </div>
         <div class="container px-4" id="botones">
  <div class="row gx-5">
    <div class="col">
     <button type="submit" class="btn btn-primary" id="boton1">Registrar</button>
    </div>
    <div class="col">
      
      <a href="menup.php" class="btn btn-primary" id="boton2">Cancelar</a>
    </div>
  </div>
</div>
</form>
    </div>
    
  </div>
</div>
         </div>
      </div>
  </body>
</html>
