<?php
$u=$_POST['u'];
$p=$_POST['p'];
include "../modelo/modelologin.php";
$instanciar=new modelologin($u,$p);

$instanciar->verificar();
