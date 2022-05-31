<?php
$c=$_POST['ci'];
$d1=$_POST['d1'];
$d2=$_POST['d2'];
$d3=$_POST['d3'];
$d4=$_POST['d4'];
$d5=$_POST['d5'];
$d6=$_POST['d6'];
$d7=$_POST['d7'];
$d8=$_POST['d8'];
$d9=$_POST['d9'];
$d10=$_POST['d10'];
$d11=$_POST['d11'];
$d12=$_POST['d12'];
$d13=$_POST['d13'];
$d14=$_POST['d14'];
$d15=$_POST['d15'];
$d16=$_POST['d16'];
$d17=$_POST['d17'];
$d18=$_POST['d18'];
$d19=$_POST['d19'];
$d20=$_POST['d20'];
$d21=$_POST['d21'];
$d22=$_POST['d22'];
$d23=$_POST['d23'];
$d24=$_POST['d24'];
$d25=$_POST['d25'];
$d26=$_POST['d26'];
$d27=$_POST['d27'];
$d28=$_POST['d28'];
$d29=$_POST['d29'];
$d30=$_POST['d30'];
$d31=$_POST['d31'];
$d32=$_POST['d32'];
$m=$_POST['me'];

$tr=" ";
include "../modelo/modelohistorial.php";
$instanciar=new modelohistorial($c,$d1,$d2,$d3,$d4,$d5,$d6,$d7,$d8,$d9,$d10,$d11,$d12,$d13,$d14,$d15,$d16,$d17,$d18,$d19,$d20,$d21,$d22,$d23,$d24,$d25,$d26,$d27,$d28,$d29,$d30,$d31,$d32,$m,$tr);

$instanciar->registrarhd();

