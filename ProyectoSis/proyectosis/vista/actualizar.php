<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../cssactualizar/actualizarrr.css"/>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Actualizar</title>
  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
     <nav class="navbar " id="barra">
  <div class="container-fluid">
      <a class="navbar-brand" href="#" id="dentalclinic">
        <img src="../imagenes/logo.png" alt="" width="50" height="50" class="d-inline-block align-top">
      Dental Clinic
    </a>
      
  </div>
    
</nav>

     <div class="position-absolute top-50 start-50 translate-middle">
         <div class="shadow-lg p-3 mb-5 bg-white rounded">
    <div class="container" id="verificar">
  <div class="row">
    
    <div class="col-sm" id="parteformulario">
        <form method="POST" action="vistaactualizarD.php" id="formulario">
  <div class="mb-3">
      <label for="ci" class="form-label" id="cititulo">CI Paciente</label>
      <input type="text" class="form-control" id="usuarioingresar" aria-describedby="emailHelp" name="ci">
    <div id="emailHelp" class="form-text">Ingrese el CI del paciente para registrar su cita</div>
  </div>
  
           <div class="row gx-5">
    <div class="col">
     <button type="submit" class="btn btn-primary" id="boton1">Aceptar</button>
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

