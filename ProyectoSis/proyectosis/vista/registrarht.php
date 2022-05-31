<?php
$c=$_POST['ci'];
$conexion= mysqli_connect('localhost','root','','proyectosis','3306');
mysqli_query($conexion, 'SET NAMES "utf8"');
if (isset($_POST['sendForm'])) {
    if(isset($_POST['ortodoncias']) && $_POST['ortodoncias'] == '1'){
       $sql="insert into tratamientos(tratamiento,p,precio)values('Ortodoncia superior','".$c."',500)";
        $insert= mysqli_query($conexion, $sql);
        if($insert){
            $query=mysqli_query($conexion,'SELECT*FROM montopendiente');
            while ($n= mysqli_fetch_assoc($query)){
                $cibase=$n['p2'];
                if($c==$cibase){
                     $montobase=$n['montotal'];
                     $suma=$montobase+500;
                     $sql2="update montopendiente set montotal=".$suma." where p2='".$c."'";
                     $update= mysqli_query($conexion, $sql2);
                }
               
                
            }
        }
    }
    if(isset($_POST['ortodonciai']) && $_POST['ortodonciai'] == '1'){
       $sql="insert into tratamientos(tratamiento,p,precio)values('Ortodoncia inferior','".$c."',500)";
        $insert= mysqli_query($conexion, $sql);
        if($insert){
            $query=mysqli_query($conexion,'SELECT*FROM montopendiente');
            while ($n= mysqli_fetch_assoc($query)){
                $cibase=$n['p2'];
                if($c==$cibase){
                     $montobase=$n['montotal'];
                     $suma=$montobase+500;
                     $sql2="update montopendiente set montotal=".$suma." where p2='".$c."'";
                     $update= mysqli_query($conexion, $sql2);
                }
               
                
            }
        }
    }
    if(isset($_POST['blanqueamiento']) && $_POST['blanqueamiento'] == '1'){
       $sql="insert into tratamientos(tratamiento,p,precio)values('Blanqueamiento','".$c."',500)";
        $insert= mysqli_query($conexion, $sql);
        if($insert){
            $query=mysqli_query($conexion,'SELECT*FROM montopendiente');
            while ($n= mysqli_fetch_assoc($query)){
                $cibase=$n['p2'];
                if($c==$cibase){
                     $montobase=$n['montotal'];
                     $suma=$montobase+500;
                     $sql2="update montopendiente set montotal=".$suma." where p2='".$c."'";
                     $update= mysqli_query($conexion, $sql2);
                }
               
                
            }
        }
    }
    if(isset($_POST['limpieza']) && $_POST['limpieza'] == '1'){
       $sql="insert into tratamientos(tratamiento,p,precio)values('Limpieza dental','".$c."',300)";
        $insert= mysqli_query($conexion, $sql);
        if($insert){
            $query=mysqli_query($conexion,'SELECT*FROM montopendiente');
            while ($n= mysqli_fetch_assoc($query)){
                $cibase=$n['p2'];
                if($c==$cibase){
                     $montobase=$n['montotal'];
                     $suma=$montobase+300;
                     $sql2="update montopendiente set montotal=".$suma." where p2='".$c."'";
                     $update= mysqli_query($conexion, $sql2);
                }
               
                
            }
        }
    }
    if(isset($_POST['ortopedias']) && $_POST['ortopedias'] == '1'){
       $sql="insert into tratamientos(tratamiento,p,precio)values('Ortopedia Maxilar Superior','".$c."',600)";
        $insert= mysqli_query($conexion, $sql);
        if($insert){
            $query=mysqli_query($conexion,'SELECT*FROM montopendiente');
            while ($n= mysqli_fetch_assoc($query)){
                $cibase=$n['p2'];
                if($c==$cibase){
                     $montobase=$n['montotal'];
                     $suma=$montobase+600;
                     $sql2="update montopendiente set montotal=".$suma." where p2='".$c."'";
                     $update= mysqli_query($conexion, $sql2);
                }
               
                
            }
        }
    }
    if(isset($_POST['ortopediai']) && $_POST['ortopediai'] == '1'){
       $sql="insert into tratamientos(tratamiento,p,precio)values('Ortopedia Maxilar Inferior','".$c."',600)";
        $insert= mysqli_query($conexion, $sql);
        if($insert){
            $query=mysqli_query($conexion,'SELECT*FROM montopendiente');
            while ($n= mysqli_fetch_assoc($query)){
                $cibase=$n['p2'];
                if($c==$cibase){
                     $montobase=$n['montotal'];
                     $suma=$montobase+600;
                     $sql2="update montopendiente set montotal=".$suma." where p2='".$c."'";
                     $update= mysqli_query($conexion, $sql2);
                }
               
                
            }
        }
    }
    if(isset($_POST['contencions']) && $_POST['contencions'] == '1'){
       $sql="insert into tratamientos(tratamiento,p,precio)values('Placa de contencion Superior','".$c."',200)";
        $insert= mysqli_query($conexion, $sql);
        if($insert){
            $query=mysqli_query($conexion,'SELECT*FROM montopendiente');
            while ($n= mysqli_fetch_assoc($query)){
                $cibase=$n['p2'];
                if($c==$cibase){
                     $montobase=$n['montotal'];
                     $suma=$montobase+200;
                     $sql2="update montopendiente set montotal=".$suma." where p2='".$c."'";
                     $update= mysqli_query($conexion, $sql2);
                }
               
                
            }
        }
    }
    if(isset($_POST['contencioni']) && $_POST['contencioni'] == '1'){
       $sql="insert into tratamientos(tratamiento,p,precio)values('Placa de contencion Inferior','".$c."',200)";
        $insert= mysqli_query($conexion, $sql);
        if($insert){
            $query=mysqli_query($conexion,'SELECT*FROM montopendiente');
            while ($n= mysqli_fetch_assoc($query)){
                $cibase=$n['p2'];
                if($c==$cibase){
                     $montobase=$n['montotal'];
                     $suma=$montobase+200;
                     $sql2="update montopendiente set montotal=".$suma." where p2='".$c."'";
                     $update= mysqli_query($conexion, $sql2);
                }
               
                
            }
        }
    }
    if(isset($_POST['temporaneas']) && $_POST['temporaneas'] == '1'){
       $sql="insert into tratamientos(tratamiento,p,precio)values('Placa temporanea Superior','".$c."',100)";
        $insert= mysqli_query($conexion, $sql);
        if($insert){
            $query=mysqli_query($conexion,'SELECT*FROM montopendiente');
            while ($n= mysqli_fetch_assoc($query)){
                $cibase=$n['p2'];
                if($c==$cibase){
                     $montobase=$n['montotal'];
                     $suma=$montobase+100;
                     $sql2="update montopendiente set montotal=".$suma." where p2='".$c."'";
                     $update= mysqli_query($conexion, $sql2);
                }
               
                
            }
        }
    }
    if(isset($_POST['temporaneai']) && $_POST['temporaneai'] == '1'){
       $sql="insert into tratamientos(tratamiento,p,precio)values('Placa temporanea Inferior','".$c."',100)";
        $insert= mysqli_query($conexion, $sql);
        if($insert){
            $query=mysqli_query($conexion,'SELECT*FROM montopendiente');
            while ($n= mysqli_fetch_assoc($query)){
                $cibase=$n['p2'];
                if($c==$cibase){
                     $montobase=$n['montotal'];
                     $suma=$montobase+100;
                     $sql2="update montopendiente set montotal=".$suma." where p2='".$c."'";
                     $update= mysqli_query($conexion, $sql2);
                }
               
                
            }
        }
    }
    if(isset($_POST['ortodoncias']) && $_POST['ortodoncias'] == '1'){
         header("Refresh: 1; URL=registrarhveri.php");
    }else{
        header("Refresh: 1; URL=registrarhveri.php");
    }
}


