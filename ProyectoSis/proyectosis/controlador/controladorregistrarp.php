<?php
$c=$_POST['ci'];
$n=$_POST['nc'];
$cd=$_POST['cda'];
$cc=$_POST['cca'];
include "../modelo/modelopaciente.php";
$instanciar=new modelopaciente($c,$n,$cd,$cc);

$instanciar->registrarp();


