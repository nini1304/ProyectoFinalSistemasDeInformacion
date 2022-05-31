<?php
$n=$_POST['n'];
$c=$_POST['ci'];
$cd=" ";
$cc=" ";
include "../modelo/modelopaciente.php";
$instanciar=new modelopaciente($c,$n,$cd,$cc);

$instanciar->buscar();

