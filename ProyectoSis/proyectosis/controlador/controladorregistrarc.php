<?php
$c=$_POST['ci'];
$h=$_POST['horario'];
$f=$_POST['fecha'];
$cita=" ";
include "../modelo/modelocita.php";
$instanciar=new modelocita($c,$h,$f,$cita);

$instanciar->registrarc();

