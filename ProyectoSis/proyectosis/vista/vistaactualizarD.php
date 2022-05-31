<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../cssactualizarD/acD.css"/>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Actualizar Estado Dientes</title>
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
    
     
         <div class="container" id="dientes">
  <div class="row">
      
      <div class="col-sm" id="chekpart">
      <form action="actuaT.php" method="POST">
          <div class="mb-3" id="parteci">
      <label for="carnet" class="form-label" id="cititulo">CI Paciente</label>
      <input type="text" class="form-control" id="ciingresar" aria-describedby="emailHelp" name="carnet">
    <div id="emailHelp" class="form-text">Por favor ingrese de nuevo el Ci del Paciente</div>
  </div>
     
    <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="d1" name="d1" value="1">
        <label class="form-check-label" for="d1">Tercer Molar Derecho Inferior</label>
    </div>
     <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="d2" name="d2" value="1">
        <label class="form-check-label" for="d2">Segundo Molar Derecho Inferior</label>
    </div>
     <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="d3" name="d3" value="1">
        <label class="form-check-label" for="d3">Primer Molar Derecho Inferior</label>
    </div>
      <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="d4" name="d4" value="1">
        <label class="form-check-label" for="d4">Segundo Premolar Derecho Inferior</label>
    </div>
      <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="d5" name="d5" value="1">
        <label class="form-check-label" for="d5">Primer Premolar Derecho Inferior</label>
    </div>
      <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="d6" name="d6" value="1">
        <label class="form-check-label" for="d6">Canino Derecho Inferior</label>
    </div>
       <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="d7" name="d7" value="1">
        <label class="form-check-label" for="d7">Incisivo Lateral Derecho Inferior</label>
    </div>
      <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="d8" name="d8" value="1">
        <label class="form-check-label" for="d8">Incisivo Central Derecho Inferior</label>
    </div>
      <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="d9" name="d9" value="1">
        <label class="form-check-label" for="d9">Incisivo Central Izquierdo Inferior</label>
      </div>
       <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="d10" name="d10" value="1">
        <label class="form-check-label" for="d10">Incisivo Lateral Izquierdo Inferior</label>
    </div>
       <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="d11" name="d11" value="1">
        <label class="form-check-label" for="d11">Canino Izquierdo Inferior</label>
    </div>
      <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="d12" name="d12" value="1">
        <label class="form-check-label" for="d12">Primer Premolar Izquierdo Inferior</label>
    </div>
      <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="d13" name="d13" value="1">
        <label class="form-check-label" for="d13">Segundo Premolar Izquierdo Inferior</label>
    </div>
      <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="d14" name="d14" value="1">
        <label class="form-check-label" for="d14">Primer Molar Izquierdo Inferior</label>
    </div>
      <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="d15" name="d15" value="1">
        <label class="form-check-label" for="d15">Segundo Molar Izquierdo Inferior</label>
    </div>
     <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="d16" name="d16" value="1">
        <label class="form-check-label" for="d16">Tercer Molar Izquierdo Inferior</label>
    </div>
     <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="d17" name="d17" value="1">
        <label class="form-check-label" for="d17">Tercer Molar Derecho Superior</label>
     </div>
     <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="d18" name="d18" value="1">
        <label class="form-check-label" for="d18">Segundo Molar Derecho Superior</label>
    </div>
     <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="d19" name="d19" value="1">
        <label class="form-check-label" for="d19">Primer Molar Derecho Superior</label>
    </div>
     <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="d20" name="d20" value="1">
        <label class="form-check-label" for="d20">Segundo Premolar Derecho Superior</label>
    </div>
     <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="d21" name="d21" value="1">
        <label class="form-check-label" for="d21">Primer Premolar Derecho Superior</label>
    </div>
     <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="d22" name="d22" value="1">
        <label class="form-check-label" for="d22">Canino Derecho Superior</label>
    </div>
     <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="d23" name="d23" value="1">
        <label class="form-check-label" for="d23">Incisivo Lateral Derecho Superior</label>
    </div>
     <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="d24" name="d24" value="1">
        <label class="form-check-label" for="d24">Incisivo Central Derecho Superior</label>
    </div>
     <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="d25" name="d25" value="1">
        <label class="form-check-label" for="d25">Incisivo Central Izquierdo Superior</label>
    </div>
     <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="d26" name="d26" value="1">
        <label class="form-check-label" for="d26">Incisivo Lateral Izquierdo Superior</label>
    </div>
     <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="d27" name="d27" value="1">
        <label class="form-check-label" for="d27">Canino Izquierdo Superior</label>
    </div>
     <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="d28" name="d28" value="1">
        <label class="form-check-label" for="d28">Primer Premolar Izquierdo Superior</label>
    </div>
     <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="d29" name="d29" value="1">
        <label class="form-check-label" for="d29">Segundo Premolar Izquierdo Superior</label>
    </div>
     <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="d30" name="d30" value="1">
        <label class="form-check-label" for="d30">Primer Molar Izquierdo Superior</label>
    </div>
     <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="d31" name="d31" value="1">
        <label class="form-check-label" for="d31">Segundo Molar Izquierdo Superior</label>
    </div>
     <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="d32" name="d32" value="1">
        <label class="form-check-label" for="d32">Tercer Molar Izquierdo Superior</label>
    </div>
         
          <div class="row gx-5">
    <div class="col">
     <input type="submit" class="btn btn-primary" name="sendForm" value="Actualizar" id="boton"/>
    </div>
    <div class="col">
      
      <a href="menup.php" class="btn btn-primary" id="boton2">Cancelar</a>
    </div>
  </div>
