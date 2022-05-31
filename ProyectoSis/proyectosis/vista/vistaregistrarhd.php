<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../cssdientes/dientes.css"/>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Historial Clinico</title>
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

    <h1 id="tituloprincipal">POR FAVOR REGISTRE EL ESTADO DE LOS DIENTES DEL PACIENTE</h1>
    <div class="shadow-lg p-3 mb-5 bg-white rounded">
    <div class="container" id="formularioparte">
        <form method="POST" action="../controlador/controladorhd.php" id="formulario">
  <div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3">
     
    <span class="border border-warning">
    <div class="col">
        <div class="mb-3">
       <label for="ci" class="form-label" id="cititulo">CI Paciente</label>
       
      <input type="text" class="form-control" id="ciingresar" aria-describedby="emailHelp" name="ci">
       
    </div>
      </div>
    </span>
    <div class="col">
      <div class="mb-3">
       <label for="d1" class="form-label" id="d1titulo">Tercer Molar Derecho Inferior</label>
      <input type="text" class="form-control" id="d1ingresar" aria-describedby="emailHelp" name="d1">
    </div>
    </div>
    <div class="col">
      <div class="mb-3">
       <label for="d2" class="form-label" id="d2titulo">Segundo Molar Derecho Inferior</label>
      <input type="text" class="form-control" id="d2ingresar" aria-describedby="emailHelp" name="d2">
    </div>
    </div>
    <div class="col">
     <div class="mb-3">
       <label for="d3" class="form-label" id="d3titulo">Primer Molar Derecho Inferior</label>
      <input type="text" class="form-control" id="d3ingresar" aria-describedby="emailHelp" name="d3">
    </div>
    </div>
    <div class="col">
      <div class="mb-3">
       <label for="d4" class="form-label" id="d4titulo">Segundo Premolar Derecho Inferior</label>
      <input type="text" class="form-control" id="d4ingresar" aria-describedby="emailHelp" name="d4">
    </div>
    </div>
    <div class="col">
     <div class="mb-3">
       <label for="d5" class="form-label" id="d5titulo">Primer Premolar Derecho Inferior</label>
      <input type="text" class="form-control" id="d5ingresar" aria-describedby="emailHelp" name="d5">
    </div>
    </div>
    <div class="col">
      <div class="mb-3">
       <label for="d6" class="form-label" id="d6titulo">Canino Derecho Inferior</label>
      <input type="text" class="form-control" id="d6ingresar" aria-describedby="emailHelp" name="d6">
    </div>
    </div>
    <div class="col">
      <div class="mb-3">
       <label for="d7" class="form-label" id="d7titulo">Incisivo Lateral Derecho Inferior</label>
      <input type="text" class="form-control" id="d7ingresar" aria-describedby="emailHelp" name="d7">
    </div>
    </div>
    <div class="col">
      <div class="mb-3">
       <label for="d8" class="form-label" id="d8titulo">Incisivo Central Derecho Inferior</label>
      <input type="text" class="form-control" id="d8ingresar" aria-describedby="emailHelp" name="d8">
    </div>
    </div>
    <div class="col">
      <div class="mb-3">
       <label for="d9" class="form-label" id="d9titulo">Incisivo Central Izquierdo Inferior</label>
      <input type="text" class="form-control" id="d9ingresar" aria-describedby="emailHelp" name="d9">
    </div>
    </div>
      <div class="col">
      <div class="mb-3">
       <label for="d10" class="form-label" id="d10titulo">Incisivo Lateral Izquierdo Inferior</label>
      <input type="text" class="form-control" id="d10ingresar" aria-describedby="emailHelp" name="d10">
    </div>
    </div>
    <div class="col">
     <div class="mb-3">
       <label for="d11" class="form-label" id="d11titulo">Canino Izquierdo Inferior</label>
      <input type="text" class="form-control" id="d11ingresar" aria-describedby="emailHelp" name="d11">
    </div>
    </div>
    <div class="col">
      <div class="mb-3">
       <label for="d12" class="form-label" id="d12titulo">Primer Premolar Izquierdo Inferior</label>
      <input type="text" class="form-control" id="d12ingresar" aria-describedby="emailHelp" name="d12">
    </div>
    </div>
    <div class="col">
      <div class="mb-3">
       <label for="d13" class="form-label" id="d13titulo">Segundo Premolar Izquierdo Inferior</label>
      <input type="text" class="form-control" id="usuarioingresar" aria-describedby="emailHelp" name="d13">
    </div>
    </div>
    <div class="col">
     <div class="mb-3">
       <label for="d14" class="form-label" id="d14titulo">Primer Molar Izquierdo Inferior</label>
      <input type="text" class="form-control" id="d14ingresar" aria-describedby="emailHelp" name="d14">
    </div>
    </div>
    <div class="col">
     <div class="mb-3">
       <label for="d15" class="form-label" id="d15titulo">Segundo Molar Izquierdo Inferior</label>
      <input type="text" class="form-control" id="d15ingresar" aria-describedby="emailHelp" name="d15">
    </div>
    </div>
    <div class="col">
      <div class="mb-3">
       <label for="d16" class="form-label" id="d16titulo">Tercer Molar Izquierdo Inferior</label>
      <input type="text" class="form-control" id="d16ingresar" aria-describedby="emailHelp" name="d16">
    </div>
    </div>
    <div class="col">
     <div class="mb-3">
       <label for="d17" class="form-label" id="d17titulo">Tercer Molar Derecho Superior</label>
      <input type="text" class="form-control" id="d17ingresar" aria-describedby="emailHelp" name="d17">
    </div>
    </div>
    <div class="col">
      <div class="mb-3">
       <label for="d18" class="form-label" id="d18titulo">Segundo Molar Derecho Superior</label>
      <input type="text" class="form-control" id="d18ingresar" aria-describedby="emailHelp" name="d18">
    </div>
    </div>
    <div class="col">
      <div class="mb-3">
       <label for="d19" class="form-label" id="d19titulo">Primer Molar Derecho Superior</label>
      <input type="text" class="form-control" id="d19ingresar" aria-describedby="emailHelp" name="d19">
    </div>
    </div>
      <div class="col">
     <div class="mb-3">
       <label for="d20" class="form-label" id="d20titulo">Segundo Premolar Derecho Superior</label>
      <input type="text" class="form-control" id="d20ingresar" aria-describedby="emailHelp" name="d20">
    </div>
    </div>
    <div class="col">
     <div class="mb-3">
       <label for="d21" class="form-label" id="d21titulo">Primer Premolar Derecho Superior</label>
      <input type="text" class="form-control" id="d21ingresar" aria-describedby="emailHelp" name="d21">
    </div>
    </div>
    <div class="col">
     <div class="mb-3">
       <label for="d22" class="form-label" id="d22titulo">Canino Derecho Superior</label>
      <input type="text" class="form-control" id="d22ingresar" aria-describedby="emailHelp" name="d22">
    </div>
    </div>
    <div class="col">
      <div class="mb-3">
       <label for="d23" class="form-label" id="d23titulo">Incisivo Lateral Derecho Superior</label>
      <input type="text" class="form-control" id="d23ingresar" aria-describedby="emailHelp" name="d23">
    </div>
    </div>
    <div class="col">
     <div class="mb-3">
       <label for="d24" class="form-label" id="d24titulo">Incisivo Central Derecho Superior</label>
      <input type="text" class="form-control" id="d24ingresar" aria-describedby="emailHelp" name="d24">
    </div>
    </div>
    <div class="col">
     <div class="mb-3">
       <label for="d25" class="form-label" id="d25titulo">Incisivo Central Izquierdo Superior</label>
      <input type="text" class="form-control" id="d25ingresar" aria-describedby="emailHelp" name="d25">
    </div>
    </div>
    <div class="col">
     <div class="mb-3">
       <label for="d26" class="form-label" id="d26titulo">Incisivo Lateral Izquierdo Superior</label>
      <input type="text" class="form-control" id="d26ingresar" aria-describedby="emailHelp" name="d26">
    </div>
    </div>
    <div class="col">
     <div class="mb-3">
       <label for="d27" class="form-label" id="d27titulo">Canino Izquierdo Superior</label>
      <input type="text" class="form-control" id="d27ingresar" aria-describedby="emailHelp" name="d27">
    </div>
    </div>
    <div class="col">
      <div class="mb-3">
       <label for="d28" class="form-label" id="d28titulo">Primer Premolar Izquierdo Superior</label>
      <input type="text" class="form-control" id="d28ingresar" aria-describedby="emailHelp" name="d28">
    </div>
    </div>
    <div class="col">
      <div class="mb-3">
       <label for="d29" class="form-label" id="d29titulo">Segundo Premolar Izquierdo Superior</label>
      <input type="text" class="form-control" id="d29ingresar" aria-describedby="emailHelp" name="d29">
    </div>
    </div>
       <div class="col">
      <div class="mb-3">
       <label for="d30" class="form-label" id="d30titulo">Primer Molar Izquierdo Superior</label>
      <input type="text" class="form-control" id="d30ingresar" aria-describedby="emailHelp" name="d30">
    </div>
    </div>
    <div class="col">
     <div class="mb-3">
       <label for="d31" class="form-label" id="d31titulo">Segundo Molar Izquierdo Superior</label>
      <input type="text" class="form-control" id="d31ingresar" aria-describedby="emailHelp" name="d31">
    </div>
    </div>
       <div class="col">
     <div class="mb-3">
       <label for="d32" class="form-label" id="d32titulo">Tercer Molar Izquierdo Superior</label>
      <input type="text" class="form-control" id="d32ingresar" aria-describedby="emailHelp" name="d32">
    </div>
    </div>
      <span class="border border-warning">
       <div class="col">
     <div class="mb-3">
       <label for="me" class="form-label" id="metitulo">Monto Estimado</label>
       <input type="number" class="form-control" id="meingresar" aria-describedby="emailHelp" name="me">
    </div>
    </div>
      </span>
       </div>
        
        <div class="container px-4" id="botones">
  <div class="row gx-5">
    <div class="col">
     <button type="submit" class="btn btn-primary" id="boton1">Registrar Historial</button>
    </div>
    <div class="col">
      
      <a href="menup.php" class="btn btn-primary" id="boton2">Cancelar</a>
    </div>
  </div>
</div>
   </form>
</div>
    </div>
  </body>
</html>

