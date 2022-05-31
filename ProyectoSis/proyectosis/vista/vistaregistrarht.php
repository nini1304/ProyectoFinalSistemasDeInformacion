<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../csstratamiento/tratamientoo.css"/>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Tratamientos</title>
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
    <div class="container px-4" id="parteformulario">
  <div class="row gx-5">
      
    <div class="col" id="formulario">
        <form action="registrarht.php" method="POST" >
         <div class="mb-3">
      <label for="ci" class="form-label" id="cititulo">CI Paciente</label>
      <input type="text" class="form-control" id="ciingresar" aria-describedby="emailHelp" name="ci">
    <div id="emailHelp" class="form-text">Por favor ingrese de nuevo el Ci del Paciente</div>
  </div>
    <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="ortodoncias" name="ortodoncias" value="1">
        <label class="form-check-label" for="ortodoncias">Ortodoncia Superior</label>
    </div>
    <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="ortodonciai" name="ortodonciai" value="1">
        <label class="form-check-label" for="ortodonciai">Ortodoncia Inferior</label>
    </div>
    <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="blanquueamiento" name="blanqueamiento" value="1">
        <label class="form-check-label" for="blanqueamiento">Blanqueamiento</label>
    </div>
     <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="limpieza" name="limpieza" value="1">
        <label class="form-check-label" for="limpieza">Limpieza Dental</label>
    </div>
    <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="ortopedias" name="ortopedias" value="1">
        <label class="form-check-label" for="ortopedias">Ortopedia Maxilar Superior</label>
    </div>
     <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="ortopediai" name="ortopediai" value="1">
        <label class="form-check-label" for="ortopediai">Ortopedia Maxilar Inferior</label>
    </div>
    <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="contencions" name="contencions" value="1">
        <label class="form-check-label" for="contencions">Placa de Contencion Superior</label>
    </div>
    <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="contencioni" name="contencioni" value="1">
        <label class="form-check-label" for="contencioni">Placa de Contencion Inferior</label>
    </div>
    <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="temporaneas" name="temporaneas" value="1">
        <label class="form-check-label" for="temporaneas">Placa temporanea Superior</label>
    </div>
    <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="temporaneai" name="temporaneai" value="1">
        <label class="form-check-label" for="temporaneai">Placa temporanea Inferior</label>
    </div>
    <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="ninguno" name="ninguno" value="1">
        <label class="form-check-label" for="ninguni">Sin tratamientos por ahora</label>
    </div>
     
            <input type="submit" class="btn btn-primary" name="sendForm" value="Registrar" id="boton"/>
     
</form>
    </div>
   
  </div>
</div>
        </div>
    </div>
  </body>
</html>