</form>
    </div>
      
      
      <div class="col-sm" id="reporte">
      <?php
      $flag=0;
      $c=$_POST['ci'];
      $conexion= mysqli_connect('localhost','root','','proyectosis','3306');
      mysqli_query($conexion, 'SET NAMES "utf8"');
      $query=mysqli_query($conexion,'SELECT*FROM historial');
      while ($n= mysqli_fetch_assoc($query)){
          $cibase=$n['idpaciente'];
          if($c==$cibase){
              $flag=1;
              $fecha=$n['fecha'];
              $diente1=$n['dienteuno'];
$diente2=$n['dientedos'];
$diente3=$n['dientetres'];
$diente4=$n['dientecuatro'];
$diente5=$n['dientecinco'];
$diente6=$n['dienteseis'];
$diente7=$n['dientesiete'];
$diente8=$n['dienteocho'];
$diente9=$n['dientenueve'];
$diente10=$n['dientediez'];
$diente11=$n['dienteonce'];
$diente12=$n['dientedoce'];
$diente13=$n['dientetrece'];
$diente14=$n['dientecato'];
$diente15=$n['dientequnce'];
$diente16=$n['dientedse'];
$diente17=$n['dienteds'];
$diente18=$n['dientedo'];
$diente19=$n['dientedn'];
$diente20=$n['dientev'];
$diente21=$n['dientevu'];
$diente22=$n['dientevd'];
$diente23=$n['dientevt'];
$diente24=$n['dientevcu'];
$diente25=$n['dientevc'];
$diente26=$n['dientevse'];
$diente27=$n['dientevs'];
$diente28=$n['dientevo'];
$diente29=$n['dientevn'];
$diente30=$n['dientet'];
$diente31=$n['dientetu'];
$diente32=$n['dientetd'];
                echo "<h2>Ultima fecha de actualizacion:".$fecha."</h2>";
                echo "<h1 id='tituloreporte'>Reporte Dental</h1></br>";
               
                echo '<table class="table table-warning table-bordered border-dark id="tabla">'
                .'<tr>'
                  .'<td>NOMBRE DEL DIENTE</td>'
                .'<td>ESTADO DEL DIENTE</td>'      
                 . '</tr>'
                .'<tr >'
                .'<td>Tercer Molar Derecho Inferior</td>'
                .'<td>'.$diente1.'</td>'
                . '</tr>'
                .'<tr >'
                .'<td>Segundo Molar Derecho Inferior</td>'
                .'<td>'.$diente2.'</td>'
                . '</tr>'
                .'<tr >'
                .'<td>Primer Molar Derecho Inferior</td>'
                .'<td>'.$diente3.'</td>'
                . '</tr>'
                .'<tr >'
                .'<td>Segundo Premolar Derecho Inferior</td>'
                .'<td>'.$diente4.'</td>'
                . '</tr>'
                .'<tr >'
                .'<td>Primer Premolar Derecho Inferior</td>'
                .'<td>'.$diente5.'</td>'
                . '</tr>'
                 .'<tr >'
                .'<td>Canino Derecho Inferior</td>'
                .'<td>'.$diente6.'</td>'
                . '</tr>'
                 .'<tr >'
                .'<td>Incisivo Lateral Derecho Inferior</td>'
                .'<td>'.$diente7.'</td>'
                . '</tr>'
                 .'<tr >'
                .'<td>Incisivo Central Derecho Inferior</td>'
                .'<td>'.$diente8.'</td>'
                . '</tr>'
                 .'<tr >'
                .'<td>Incisivo Central Izquierdo Inferior</td>'
                .'<td>'.$diente9.'</td>'
                . '</tr>'
                .'<tr >'
                .'<td>Incisivo Lateral Izquierdo Inferior</td>'
                .'<td>'.$diente10.'</td>'
                . '</tr>'
                .'<tr >'
                .'<td>Canino Izquierdo Inferior</td>'
                .'<td>'.$diente11.'</td>'
                . '</tr>'
                 .'<tr >'
                .'<td>Primer Premolar Izquierdo Inferior</td>'
                .'<td>'.$diente12.'</td>'
                . '</tr>'
                 .'<tr >'
                .'<td>Segundo Premolar Izquierdo Inferior</td>'
                .'<td>'.$diente13.'</td>'
                . '</tr>'
                 .'<tr >'
                .'<td>Primer Molar Izquierdo Inferior</td>'
                .'<td>'.$diente14.'</td>'
                . '</tr>'
                .'<tr >'
                .'<td>Segundo Molar Izquierdo Inferior</td>'
                .'<td>'.$diente15.'</td>'
                . '</tr>'
                  .'<tr >'
                .'<td>Tercer Molar Izquierdo Inferior</td>'
                .'<td>'.$diente16.'</td>'
                . '</tr>'
                .'<tr >'
                .'<td>Tercer Molar Derecho Superior</td>'
                .'<td>'.$diente17.'</td>'
                . '</tr>'
                 .'<tr >'
                .'<td>Segundo Molar Derecho Superior</td>'
                .'<td>'.$diente18.'</td>'
                . '</tr>'
                 .'<tr >'
                .'<td>Primer Molar Derecho Superior</td>'
                .'<td>'.$diente19.'</td>'
                . '</tr>'
                 .'<tr >'
                .'<td>Segundo Premolar Derecho Superior</td>'
                .'<td>'.$diente20.'</td>'
                . '</tr>'
                 .'<tr >'
                .'<td>Primer Premolar Derecho Superior</td>'
                .'<td>'.$diente21.'</td>'
                . '</tr>'
                .'<tr >'
                .'<td>Canino Derecho Superior</td>'
                .'<td>'.$diente22.'</td>'
                . '</tr>'
                 .'<tr >'
                .'<td>Incisivo Lateral Derecho Superior</td>'
                .'<td>'.$diente23.'</td>'
                . '</tr>'
                 .'<tr >'
                .'<td>Incisivo Central Derecho Superior</td>'
                .'<td>'.$diente24.'</td>'
                . '</tr>'
                 .'<tr >'
                .'<td>Incisivo Central Izquierdo Superior</td>'
                .'<td>'.$diente25.'</td>'
                . '</tr>'
                .'<tr >'
                .'<td>Incisivo Lateral Izquierdo Superior</td>'
                .'<td>'.$diente26.'</td>'
                . '</tr>'
                .'<tr >'
                .'<td>Canino Izquierdo Superior</td>'
                .'<td>'.$diente27.'</td>'
                . '</tr>'
                .'<tr >'
                .'<td>Primer Premolar Izquierdo Superior</td>'
                .'<td>'.$diente28.'</td>'
                . '</tr>'
                .'<tr >'
                .'<td>Segundo Premolar Izquierdo Superior</td>'
                .'<td>'.$diente29.'</td>'
                . '</tr>'
                .'<tr >'
                .'<td>Primer Molar Izquierdo Superior</td>'
                .'<td>'.$diente30.'</td>'
                . '</tr>'
                .'<tr >'
                .'<td>Segundo Molar Izquierdo Superior</td>'
                .'<td>'.$diente31.'</td>'
                . '</tr>'
                .'<tr >'
                .'<td>Tercer Molar Izquierdo Superior</td>'
                .'<td>'.$diente32.'</td>'
                . '</tr>'
                .'</table>';

          }
      }
      
      if($flag==0){
         echo "<h1>No existe el Paciente</h1>";
      }
      ?>
    </div>
      
  </div>
</div>
     
    
  </body>
</html>

