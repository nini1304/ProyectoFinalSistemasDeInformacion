<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../cssmenu/menupp.css"/>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Menu</title>
  </head>
  <body>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    
     
     <div class="container overflow-hidden" id="contenedor">
  <div class="row gx-5">
    <div class="col">
       <div class="position-absolute top-50 start-0 translate-middle-y">
        <div class="p-3 border bg-light" id="menu">
            
            <div class="card" style="width: 18rem;" id="card1">
  <div class="card-body">
      <h5 class="card-title" id="infotitulo">Información</h5>
    <p class="card-text">De Lunes a Viernes 09:00 a 20:00  Fines de Semana CERRADO Teléfono: 2788111</p>
    
  </div>
</div>
            
            
            <div class="card text-center" style="width: 18rem;" id="card2">
  <div class="card-body">
      <h5 class="card-title" id="menutitulo">Menú de opciones</h5>
   <div class="d-grid gap-2 col-6 mx-auto">
  <a class="btn btn-primary" id="boton1" href="vistabuscarp.php">Buscar Paciente</a>
  <a class="btn btn-primary" id="boton2" href="vistaregistrarp.php">Registrar Paciente</a>
  <a class="btn btn-primary" id="boton3" href="registrarc.php">Registrar Cita</a>
  <a class="btn btn-primary" id="boton4" href="borrarc.php">Borrar Cita</a>
  <a class="btn btn-primary" id="boton5" href="vistaregistrarhd.php">Registrar Historiales Clinicos</a>
  <a class="btn btn-primary" id="boton6" href="actualizar.php" >Actualizar Historiales Clinicos</a>
</div>
  
  

    
  </div>
</div>

            <div class="card text-end" style="width: 18rem;" id="card3">
  <div class="card-body">
      <h5 class="card-title" id="salirtitulo">Salir Del Sistema</h5>
    <p class="card-text">¡Nos vemos en otra mision dental!</p>
    <a href="vistalogin.php" class="btn btn-primary" id="boton7">Terminar</a>
  </div>
</div>
     </div>
        </div>
    </div>
      <div class="col" id="parteimagen">
        
        <div class="p-3 border bg-light" id="imagen">
            <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel" id="carrusel">
                <div class="carousel-inner" id="carrusel2">
    <div class="carousel-item active">
        <img src="../imagenes/carrusel1.png" class="d-block w-100" alt="..." >
    </div>
    <div class="carousel-item">
      <img src="../imagenes/carrusel2.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="../imagenes/carrusel3.png" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </a>
</div>
      </div>
        
    </div>
  </div>
</div>
  </body>
</html>

