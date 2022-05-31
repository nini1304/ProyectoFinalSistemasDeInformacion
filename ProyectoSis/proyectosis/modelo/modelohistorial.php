<?php
class modelohistorial{
    public $carnet;
    public $diente1;
    public $diente2;
    public $diente3;
    public $diente4;
    public $diente5;
    public $diente6;
    public $diente7;
    public $diente8;
    public $diente9;
    public $diente10;
    public $diente11;
    public $diente12;
    public $diente13;
    public $diente14;
    public $diente15;
    public $diente16;
    public $diente17;
    public $diente18;
    public $diente19;
    public $diente20;
    public $diente21;
    public $diente22;
    public $diente23;
    public $diente24;
    public $diente25;
    public $diente26;
   public $diente27;
   public $diente28;
   public $diente29;
   public $diente30;
   public $diente31;
   public $diente32;
   public $monto;
  
  public $trealizado;
   public function __construct($carnet,$diente1,$diente2,$diente3,$diente4,$diente5,$diente6,$diente7,$diente8,$diente9,$diente10,$diente11,$diente12,$diente13,$diente14,$diente15,$diente16,$diente17,$diente18,$diente19,$diente20,$diente21,$diente22,$diente23,$diente24,$diente25,$diente26,$diente27,$diente28,$diente29,$diente30,$diente31,$diente32,$monto,$trealizado){
      
      $this->carnet=$carnet;
      $this->diente1=$diente1;
      $this->diente2=$diente2;
      $this->diente3=$diente3;
      $this->diente4=$diente4;
      $this->diente5=$diente5;
      $this->diente6=$diente6;
      $this->diente7=$diente7;
      $this->diente8=$diente8;
      $this->diente9=$diente9;
      $this->diente10=$diente10;
      $this->diente11=$diente11;
      $this->diente12=$diente12;
      $this->diente13=$diente13;
      $this->diente14=$diente14;
      $this->diente15=$diente15;
      $this->diente16=$diente16;
      $this->diente17=$diente17;
      $this->diente18=$diente18;
      $this->diente19=$diente19;
      $this->diente20=$diente20;
      $this->diente21=$diente21;
      $this->diente22=$diente22;
      $this->diente23=$diente23;
      $this->diente24=$diente24;
      $this->diente25=$diente25;
      $this->diente26=$diente26;
      $this->diente27=$diente27;
      $this->diente28=$diente28;
      $this->diente29=$diente29;
      $this->diente30=$diente30;
      $this->diente31=$diente31;
      $this->diente32=$diente32;
      $this->monto=$monto;
       
      $this->trealizado=$trealizado;
  }
 public function getCarnet(){
     return $this->carnet;
 }
 public function getDiente1(){
     return $this->diente1;
 }
 public function getDiente2(){
     return $this->diente2;
 }
 public function getDiente3(){
     return $this->diente3;
 }
 public function getDiente4(){
     return $this->diente4;
 }
 public function getDiente5(){
     return $this->diente5;
 }
 public function getDiente6(){
     return $this->diente6;
 }
 public function getDiente7(){
     return $this->diente7;
 }
 public function getDiente8(){
     return $this->diente8;
 }
 public function getDiente9(){
     return $this->diente9;
 }
 public function getDiente10(){
     return $this->diente10;
 }
 public function getDiente11(){
     return $this->diente11;
 }
 public function getDiente12(){
     return $this->diente12;
 }
 public function getDiente13(){
     return $this->diente13;
 }
 public function getDiente14(){
     return $this->diente14;
 }
 public function getDiente15(){
     return $this->diente15;
 }
 public function getDiente16(){
     return $this->diente16;
 }
 public function getDiente17(){
     return $this->diente17;
 }
 public function getDiente18(){
     return $this->diente18;
 }
 public function getDiente19(){
     return $this->diente19;
 }
 public function getDiente20(){
     return $this->diente20;
 }
 public function getDiente21(){
     return $this->diente21;
 }
 public function getDiente22(){
     return $this->diente22;
 }
 public function getDiente23(){
     return $this->diente23;
 }
 public function getDiente24(){
     return $this->diente24;
 }
 public function getDiente25(){
     return $this->diente25;
 }
 public function getDiente26(){
     return $this->diente26;
 }
 public function getDiente27(){
     return $this->diente27;
 }
 public function getDiente28(){
     return $this->diente28;
 }
 public function getDiente29(){
     return $this->diente29;
 }
 public function getDiente30(){
     return $this->diente30;
 }
 public function getDiente31(){
     return $this->diente31;
 }
 public function getDiente32(){
     return $this->diente32;
 }
 public function getMonto(){
     return $this->monto;
 }


