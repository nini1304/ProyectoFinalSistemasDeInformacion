<?php
$car=" ";
$h=" ";
$f=" ";
$c=$_POST['cc'];
include "../modelo/modelocita.php";
$instanciar=new modelocita($car,$h,$f,$c);

$instanciar->borrar();

