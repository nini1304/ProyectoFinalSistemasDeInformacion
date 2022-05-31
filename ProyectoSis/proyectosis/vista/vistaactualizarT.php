<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../cssactualizarT/actualizarTTT.css"/>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Actualizar Tratamientos</title>
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
         <div class="container px-4" id="tratamientooo">
  <div class="row gx-5">
    <div class="col">
     <?php
     $c=$_POST['ci'];
     $conexion= mysqli_connect('localhost','root','','proyectosis','3306');
     mysqli_query($conexion, 'SET NAMES "utf8"');
     $contador=0;
     echo "<h1 id='titulotratamientos'>Tratamientos</h1>";
     $query=mysqli_query($conexion,'SELECT*FROM tratamientos');
            while ($n= mysqli_fetch_assoc($query)){
                 $cibase=$n['p'];
                if($c==$cibase){
                    $contador=$contador+1;
                    echo "".$n['tratamiento']."</br>";
                }
            }
    $query2=mysqli_query($conexion,'SELECT*FROM montopendiente');
            while ($n2= mysqli_fetch_assoc($query2)){
                 $cibase2=$n2['p2'];
                  if($c==$cibase2){
                      $te=$n2['tratamientohecho'];
                      
                      
                  }
            }
            echo "<h1 id='titulograficos'>Grafico de avances de los Tratamientos</h1>";
            if($contador==1){
                if($te==$contador){
                    
                    echo '<div class="progress">';
                    echo '<div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>';
                    echo '</div>';
                    
                }else{
                    echo '<div class="progress">';
                    echo '<div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>';
                    echo '</div>';
                }
            }
            if($contador==2){
                if($te==$contador){
                    echo '<div class="progress">';
                    echo ' <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>';
                    echo ' <div class="progress-bar bg-success" role="progressbar" style="width: 50%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>';
                    echo '</div>';
                }else{
                    if($te==1){
                    echo '<div class="progress">';
                    echo ' <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>';
                    echo ' <div class="progress-bar bg-success" role="progressbar" style="width: 0%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>';
                    echo '</div>';
                    }else{
                        if($te==0){
                        echo '<div class="progress">';
                        echo ' <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>';
                        echo ' <div class="progress-bar bg-success" role="progressbar" style="width: 0%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>';
                        echo '</div>';
                }
                    }
                }
                
            }
            if($contador==3){
                if($te==$contador){
                    echo '<div class="progress">';
                    echo'<div class="progress-bar" role="progressbar" style="width: 33.3%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>';
                    echo' <div class="progress-bar bg-success" role="progressbar" style="width: 33.3%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>';
                    echo' <div class="progress-bar bg-info" role="progressbar" style="width: 33.4%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>';
                    echo '</div>';
                }else{
                    if($te==2){
                        echo '<div class="progress">';
                        echo'<div class="progress-bar" role="progressbar" style="width: 33.3%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>';
                        echo' <div class="progress-bar bg-success" role="progressbar" style="width: 0%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>';
                        echo' <div class="progress-bar bg-info" role="progressbar" style="width: 33.3%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>';
                        echo '</div>';
                    }else{
                        if($te==1){
                            echo '<div class="progress">';
                            echo'<div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>';
                            echo' <div class="progress-bar bg-success" role="progressbar" style="width: 0%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>';
                            echo' <div class="progress-bar bg-info" role="progressbar" style="width: 33.3%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>';
                            echo '</div>';
                        }else{
                            if($te==0){
                                echo '<div class="progress">';
                            echo'<div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>';
                            echo' <div class="progress-bar bg-success" role="progressbar" style="width: 0%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>';
                            echo' <div class="progress-bar bg-info" role="progressbar" style="width: 0%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>';
                            echo '</div>';
                            }
                        }
                    }
                }
            }
            if($contador==4){
                if($te==$contador){
                    echo '<div class="progress">';
                    echo'<div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>';
                    echo' <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>';
                    echo' <div class="progress-bar bg-info" role="progressbar" style="width: 25%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>';
                     echo'<div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>';
                    echo '</div>';
                }else{
                    if($te==3){
                        echo '<div class="progress">';
                        echo'<div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>';
                        echo' <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>';
                        echo' <div class="progress-bar bg-info" role="progressbar" style="width: 25%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>';
                         echo'<div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>';
                        echo '</div>';
                    }else{
                        if($te==2){
                            echo '<div class="progress">';
                            echo'<div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>';
                            echo' <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>';
                            echo' <div class="progress-bar bg-info" role="progressbar" style="width: 0%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>';
                             echo'<div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>';
                            echo '</div>';
                        }else{
                            if($te==1){
                                echo '<div class="progress">';
                            echo'<div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>';
                            echo' <div class="progress-bar bg-success" role="progressbar" style="width: 0%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>';
                            echo' <div class="progress-bar bg-info" role="progressbar" style="width: 0%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>';
                             echo'<div class="progress-bar" role="progressbar" style="width: 33.3%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>';
                            echo '</div>';
                            }else{
                                if($te==0){
                                    echo '<div class="progress">';
                            echo'<div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>';
                            echo' <div class="progress-bar bg-success" role="progressbar" style="width: 0%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>';
                            echo' <div class="progress-bar bg-info" role="progressbar" style="width: 0%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>';
                             echo'<div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>';
                            echo '</div>';
                                }
                            }
                        }
                    }
                }
            }
            if($contador==5){
                if($te==$contador){
                    echo '<div class="progress">';
                    echo'<div class="progress-bar" role="progressbar" style="width: 20%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>';
                    echo' <div class="progress-bar bg-success" role="progressbar" style="width: 20%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>';
                    echo' <div class="progress-bar bg-info" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>';
                     echo'<div class="progress-bar" role="progressbar" style="width: 20%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>';
                     echo' <div class="progress-bar bg-success" role="progressbar" style="width: 20%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>';
                    echo '</div>';
                }else{
                    if($te==4){
                        echo '<div class="progress">';
                        echo'<div class="progress-bar" role="progressbar" style="width: 20%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>';
                        echo' <div class="progress-bar bg-success" role="progressbar" style="width: 20%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>';
                        echo' <div class="progress-bar bg-info" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>';
                         echo'<div class="progress-bar" role="progressbar" style="width: 20%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>';
                         echo' <div class="progress-bar bg-success" role="progressbar" style="width: 0%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>';
                        echo '</div>';
                    }else{
                        if($te==3){
                            echo '<div class="progress">';
                            echo'<div class="progress-bar" role="progressbar" style="width: 20%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>';
                            echo' <div class="progress-bar bg-success" role="progressbar" style="width: 20%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>';
                            echo' <div class="progress-bar bg-info" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>';
                             echo'<div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>';
                             echo' <div class="progress-bar bg-success" role="progressbar" style="width: 0%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>';
                            echo '</div>';
                        }else{
                            if($te==2){
                                echo '<div class="progress">';
                            echo'<div class="progress-bar" role="progressbar" style="width: 20%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>';
                            echo' <div class="progress-bar bg-success" role="progressbar" style="width: 20%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>';
                            echo' <div class="progress-bar bg-info" role="progressbar" style="width: 0%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>';
                             echo'<div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>';
                             echo' <div class="progress-bar bg-success" role="progressbar" style="width: 0%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>';
                            echo '</div>';
                            }else{
                                if($te==1){
                                    echo '<div class="progress">';
                            echo'<div class="progress-bar" role="progressbar" style="width: 20%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>';
                            echo' <div class="progress-bar bg-success" role="progressbar" style="width: 0%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>';
                            echo' <div class="progress-bar bg-info" role="progressbar" style="width: 0%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>';
                             echo'<div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>';
                             echo' <div class="progress-bar bg-success" role="progressbar" style="width: 0%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>';
                            echo '</div>';
                                }else{
                                     if($te==0){
                                         echo '<div class="progress">';
                            echo'<div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>';
                            echo' <div class="progress-bar bg-success" role="progressbar" style="width: 0%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>';
                            echo' <div class="progress-bar bg-info" role="progressbar" style="width: 0%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>';
                             echo'<div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>';
                             echo' <div class="progress-bar bg-success" role="progressbar" style="width: 0%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>';
                            echo '</div>';
                                     }
                                }
                            }
                        }
                    }
                }
                
            }
            if($contador==6){
                if($te==$contador){
                    echo '<div class="progress">';
                    echo'<div class="progress-bar" role="progressbar" style="width: 16.65%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>';
                    echo' <div class="progress-bar bg-success" role="progressbar" style="width: 16.67%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>';
                    echo' <div class="progress-bar bg-info" role="progressbar" style="width: 16.67%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>';
                     echo'<div class="progress-bar" role="progressbar" style="width: 16.67%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>';
                     echo' <div class="progress-bar bg-success" role="progressbar" style="width: 16.67%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>';
                     echo' <div class="progress-bar bg-info" role="progressbar" style="width: 16.67%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>';
                    echo '</div>';
                }else{
                    if($te==5){
                        echo '<div class="progress">';
                        echo'<div class="progress-bar" role="progressbar" style="width: 16.65%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>';
                        echo' <div class="progress-bar bg-success" role="progressbar" style="width: 16.67%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>';
                        echo' <div class="progress-bar bg-info" role="progressbar" style="width: 16.67%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>';
                         echo'<div class="progress-bar" role="progressbar" style="width: 16.67%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>';
                         echo' <div class="progress-bar bg-success" role="progressbar" style="width: 16.67%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>';
                         echo' <div class="progress-bar bg-info" role="progressbar" style="width: 0%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>';
                        echo '</div>';
                    }else{
                        if($te==4){
                            echo '<div class="progress">';
                            echo'<div class="progress-bar" role="progressbar" style="width: 16.65%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>';
                            echo' <div class="progress-bar bg-success" role="progressbar" style="width: 16.67%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>';
                            echo' <div class="progress-bar bg-info" role="progressbar" style="width: 16.67%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>';
                             echo'<div class="progress-bar" role="progressbar" style="width: 16.67%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>';
                             echo' <div class="progress-bar bg-success" role="progressbar" style="width: 0%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>';
                             echo' <div class="progress-bar bg-info" role="progressbar" style="width: 0%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>';
                            echo '</div>';
                        }else{
                            if($te==3){
                                echo '<div class="progress">';
                            echo'<div class="progress-bar" role="progressbar" style="width: 16.65%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>';
                            echo' <div class="progress-bar bg-success" role="progressbar" style="width: 16.67%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>';
                            echo' <div class="progress-bar bg-info" role="progressbar" style="width: 16.67%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>';
                             echo'<div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>';
                             echo' <div class="progress-bar bg-success" role="progressbar" style="width: 0%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>';
                             echo' <div class="progress-bar bg-info" role="progressbar" style="width: 0%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>';
                            echo '</div>';
                            }else{
                                if($te==2){
                                    echo '<div class="progress">';
                            echo'<div class="progress-bar" role="progressbar" style="width: 16.65%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>';
                            echo' <div class="progress-bar bg-success" role="progressbar" style="width: 16.67%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>';
                            echo' <div class="progress-bar bg-info" role="progressbar" style="width: 0%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>';
                             echo'<div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>';
                             echo' <div class="progress-bar bg-success" role="progressbar" style="width: 0%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>';
                             echo' <div class="progress-bar bg-info" role="progressbar" style="width: 0%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>';
                            echo '</div>';
                                }else{
                                     if($ta==1){
                                         echo '<div class="progress">';
                            echo'<div class="progress-bar" role="progressbar" style="width: 16.65%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>';
                            echo' <div class="progress-bar bg-success" role="progressbar" style="width: 0%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>';
                            echo' <div class="progress-bar bg-info" role="progressbar" style="width: 0%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>';
                             echo'<div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>';
                             echo' <div class="progress-bar bg-success" role="progressbar" style="width: 0%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>';
                             echo' <div class="progress-bar bg-info" role="progressbar" style="width: 0%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>';
                            echo '</div>';
                                     }else{
                                         if($ta==0){
                                             echo '<div class="progress">';
                                            echo'<div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>';
                                            echo' <div class="progress-bar bg-success" role="progressbar" style="width: 0%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>';
                                            echo' <div class="progress-bar bg-info" role="progressbar" style="width: 0%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>';
                                             echo'<div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>';
                                             echo' <div class="progress-bar bg-success" role="progressbar" style="width: 0%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>';
                                             echo' <div class="progress-bar bg-info" role="progressbar" style="width: 0%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>';
                                            echo '</div>';
                                         }
                                     }
                                }
                            }
                        }
                    }
                }
            }
            if($contador==7){
                if($te==$contador){
                    echo '<div class="progress">';
                    echo'<div class="progress-bar" role="progressbar" style="width: 14.32%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>';
                    echo' <div class="progress-bar bg-success" role="progressbar" style="width: 14.28%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>';
                    echo' <div class="progress-bar bg-info" role="progressbar" style="width: 14.28%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>';
                     echo'<div class="progress-bar" role="progressbar" style="width: 14.28%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>';
                     echo' <div class="progress-bar bg-success" role="progressbar" style="width: 14.28%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>';
                     echo' <div class="progress-bar bg-info" role="progressbar" style="width: 14.28%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>';
                     echo'<div class="progress-bar" role="progressbar" style="width: 14.28%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>';
                    echo '</div>';
                }else{
                    if($te==6){
                         echo '<div class="progress">';
                    echo'<div class="progress-bar" role="progressbar" style="width: 14.32%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>';
                    echo' <div class="progress-bar bg-success" role="progressbar" style="width: 14.28%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>';
                    echo' <div class="progress-bar bg-info" role="progressbar" style="width: 14.28%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>';
                     echo'<div class="progress-bar" role="progressbar" style="width: 14.28%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>';
                     echo' <div class="progress-bar bg-success" role="progressbar" style="width: 14.28%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>';
                     echo' <div class="progress-bar bg-info" role="progressbar" style="width: 14.28%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>';
                     echo'<div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>';
                    echo '</div>';
                    }else{
                        if($te==5){
                             echo '<div class="progress">';
                    echo'<div class="progress-bar" role="progressbar" style="width: 14.32%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>';
                    echo' <div class="progress-bar bg-success" role="progressbar" style="width: 14.28%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>';
                    echo' <div class="progress-bar bg-info" role="progressbar" style="width: 14.28%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>';
                     echo'<div class="progress-bar" role="progressbar" style="width: 14.28%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>';
                     echo' <div class="progress-bar bg-success" role="progressbar" style="width: 14.28%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>';
                     echo' <div class="progress-bar bg-info" role="progressbar" style="width: 0%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>';
                     echo'<div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>';
                    echo '</div>';
                        }else{
                            if($te==4){
                                echo '<div class="progress">';
                    echo'<div class="progress-bar" role="progressbar" style="width: 14.32%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>';
                    echo' <div class="progress-bar bg-success" role="progressbar" style="width: 14.28%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>';
                    echo' <div class="progress-bar bg-info" role="progressbar" style="width: 14.28%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>';
                     echo'<div class="progress-bar" role="progressbar" style="width: 14.28%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>';
                     echo' <div class="progress-bar bg-success" role="progressbar" style="width: 0%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>';
                     echo' <div class="progress-bar bg-info" role="progressbar" style="width: 0%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>';
                     echo'<div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>';
                    echo '</div>';
                            }else{
                                if($te==3){
                                     echo '<div class="progress">';
                    echo'<div class="progress-bar" role="progressbar" style="width: 14.32%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>';
                    echo' <div class="progress-bar bg-success" role="progressbar" style="width: 14.28%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>';
                    echo' <div class="progress-bar bg-info" role="progressbar" style="width: 14.28%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>';
                     echo'<div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>';
                     echo' <div class="progress-bar bg-success" role="progressbar" style="width: 0%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>';
                     echo' <div class="progress-bar bg-info" role="progressbar" style="width: 0%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>';
                     echo'<div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>';
                    echo '</div>';
                                }else{
                                     if($ta==2){
                                         echo '<div class="progress">';
                    echo'<div class="progress-bar" role="progressbar" style="width: 14.32%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>';
                    echo' <div class="progress-bar bg-success" role="progressbar" style="width: 14.28%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>';
                    echo' <div class="progress-bar bg-info" role="progressbar" style="width: 0%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>';
                     echo'<div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>';
                     echo' <div class="progress-bar bg-success" role="progressbar" style="width: 0%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>';
                     echo' <div class="progress-bar bg-info" role="progressbar" style="width: 0%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>';
                     echo'<div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>';
                    echo '</div>';
                                     }else{
                                         if($ta==1){
                                            echo '<div class="progress">';
                    echo'<div class="progress-bar" role="progressbar" style="width: 14.32%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>';
                    echo' <div class="progress-bar bg-success" role="progressbar" style="width: 0%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>';
                    echo' <div class="progress-bar bg-info" role="progressbar" style="width: 0%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>';
                     echo'<div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>';
                     echo' <div class="progress-bar bg-success" role="progressbar" style="width: 0%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>';
                     echo' <div class="progress-bar bg-info" role="progressbar" style="width: 0%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>';
                     echo'<div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>';
                    echo '</div>';
                                         }else{
                                             if($ta==0){
                                                  echo '<div class="progress">';
                    echo'<div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>';
                    echo' <div class="progress-bar bg-success" role="progressbar" style="width: 0%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>';
                    echo' <div class="progress-bar bg-info" role="progressbar" style="width: 0%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>';
                     echo'<div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>';
                     echo' <div class="progress-bar bg-success" role="progressbar" style="width: 0%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>';
                     echo' <div class="progress-bar bg-info" role="progressbar" style="width: 0%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>';
                     echo'<div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>';
                    echo '</div>';
                                             }
                                         }
                                     }
                                }
                            }
                        }
                    }
                }
                
            }
            if($contador==8){
                if($te==$contador){
                    echo '<div class="progress">';
                    echo'<div class="progress-bar" role="progressbar" style="width: 12.5%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>';
                    echo' <div class="progress-bar bg-success" role="progressbar" style="width: 12.5%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>';
                    echo' <div class="progress-bar bg-info" role="progressbar" style="width: 12.5%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>';
                     echo'<div class="progress-bar" role="progressbar" style="width: 12.5%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>';
                     echo' <div class="progress-bar bg-success" role="progressbar" style="width: 12.5%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>';
                     echo' <div class="progress-bar bg-info" role="progressbar" style="width: 12.5%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>';
                     echo'<div class="progress-bar" role="progressbar" style="width: 12.5%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>';
                      echo' <div class="progress-bar bg-success" role="progressbar" style="width: 12.5%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>';
                    echo '</div>';
                }else{
                    if($te==7){
                         echo '<div class="progress">';
                    echo'<div class="progress-bar" role="progressbar" style="width: 12.5%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>';
                    echo' <div class="progress-bar bg-success" role="progressbar" style="width: 12.5%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>';
                    echo' <div class="progress-bar bg-info" role="progressbar" style="width: 12.5%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>';
                     echo'<div class="progress-bar" role="progressbar" style="width: 12.5%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>';
                     echo' <div class="progress-bar bg-success" role="progressbar" style="width: 12.5%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>';
                     echo' <div class="progress-bar bg-info" role="progressbar" style="width: 12.5%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>';
                     echo'<div class="progress-bar" role="progressbar" style="width: 12.5%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>';
                      echo' <div class="progress-bar bg-success" role="progressbar" style="width: 0%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>';
                    echo '</div>';
                    }else{
                        if($te==6){
                             echo '<div class="progress">';
                    echo'<div class="progress-bar" role="progressbar" style="width: 12.5%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>';
                    echo' <div class="progress-bar bg-success" role="progressbar" style="width: 12.5%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>';
                    echo' <div class="progress-bar bg-info" role="progressbar" style="width: 12.5%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>';
                     echo'<div class="progress-bar" role="progressbar" style="width: 12.5%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>';
                     echo' <div class="progress-bar bg-success" role="progressbar" style="width: 12.5%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>';
                     echo' <div class="progress-bar bg-info" role="progressbar" style="width: 12.5%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>';
                     echo'<div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>';
                      echo' <div class="progress-bar bg-success" role="progressbar" style="width: 0%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>';
                    echo '</div>';
                        }else{
                            if($te==5){
                                echo '<div class="progress">';
                    echo'<div class="progress-bar" role="progressbar" style="width: 12.5%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>';
                    echo' <div class="progress-bar bg-success" role="progressbar" style="width: 12.5%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>';
                    echo' <div class="progress-bar bg-info" role="progressbar" style="width: 12.5%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>';
                     echo'<div class="progress-bar" role="progressbar" style="width: 12.5%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>';
                     echo' <div class="progress-bar bg-success" role="progressbar" style="width: 12.5%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>';
                     echo' <div class="progress-bar bg-info" role="progressbar" style="width: 0%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>';
                     echo'<div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>';
                      echo' <div class="progress-bar bg-success" role="progressbar" style="width: 0%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>';
                    echo '</div>';
                            }else{
                                if($te==4){
                                     echo '<div class="progress">';
                    echo'<div class="progress-bar" role="progressbar" style="width: 12.5%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>';
                    echo' <div class="progress-bar bg-success" role="progressbar" style="width: 12.5%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>';
                    echo' <div class="progress-bar bg-info" role="progressbar" style="width: 12.5%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>';
                     echo'<div class="progress-bar" role="progressbar" style="width: 12.5%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>';
                     echo' <div class="progress-bar bg-success" role="progressbar" style="width: 0%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>';
                     echo' <div class="progress-bar bg-info" role="progressbar" style="width: 0%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>';
                     echo'<div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>';
                      echo' <div class="progress-bar bg-success" role="progressbar" style="width: 0%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>';
                    echo '</div>';
                                }else{
                                     if($ta==3){
                                        echo '<div class="progress">';
                    echo'<div class="progress-bar" role="progressbar" style="width: 12.5%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>';
                    echo' <div class="progress-bar bg-success" role="progressbar" style="width: 12.5%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>';
                    echo' <div class="progress-bar bg-info" role="progressbar" style="width: 12.5%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>';
                     echo'<div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>';
                     echo' <div class="progress-bar bg-success" role="progressbar" style="width: 0%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>';
                     echo' <div class="progress-bar bg-info" role="progressbar" style="width: 0%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>';
                     echo'<div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>';
                      echo' <div class="progress-bar bg-success" role="progressbar" style="width: 0%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>';
                    echo '</div>';
                                     }else{
                                         if($ta==2){
                                            echo '<div class="progress">';
                    echo'<div class="progress-bar" role="progressbar" style="width: 12.5%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>';
                    echo' <div class="progress-bar bg-success" role="progressbar" style="width: 12.5%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>';
                    echo' <div class="progress-bar bg-info" role="progressbar" style="width: 0%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>';
                     echo'<div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>';
                     echo' <div class="progress-bar bg-success" role="progressbar" style="width: 0%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>';
                     echo' <div class="progress-bar bg-info" role="progressbar" style="width: 0%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>';
                     echo'<div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>';
                      echo' <div class="progress-bar bg-success" role="progressbar" style="width: 0%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>';
                    echo '</div>';
                                         }else{
                                             if($ta==1){
                                                 echo '<div class="progress">';
                    echo'<div class="progress-bar" role="progressbar" style="width: 12.5%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>';
                    echo' <div class="progress-bar bg-success" role="progressbar" style="width: 0%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>';
                    echo' <div class="progress-bar bg-info" role="progressbar" style="width: 0%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>';
                     echo'<div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>';
                     echo' <div class="progress-bar bg-success" role="progressbar" style="width: 0%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>';
                     echo' <div class="progress-bar bg-info" role="progressbar" style="width: 0%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>';
                     echo'<div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>';
                      echo' <div class="progress-bar bg-success" role="progressbar" style="width: 0%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>';
                    echo '</div>';
                                             }else{
                                                 if($ta==0){
                                                     echo '<div class="progress">';
                    echo'<div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>';
                    echo' <div class="progress-bar bg-success" role="progressbar" style="width: 0%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>';
                    echo' <div class="progress-bar bg-info" role="progressbar" style="width: 0%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>';
                     echo'<div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>';
                     echo' <div class="progress-bar bg-success" role="progressbar" style="width: 0%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>';
                     echo' <div class="progress-bar bg-info" role="progressbar" style="width: 0%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>';
                     echo'<div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>';
                      echo' <div class="progress-bar bg-success" role="progressbar" style="width: 0%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>';
                    echo '</div>';
                                                 }
                                             }
                                         }
                                     }
                                }
                            }
                        }
                    }
                }
                
            }
            if($contador==9){
                 if($te==$contador){
                    echo '<div class="progress">';
                    echo'<div class="progress-bar" role="progressbar" style="width: 11.12%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>';
                    echo' <div class="progress-bar bg-success" role="progressbar" style="width: 11.11%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>';
                    echo' <div class="progress-bar bg-info" role="progressbar" style="width: 11.11%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>';
                     echo'<div class="progress-bar" role="progressbar" style="width: 11.11%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>';
                     echo' <div class="progress-bar bg-success" role="progressbar" style="width: 11.11%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>';
                     echo' <div class="progress-bar bg-info" role="progressbar" style="width: 11.11%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>';
                     echo'<div class="progress-bar" role="progressbar" style="width: 11.11%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>';
                      echo' <div class="progress-bar bg-success" role="progressbar" style="width: 11.11%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>';
                      echo' <div class="progress-bar bg-info" role="progressbar" style="width: 11.11%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>';
                    echo '</div>';
                }else{
                    if($te==8){
                        echo '<div class="progress">';
                    echo'<div class="progress-bar" role="progressbar" style="width: 11.12%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>';
                    echo' <div class="progress-bar bg-success" role="progressbar" style="width: 11.11%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>';
                    echo' <div class="progress-bar bg-info" role="progressbar" style="width: 11.11%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>';
                     echo'<div class="progress-bar" role="progressbar" style="width: 11.11%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>';
                     echo' <div class="progress-bar bg-success" role="progressbar" style="width: 11.11%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>';
                     echo' <div class="progress-bar bg-info" role="progressbar" style="width: 11.11%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>';
                     echo'<div class="progress-bar" role="progressbar" style="width: 11.11%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>';
                      echo' <div class="progress-bar bg-success" role="progressbar" style="width: 11.11%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>';
                      echo' <div class="progress-bar bg-info" role="progressbar" style="width: 0%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>';
                    echo '</div>';
                    }else{
                        if($te==7){
                              echo '<div class="progress">';
                    echo'<div class="progress-bar" role="progressbar" style="width: 11.12%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>';
                    echo' <div class="progress-bar bg-success" role="progressbar" style="width: 11.11%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>';
                    echo' <div class="progress-bar bg-info" role="progressbar" style="width: 11.11%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>';
                     echo'<div class="progress-bar" role="progressbar" style="width: 11.11%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>';
                     echo' <div class="progress-bar bg-success" role="progressbar" style="width: 11.11%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>';
                     echo' <div class="progress-bar bg-info" role="progressbar" style="width: 11.11%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>';
                     echo'<div class="progress-bar" role="progressbar" style="width: 11.11%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>';
                      echo' <div class="progress-bar bg-success" role="progressbar" style="width: 0%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>';
                      echo' <div class="progress-bar bg-info" role="progressbar" style="width: 0%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>';
                    echo '</div>';
                        }else{
                            if($te==6){
                                echo '<div class="progress">';
                    echo'<div class="progress-bar" role="progressbar" style="width: 11.12%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>';
                    echo' <div class="progress-bar bg-success" role="progressbar" style="width: 11.11%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>';
                    echo' <div class="progress-bar bg-info" role="progressbar" style="width: 11.11%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>';
                     echo'<div class="progress-bar" role="progressbar" style="width: 11.11%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>';
                     echo' <div class="progress-bar bg-success" role="progressbar" style="width: 11.11%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>';
                     echo' <div class="progress-bar bg-info" role="progressbar" style="width: 11.11%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>';
                     echo'<div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>';
                      echo' <div class="progress-bar bg-success" role="progressbar" style="width: 0%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>';
                      echo' <div class="progress-bar bg-info" role="progressbar" style="width: 0%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>';
                    echo '</div>';
                            }else{
                                if($te==5){
                                     echo '<div class="progress">';
                    echo'<div class="progress-bar" role="progressbar" style="width: 11.12%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>';
                    echo' <div class="progress-bar bg-success" role="progressbar" style="width: 11.11%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>';
                    echo' <div class="progress-bar bg-info" role="progressbar" style="width: 11.11%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>';
                     echo'<div class="progress-bar" role="progressbar" style="width: 11.11%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>';
                     echo' <div class="progress-bar bg-success" role="progressbar" style="width: 11.11%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>';
                     echo' <div class="progress-bar bg-info" role="progressbar" style="width: 0%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>';
                     echo'<div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>';
                      echo' <div class="progress-bar bg-success" role="progressbar" style="width: 0%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>';
                      echo' <div class="progress-bar bg-info" role="progressbar" style="width: 0%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>';
                    echo '</div>';
                                }else{
                                     if($ta==4){
                                        echo '<div class="progress">';
                    echo'<div class="progress-bar" role="progressbar" style="width: 11.12%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>';
                    echo' <div class="progress-bar bg-success" role="progressbar" style="width: 11.11%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>';
                    echo' <div class="progress-bar bg-info" role="progressbar" style="width: 11.11%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>';
                     echo'<div class="progress-bar" role="progressbar" style="width: 11.11%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>';
                     echo' <div class="progress-bar bg-success" role="progressbar" style="width: 0%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>';
                     echo' <div class="progress-bar bg-info" role="progressbar" style="width: 0%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>';
                     echo'<div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>';
                      echo' <div class="progress-bar bg-success" role="progressbar" style="width: 0%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>';
                      echo' <div class="progress-bar bg-info" role="progressbar" style="width: 0%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>';
                    echo '</div>';
                                     }else{
                                         if($ta==3){
                                             echo '<div class="progress">';
                    echo'<div class="progress-bar" role="progressbar" style="width: 11.12%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>';
                    echo' <div class="progress-bar bg-success" role="progressbar" style="width: 11.11%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>';
                    echo' <div class="progress-bar bg-info" role="progressbar" style="width: 11.11%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>';
                     echo'<div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>';
                     echo' <div class="progress-bar bg-success" role="progressbar" style="width: 0%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>';
                     echo' <div class="progress-bar bg-info" role="progressbar" style="width: 0%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>';
                     echo'<div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>';
                      echo' <div class="progress-bar bg-success" role="progressbar" style="width: 0%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>';
                      echo' <div class="progress-bar bg-info" role="progressbar" style="width: 0%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>';
                    echo '</div>';
                                         }else{
                                             if($ta==2){
                                                 echo '<div class="progress">';
                    echo'<div class="progress-bar" role="progressbar" style="width: 11.12%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>';
                    echo' <div class="progress-bar bg-success" role="progressbar" style="width: 11.11%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>';
                    echo' <div class="progress-bar bg-info" role="progressbar" style="width: 0%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>';
                     echo'<div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>';
                     echo' <div class="progress-bar bg-success" role="progressbar" style="width: 0%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>';
                     echo' <div class="progress-bar bg-info" role="progressbar" style="width: 0%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>';
                     echo'<div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>';
                      echo' <div class="progress-bar bg-success" role="progressbar" style="width: 0%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>';
                      echo' <div class="progress-bar bg-info" role="progressbar" style="width: 0%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>';
                    echo '</div>';
                                             }else{
                                                 if($ta==1){
                                                     echo '<div class="progress">';
                    echo'<div class="progress-bar" role="progressbar" style="width: 11.12%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>';
                    echo' <div class="progress-bar bg-success" role="progressbar" style="width: 0%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>';
                    echo' <div class="progress-bar bg-info" role="progressbar" style="width: 0%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>';
                     echo'<div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>';
                     echo' <div class="progress-bar bg-success" role="progressbar" style="width: 0%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>';
                     echo' <div class="progress-bar bg-info" role="progressbar" style="width: 0%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>';
                     echo'<div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>';
                      echo' <div class="progress-bar bg-success" role="progressbar" style="width: 0%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>';
                      echo' <div class="progress-bar bg-info" role="progressbar" style="width: 0%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>';
                    echo '</div>';
                                                 } else {
                                                     if($ta==0){
                                                         echo '<div class="progress">';
                    echo'<div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>';
                    echo' <div class="progress-bar bg-success" role="progressbar" style="width: 0%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>';
                    echo' <div class="progress-bar bg-info" role="progressbar" style="width: 0%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>';
                     echo'<div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>';
                     echo' <div class="progress-bar bg-success" role="progressbar" style="width: 0%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>';
                     echo' <div class="progress-bar bg-info" role="progressbar" style="width: 0%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>';
                     echo'<div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>';
                      echo' <div class="progress-bar bg-success" role="progressbar" style="width: 0%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>';
                      echo' <div class="progress-bar bg-info" role="progressbar" style="width: 0%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>';
                    echo '</div>';
                                                     }
                                                 }
                                             }
                                         }
                                     }
                                }
                            }
                        }
                    }
                }
                
            }
            if($contador==10){
                if($te==$contador){
                    echo '<div class="progress">';
                    echo'<div class="progress-bar" role="progressbar" style="width: 10%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>';
                    echo' <div class="progress-bar bg-success" role="progressbar" style="width: 10%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>';
                    echo' <div class="progress-bar bg-info" role="progressbar" style="width: 10%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>';
                     echo'<div class="progress-bar" role="progressbar" style="width: 10%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>';
                     echo' <div class="progress-bar bg-success" role="progressbar" style="width: 10%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>';
                     echo' <div class="progress-bar bg-info" role="progressbar" style="width: 10%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>';
                     echo'<div class="progress-bar" role="progressbar" style="width: 10%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>';
                      echo' <div class="progress-bar bg-success" role="progressbar" style="width: 10%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>';
                      echo' <div class="progress-bar bg-info" role="progressbar" style="width: 10%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>';
                      echo'<div class="progress-bar" role="progressbar" style="width: 10%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>';
                    echo '</div>';
                }else{
                    if($te==9){
                        echo '<div class="progress">';
                    echo'<div class="progress-bar" role="progressbar" style="width: 10%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>';
                    echo' <div class="progress-bar bg-success" role="progressbar" style="width: 10%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>';
                    echo' <div class="progress-bar bg-info" role="progressbar" style="width: 10%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>';
                     echo'<div class="progress-bar" role="progressbar" style="width: 10%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>';
                     echo' <div class="progress-bar bg-success" role="progressbar" style="width: 10%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>';
                     echo' <div class="progress-bar bg-info" role="progressbar" style="width: 10%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>';
                     echo'<div class="progress-bar" role="progressbar" style="width: 10%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>';
                      echo' <div class="progress-bar bg-success" role="progressbar" style="width: 10%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>';
                      echo' <div class="progress-bar bg-info" role="progressbar" style="width: 10%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>';
                      echo'<div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>';
                    echo '</div>';
                    }else{
                        if($te==8){
                              echo '<div class="progress">';
                    echo'<div class="progress-bar" role="progressbar" style="width: 10%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>';
                    echo' <div class="progress-bar bg-success" role="progressbar" style="width: 10%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>';
                    echo' <div class="progress-bar bg-info" role="progressbar" style="width: 10%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>';
                     echo'<div class="progress-bar" role="progressbar" style="width: 10%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>';
                     echo' <div class="progress-bar bg-success" role="progressbar" style="width: 10%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>';
                     echo' <div class="progress-bar bg-info" role="progressbar" style="width: 10%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>';
                     echo'<div class="progress-bar" role="progressbar" style="width: 10%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>';
                      echo' <div class="progress-bar bg-success" role="progressbar" style="width: 10%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>';
                      echo' <div class="progress-bar bg-info" role="progressbar" style="width: 0%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>';
                      echo'<div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>';
                    echo '</div>';
                        }else{
                            if($te==7){
                                echo '<div class="progress">';
                    echo'<div class="progress-bar" role="progressbar" style="width: 10%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>';
                    echo' <div class="progress-bar bg-success" role="progressbar" style="width: 10%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>';
                    echo' <div class="progress-bar bg-info" role="progressbar" style="width: 10%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>';
                     echo'<div class="progress-bar" role="progressbar" style="width: 10%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>';
                     echo' <div class="progress-bar bg-success" role="progressbar" style="width: 10%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>';
                     echo' <div class="progress-bar bg-info" role="progressbar" style="width: 10%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>';
                     echo'<div class="progress-bar" role="progressbar" style="width: 10%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>';
                      echo' <div class="progress-bar bg-success" role="progressbar" style="width: 0%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>';
                      echo' <div class="progress-bar bg-info" role="progressbar" style="width: 0%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>';
                      echo'<div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>';
                    echo '</div>';
                            }else{
                                if($te==6){
                                     echo '<div class="progress">';
                    echo'<div class="progress-bar" role="progressbar" style="width: 10%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>';
                    echo' <div class="progress-bar bg-success" role="progressbar" style="width: 10%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>';
                    echo' <div class="progress-bar bg-info" role="progressbar" style="width: 10%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>';
                     echo'<div class="progress-bar" role="progressbar" style="width: 10%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>';
                     echo' <div class="progress-bar bg-success" role="progressbar" style="width: 10%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>';
                     echo' <div class="progress-bar bg-info" role="progressbar" style="width: 10%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>';
                     echo'<div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>';
                      echo' <div class="progress-bar bg-success" role="progressbar" style="width: 0%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>';
                      echo' <div class="progress-bar bg-info" role="progressbar" style="width: 0%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>';
                      echo'<div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>';
                    echo '</div>';
                                }else{
                                     if($ta==5){
                                       echo '<div class="progress">';
                    echo'<div class="progress-bar" role="progressbar" style="width: 10%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>';
                    echo' <div class="progress-bar bg-success" role="progressbar" style="width: 10%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>';
                    echo' <div class="progress-bar bg-info" role="progressbar" style="width: 10%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>';
                     echo'<div class="progress-bar" role="progressbar" style="width: 10%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>';
                     echo' <div class="progress-bar bg-success" role="progressbar" style="width: 10%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>';
                     echo' <div class="progress-bar bg-info" role="progressbar" style="width: 0%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>';
                     echo'<div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>';
                      echo' <div class="progress-bar bg-success" role="progressbar" style="width: 0%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>';
                      echo' <div class="progress-bar bg-info" role="progressbar" style="width: 0%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>';
                      echo'<div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>';
                    echo '</div>';
                                     }else{
                                         if($ta==4){
                                             echo '<div class="progress">';
                    echo'<div class="progress-bar" role="progressbar" style="width: 10%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>';
                    echo' <div class="progress-bar bg-success" role="progressbar" style="width: 10%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>';
                    echo' <div class="progress-bar bg-info" role="progressbar" style="width: 10%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>';
                     echo'<div class="progress-bar" role="progressbar" style="width: 10%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>';
                     echo' <div class="progress-bar bg-success" role="progressbar" style="width: 0%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>';
                     echo' <div class="progress-bar bg-info" role="progressbar" style="width: 0%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>';
                     echo'<div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>';
                      echo' <div class="progress-bar bg-success" role="progressbar" style="width: 0%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>';
                      echo' <div class="progress-bar bg-info" role="progressbar" style="width: 0%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>';
                      echo'<div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>';
                    echo '</div>';
                                         }else{
                                             if($ta==3){
                                                 echo '<div class="progress">';
                    echo'<div class="progress-bar" role="progressbar" style="width: 10%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>';
                    echo' <div class="progress-bar bg-success" role="progressbar" style="width: 10%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>';
                    echo' <div class="progress-bar bg-info" role="progressbar" style="width: 10%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>';
                     echo'<div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>';
                     echo' <div class="progress-bar bg-success" role="progressbar" style="width: 0%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>';
                     echo' <div class="progress-bar bg-info" role="progressbar" style="width: 0%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>';
                     echo'<div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>';
                      echo' <div class="progress-bar bg-success" role="progressbar" style="width: 0%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>';
                      echo' <div class="progress-bar bg-info" role="progressbar" style="width: 0%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>';
                      echo'<div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>';
                    echo '</div>';
                                             }else{
                                                 if($ta==2){
                                                     echo '<div class="progress">';
                    echo'<div class="progress-bar" role="progressbar" style="width: 10%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>';
                    echo' <div class="progress-bar bg-success" role="progressbar" style="width: 10%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>';
                    echo' <div class="progress-bar bg-info" role="progressbar" style="width: 0%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>';
                     echo'<div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>';
                     echo' <div class="progress-bar bg-success" role="progressbar" style="width: 0%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>';
                     echo' <div class="progress-bar bg-info" role="progressbar" style="width: 0%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>';
                     echo'<div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>';
                      echo' <div class="progress-bar bg-success" role="progressbar" style="width: 0%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>';
                      echo' <div class="progress-bar bg-info" role="progressbar" style="width: 0%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>';
                      echo'<div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>';
                    echo '</div>';
                                                 } else {
                                                     if($ta==1){
                                                         echo '<div class="progress">';
                    echo'<div class="progress-bar" role="progressbar" style="width: 10%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>';
                    echo' <div class="progress-bar bg-success" role="progressbar" style="width: 0%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>';
                    echo' <div class="progress-bar bg-info" role="progressbar" style="width: 0%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>';
                     echo'<div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>';
                     echo' <div class="progress-bar bg-success" role="progressbar" style="width: 0%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>';
                     echo' <div class="progress-bar bg-info" role="progressbar" style="width: 0%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>';
                     echo'<div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>';
                      echo' <div class="progress-bar bg-success" role="progressbar" style="width: 0%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>';
                      echo' <div class="progress-bar bg-info" role="progressbar" style="width: 0%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>';
                      echo'<div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>';
                    echo '</div>';
                                                     }else{
                                                         if($ta==0){
                                                              echo '<div class="progress">';
                    echo'<div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>';
                    echo' <div class="progress-bar bg-success" role="progressbar" style="width: 0%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>';
                    echo' <div class="progress-bar bg-info" role="progressbar" style="width: 0%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>';
                     echo'<div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>';
                     echo' <div class="progress-bar bg-success" role="progressbar" style="width: 0%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>';
                     echo' <div class="progress-bar bg-info" role="progressbar" style="width: 0%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>';
                     echo'<div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>';
                      echo' <div class="progress-bar bg-success" role="progressbar" style="width: 0%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>';
                      echo' <div class="progress-bar bg-info" role="progressbar" style="width: 0%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>';
                      echo'<div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>';
                    echo '</div>';
                                                         }
                                                     }
                                                 }
                                             }
                                         }
                                     }
                                }
                            }
                        }
                    }
                }
                
                
            }
     ?>
        <form  method="POST" action="../controlador/controladoractualizarht.php" >
         <div class="mb-3">
             <label for="ci" class="form-label" id="cititulo">CI Paciente</label>
    <input type="text" class="form-control" id="ciingresar" aria-describedby="emailHelp" name="ci">
    <div id="emailHelp" class="form-text">Ingrese el ci del paciente para confirmar la actualizacion</div>
  </div>
  <div class="mb-3">
      <label for="tr" class="form-label" id="TRtitulo">Ingrese cantidad de Tratamientos Realizados</label>
    <input type="number" class="form-control" id="Tringresar" aria-describedby="emailHelp" name="tr">
    
  </div>
   <?php
   $c2=$_POST['ci'];
   $conexion2= mysqli_connect('localhost','root','','proyectosis','3306');
   
mysqli_query($conexion, 'SET NAMES "utf8"');
$query3=mysqli_query($conexion,'SELECT*FROM montopendiente');

while ($n= mysqli_fetch_assoc($query3)){
    $cibase3=$n['p2'];
    if($c2==$cibase3){
        $monto=$n['montotal'];
    }
}
echo "El monto que debe el parciente es:".$monto;
   ?>
    <div class="mb-3">
             <label for="dinero" class="form-label" id="montotitulo">El Paciente pago un monto del Total a Pagar?</label>
             <input type="number" class="form-control" id="ciingresar" aria-describedby="emailHelp" name="dinero">
    <div id="emailHelp" class="form-text">Ingrese el monto que el paciente pago del total</div>
  </div>  
  
  <div class="container px-4" id="botones">
  <div class="row gx-5">
    <div class="col">
     <button type="submit" class="btn btn-primary" id="boton1">Actualizar</button>
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