 public function getTrealizado(){
     return $this->trealizado;
 }
public function registrarhd(){
    $conexion= mysqli_connect('localhost','root','','proyectosis','3306');
    $dia= date("d");
    $mes= date("n");
    $año= date("Y");
    $fecha="".$dia."/".$mes."/".$año."";
$sql="insert into historial(idpaciente,fecha,dienteuno,dientedos,dientetres,dientecuatro,dientecinco,dienteseis,dientesiete,dienteocho,dientenueve,dientediez,dienteonce,dientedoce,dientetrece,dientecato,dientequnce,dientedse,dienteds,dientedo,dientedn,dientev,dientevu,dientevd,dientevt,dientevcu,dientevc,dientevse,dientevs,dientevo,dientevn,dientet,dientetu,dientetd,precioest)values('".$this->getCarnet()."','".$fecha."','".$this->getDiente1()."','".$this->getDiente2()."','".$this->getDiente3()."','".$this->getDiente4()."','".$this->getDiente5()."','".$this->getDiente6()."','".$this->getDiente7()."','".$this->getDiente8()."','".$this->getDiente9()."','".$this->getDiente10()."','".$this->getDiente11()."','".$this->getDiente12()."','".$this->getDiente13()."','".$this->getDiente14()."','".$this->getDiente15()."','".$this->getDiente16()."','".$this->getDiente17()."','".$this->getDiente18()."','".$this->getDiente19()."','".$this->getDiente20()."','".$this->getDiente21()."','".$this->getDiente22()."','".$this->getDiente23()."','".$this->getDiente24()."','".$this->getDiente25()."','".$this->getDiente26()."','".$this->getDiente27()."','".$this->getDiente28()."','".$this->getDiente29()."','".$this->getDiente30()."','".$this->getDiente31()."','".$this->getDiente32()."',".$this->getMonto().")";
$insert= mysqli_query($conexion, $sql);
        if($insert){
            $sql2="insert into montopendiente(p2,montotal,tratamientohecho)values('".$this->getCarnet()."',".$this->getMonto().",0)";
            $insert2=mysqli_query($conexion, $sql2);
          header("Refresh: 1; URL=../vista/vistaregistrarht.php");  
           
       }else{
           
           header("Refresh: 1; URL=../vista/rehincorrecto.php");  
        }
}

    

  public function actualizart(){
     $conexion= mysqli_connect('localhost','root','','proyectosis','3306');
mysqli_query($conexion, 'SET NAMES "utf8"');


$query=mysqli_query($conexion,'SELECT*FROM montopendiente');
            while ($n= mysqli_fetch_assoc($query)){
                 $cibase=$n['p2'];
                if($this->getCarnet()==$cibase){
                    $th=$n['tratamientohecho'];
                    $montobase=$n['montotal'];
                    $resta=$montobase-$this->getMonto();
                    $suma=$th+$this->getTrealizado();
                    $sql="update montopendiente set tratamientohecho=".$suma." where p2='".$this->getCarnet()."'";
                    $update= mysqli_query($conexion, $sql);
                    $sql2="update montopendiente set montotal=".$resta." where p2='".$this->getCarnet()."'";
                    $update2= mysqli_query($conexion, $sql2);
                }
            }
 
     
      header("Refresh: 1; URL=../vista/actualizarveri.php");  
 }
}
?>

