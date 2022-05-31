<!doctype html>
<html lang="en">
  <head>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../csserrores/logincorrecto.css"/>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>ERROR</title>
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
    <div class="card" style="width: 18rem;" id="error">
  <img src="../imagenes/error.png" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">Paciente No Encontrado, por favor revise los datos ingresados</p>
    <div class="d-flex justify-content-center">
   <div class="spinner-grow text-primary" role="status">
  <span class="visually-hidden">Loading...</span>
</div>
    </div>
  </div>
</div>
    </div>
    
  </body>
</html>

<?php
header("Refresh: 3; URL=vistabuscarp.php"); 
?>
