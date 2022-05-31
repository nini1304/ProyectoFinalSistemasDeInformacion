<?php
  class modelocita{
       public $carnet;
  public $horario;
  public $fecha;
  public $cita;
  
  public function __construct($carnet,$horario,$fecha,$cita){
      $this->carnet=$carnet;
      $this->horario=$horario;
      $this->fecha=$fecha;
      $this->cita=$cita;
  }
 public function getCarnet(){
     return $this->carnet;
 }
 public function getHorario(){
     return $this->horario;
 }
 public function getFecha(){
     return $this->fecha;
 }
  public function getCita(){
     return $this->cita;
 }
 
 public function registrarc(){
     $conexion= mysqli_connect('localhost','root','','proyectosis','3306');
mysqli_query($conexion, 'SET NAMES "utf8"');
$query=mysqli_query($conexion,'SELECT*FROM paciente');
$flag=0;
while ($n= mysqli_fetch_assoc($query)){
    $cibase=$n['ci'];
    if($this->getCarnet()==$cibase){
        $flag=1;
        $iddbase=$n['iddentista'];
        $sql="insert into cita(ci,iddentista2,fecha,hora) values('".$this->getCarnet()."',".$iddbase.",'".$this->getFecha()."','".$this->getHorario()."')";
        $insert= mysqli_query($conexion, $sql);
       
          header("Refresh: 1; URL=../vista/registrarcveri.php");  
            
       
    }
}
if($flag==0){
   
    header("Refresh: 1; URL=../vista/regcincorrecto.php");  
}
 }

 public function borrar(){
     $conexion= mysqli_connect('localhost','root','','proyectosis','3306');
mysqli_query($conexion, 'SET NAMES "utf8"');
$sql="DELETE FROM cita WHERE idcita=".$this->getCita();

$delete= mysqli_query($conexion,$sql);

if($delete){
    header("Refresh: 1; URL=../vista/borrarcveri.php");  
}else{
    
    header("Refresh: 1; URL=../vista/bocincorrecto.php"); 
    
}

 }
  }
?>
