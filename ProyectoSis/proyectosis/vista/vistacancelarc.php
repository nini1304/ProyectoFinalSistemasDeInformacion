<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../cssborrarc/borrarccc.css"/>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Borrar Cita</title>
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
   <div class="container px-4" id="parteregistro">
  <div class="row gx-5">
      <div class="col" id="parteformulario">
          <form method="POST" action="../controlador/controladorborrarc.php">
   <div class="mb-3">
      <label for="cc" class="form-label" id="citatitulo">Codigo de la Cita que desea eliminar</label>
      <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="cc">
    <div id="emailHelp" class="form-text">El codigo es numerico</div>
  </div>
   <div class="container px-4" id="botones">
  <div class="row gx-5">
    <div class="col">
     <button type="submit" class="btn btn-primary" id="boton1">Borrar</button>
    </div>
    <div class="col">
      
      <a href="menup.php" class="btn btn-primary" id="boton2">Cancelar</a>
    </div>
  </div>
</div>
</form>
    </div>
      <div class="col" id="partereporte">
          <h3 id="reportetitulo">Todas las Citas Registradas</h3>
   <?php
   $carnet=$_POST['ci'];
  $conexion= mysqli_connect('localhost','root','','proyectosis','3306');
  mysqli_query($conexion, 'SET NAMES "utf8"');
  $query=mysqli_query($conexion,"SELECT*FROM cita WHERE ci='".$carnet."'");
while ($n= mysqli_fetch_assoc($query)){
    
   echo "<h3 id='reporte'>".$n['idcita']." ".$n['iddentista2']." ".$n['fecha']." ".$n['hora']."</h3></br>";
    
}
  
?>
    </div>
  </div>
</div>
          </div>
     </div>
  </body>
</html>

