<?php
class modelopaciente{
     public $carnet;
  public $nombre;
  public $codigod;
  public $codigoc;
  
  public function __construct($carnet,$nombre,$codigod,$codigoc){
      $this->carnet=$carnet;
      $this->nombre=$nombre;
      $this->codigod=$codigod;
      $this->codigoc=$codigoc;
  }
 public function getCarnet(){
     return $this->carnet;
 }
 public function getNombre(){
     return $this->nombre;
 }
 public function getCodigod(){
     return $this->codigod;
 }
 public function getCodigoc(){
     return $this->codigoc;
 }
 
 public function registrarp(){
     $conexion= mysqli_connect('localhost','root','','proyectosis','3306');
mysqli_query($conexion, 'SET NAMES "utf8"');
$sql="insert into paciente(ci,nombre,iddentista,numero)values('".$this->getCarnet()."','".$this->getNombre()."',".$this->getCodigod().",".$this->getCodigoc().")";
$insert= mysqli_query($conexion, $sql);
if($insert){
    header("Refresh: 1; URL=../vista/registrarpveri.php");  
}else{
    
         header("Refresh: 1; URL=../vista/repincorrecto.php");  
}
 }
 
  public function buscar(){
     $conexion= mysqli_connect('localhost','root','','proyectosis','3306');
mysqli_query($conexion, 'SET NAMES "utf8"');
$query=mysqli_query($conexion,'SELECT*FROM paciente');
$flag=0;
while ($n= mysqli_fetch_assoc($query)){
    $cibase=$n['ci'];
    $nombrebase=$n['nombre'];
    if(strcmp ($this->getCarnet() , $cibase ) == 0 && strcmp ($this->getNombre() , $nombrebase ) == 0){
      $flag=1;
      header("Refresh: 1; URL=../vista/buscarpveri.php");  
    }
   
       
    
    
}

if($flag==0){
   
         header("Refresh: 1; URL=../vista/busincorrecto.php");  
}
 }

}
?>
