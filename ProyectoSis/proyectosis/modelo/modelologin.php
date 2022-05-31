<?php
class modelologin{
  
  public $usuario;
  public $password;
  public function __construct($usuario,$password){
      
      $this->usuario=$usuario;
      $this->password=$password;
  }
 public function getUsuario(){
     return $this->usuario;
 }
 public function getPassword(){
     return $this->password;
 }

  
  public function verificar(){
      $conexion= mysqli_connect('localhost','root','','proyectosis','3306');
      mysqli_query($conexion, 'SET NAMES "utf8"');
      $query=mysqli_query($conexion,'SELECT*FROM recepcion');
$flag=0;

while ($n= mysqli_fetch_assoc($query)){
    $usuariobase=$n['usuario'];
    $passwordbase=$n['contraseña'];
    if($this->getUsuario()==$usuariobase && $this->getPassword()==$passwordbase){
      $flag=1;
      header("Refresh: 1; URL=../vista/menup.php");  
      
    }
    
    
}
if($flag==0){
    
    header("Refresh: 1; URL=../vista/logincorrecto.php"); 
}

  }
}
    
    
?>



