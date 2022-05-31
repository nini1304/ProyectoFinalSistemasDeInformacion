<!doctype html>

<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../cssregistrarc/registrarcc2.css"/>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-CuOF+2SnTUfTwSZjCXf01h7uYhfOBuxIhGKPbfEJ3+FqH/s6cIFN9bGr1HmAg4fQ" crossorigin="anonymous">

    <title>Registrar Cita</title>
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
<h1 id="tituloprincipal">REGISTRAR CITA</h1>
<div class="position-absolute top-50 left-50 translate-middle">
<div class="shadow-lg p-3 mb-5 bg-white rounded">
<div class="container px-4" id="parteregistro">
  <div class="row gx-5">
      <div class="col" id="parteformulario">
          <form method="POST" action="../controlador/controladorregistrarc.php">
  <div class="mb-3">
     <label for="ci" class="form-label" id="cititulo">Por favor ingrese de nuevo el CI del Paciente</label>
    <input type="text" class="form-control" id="passwordingresar" name="ci">
    
  </div>    
  <div class="mb-3">
      <label for="horario" class="form-label" id="horariotitulo">Horario</label>
      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="horario">
    <div id="emailHelp" class="form-text">Ingrese un horario disponible</div>
  </div>
   
  <div class="mb-3">
      <label for="fecha" class="form-label" id="fechatitulo">Fecha</label>
      <input type='date'name='fecha'/>
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
      <div class="col" id="partereporte">
          <h3 id="reportetitulo">Horarios ocupados del Dentista</h3>
      <?php
   $carnet=$_POST['ci'];
   $conexion= mysqli_connect('localhost','root','','proyectosis','3306');
mysqli_query($conexion, 'SET NAMES "utf8"');
$query=mysqli_query($conexion,'SELECT*FROM paciente');
$flag=0;
while ($n= mysqli_fetch_assoc($query)){
     $cibase=$n['ci'];
    if($carnet==$cibase){
        $flag=1;
        $iddbase=$n['iddentista'];
        $query2=mysqli_query($conexion,'SELECT*FROM cita');
        while ($n2= mysqli_fetch_assoc($query2)){
            $iddbasecita=$n2['iddentista2'];
            if($iddbase==$iddbasecita){
                $fechabase=$n2['fecha'];
                $horariobase=$n2['hora'];
                echo '<h3 id="texto">'.$fechabase.'  '.$horariobase.'</h3>';
            }
        }
    }
   
    
}
if($flag==0){
    echo '<h2>El Paciente no existe</h2>';
}
  
?>
    </div>
  </div>
</div>
</div>
</div>
  </body>
</html>

