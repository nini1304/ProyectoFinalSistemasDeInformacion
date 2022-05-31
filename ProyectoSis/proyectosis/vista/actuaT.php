<?php
$carnet=$_POST['carnet'];
$conexion= mysqli_connect('localhost','root','','proyectosis','3306');
mysqli_query($conexion, 'SET NAMES "utf8"');
if (isset($_POST['sendForm'])) {
    if (isset($_POST['d1']) && $_POST['d1'] == '1'){
        $sql="update historial set dienteuno='curado' where idpaciente='".$carnet."'";
        $update= mysqli_query($conexion, $sql);}
    if (isset($_POST['d2']) && $_POST['d2'] == '1'){
        $sql2="update historial set dientedos='curado' where idpaciente='".$carnet."'";
        $update= mysqli_query($conexion, $sql2);}
    if (isset($_POST['d3']) && $_POST['d3'] == '1'){
        $sql3="update historial set dientetres='curado' where idpaciente='".$carnet."'";
        $update= mysqli_query($conexion, $sql3);}
    if (isset($_POST['d4']) && $_POST['d4'] == '1'){
        $sql4="update historial set dientecuatro='curado' where idpaciente='".$carnet."'";
        $update= mysqli_query($conexion, $sql4);}
    if (isset($_POST['d5']) && $_POST['d5'] == '1'){
        $sql5="update historial set dientecinco='curado' where idpaciente='".$carnet."'";
        $update= mysqli_query($conexion, $sql5);}
    if (isset($_POST['d6']) && $_POST['d6'] == '1'){
        $sql6="update historial set dienteseis='curado' where idpaciente='".$carnet."'";
        $update= mysqli_query($conexion, $sql6);}
    if (isset($_POST['d7']) && $_POST['d7'] == '1'){
        $sql7="update historial set dientesiete='curado' where idpaciente='".$carnet."'";
        $update= mysqli_query($conexion, $sql7);}
    if (isset($_POST['d8']) && $_POST['d8'] == '1'){
        $sql8="update historial set dienteocho='curado' where idpaciente='".$carnet."'";
        $update= mysqli_query($conexion, $sql8);}
    if (isset($_POST['d9']) && $_POST['d9'] == '1'){
        $sql9="update historial set dientenueve='curado' where idpaciente='".$carnet."'";
        $update= mysqli_query($conexion, $sql9);}
    if (isset($_POST['d10']) && $_POST['d10'] == '1'){
        $sql10="update historial set dientediez='curado' where idpaciente='".$carnet."'";
        $update= mysqli_query($conexion, $sql10);}
    if (isset($_POST['d11']) && $_POST['d11'] == '1'){
        $sql11="update historial set dienteonce='curado' where idpaciente='".$carnet."'";
        $update= mysqli_query($conexion, $sql11);}
    if (isset($_POST['d12']) && $_POST['d12'] == '1'){
        $sql12="update historial set dientedoce='curado' where idpaciente='".$carnet."'";
        $update= mysqli_query($conexion, $sql12);}
    if (isset($_POST['d13']) && $_POST['d13'] == '1'){
        $sql13="update historial set dientetrece='curado' where idpaciente='".$carnet."'";
        $update= mysqli_query($conexion, $sql13);}
    if (isset($_POST['d14']) && $_POST['d14'] == '1'){
        $sql14="update historial set dientecato='curado' where idpaciente='".$carnet."'";
        $update= mysqli_query($conexion, $sql14);}
    if (isset($_POST['d15']) && $_POST['d15'] == '1'){
        $sql15="update historial set dientequnce='curado' where idpaciente='".$carnet."'";
        $update= mysqli_query($conexion, $sql15);}
    if (isset($_POST['d16']) && $_POST['d16'] == '1'){
        $sql16="update historial set dientedse='curado' where idpaciente='".$carnet."'";
        $update= mysqli_query($conexion, $sql16);}
    if (isset($_POST['d17']) && $_POST['d17'] == '1'){
        $sql17="update historial set dienteds='curado' where idpaciente='".$carnet."'";
        $update= mysqli_query($conexion, $sql17);}
    if (isset($_POST['d18']) && $_POST['d18'] == '1'){
        $sql18="update historial set dientedo='curado' where idpaciente='".$carnet."'";
        $update= mysqli_query($conexion, $sql18);}
    if (isset($_POST['d19']) && $_POST['d19'] == '1'){
        $sql19="update historial set dientedn='curado' where idpaciente='".$carnet."'";
        $update= mysqli_query($conexion, $sql19);}
    if (isset($_POST['d20']) && $_POST['d20'] == '1'){
        $sql20="update historial set dientev='curado' where idpaciente='".$carnet."'";
        $update= mysqli_query($conexion, $sql20);}
    if (isset($_POST['d21']) && $_POST['d21'] == '1'){
        $sql21="update historial set dientevu='curado' where idpaciente='".$carnet."'";
        $update= mysqli_query($conexion, $sql21);}
    if (isset($_POST['d22']) && $_POST['d22'] == '1'){
        $sql22="update historial set dientevd='curado' where idpaciente='".$carnet."'";
        $update= mysqli_query($conexion, $sql22);}
    if (isset($_POST['d23']) && $_POST['d23'] == '1'){
        $sql23="update historial set dientevt='curado' where idpaciente='".$carnet."'";
        $update= mysqli_query($conexion, $sql23);}
    if (isset($_POST['d24']) && $_POST['d24'] == '1'){
        $sql24="update historial set dientevcu='curado' where idpaciente='".$carnet."'";
        $update= mysqli_query($conexion, $sql24);}
    if (isset($_POST['d25']) && $_POST['d25'] == '1'){
        $sql25="update historial set dientevc='curado' where idpaciente='".$carnet."'";
        $update= mysqli_query($conexion, $sql25);}
    if (isset($_POST['d26']) && $_POST['d26'] == '1'){
        $sql26="update historial set dientevse='curado' where idpaciente='".$carnet."'";
        $update= mysqli_query($conexion, $sql26);}
    if (isset($_POST['d27']) && $_POST['d27'] == '1'){
        $sql27="update historial set dientevs='curado' where idpaciente='".$carnet."'";
        $update= mysqli_query($conexion, $sql27);}
    if (isset($_POST['d28']) && $_POST['d28'] == '1'){
        $sql28="update historial set dientevo='curado' where idpaciente='".$carnet."'";
        $update= mysqli_query($conexion, $sql28);}
    if (isset($_POST['d29']) && $_POST['d29'] == '1'){
        $sql29="update historial set dientevn='curado' where idpaciente='".$carnet."'";
        $update= mysqli_query($conexion, $sql29);}
    if (isset($_POST['d30']) && $_POST['d30'] == '1'){
        $sql30="update historial set dientet='curado' where idpaciente='".$carnet."'";
        $update= mysqli_query($conexion, $sql30);}
    if (isset($_POST['d31']) && $_POST['d31'] == '1'){
        $sql31="update historial set dientetu='curado' where idpaciente='".$carnet."'";
        $update= mysqli_query($conexion, $sql31);}
    if (isset($_POST['d32']) && $_POST['d32'] == '1'){
        $sql32="update historial set dientetd='curado' where idpaciente='".$carnet."'";
        $update= mysqli_query($conexion, $sql32);}
        
        $dia= date("d");
        $mes= date("n");
        $año= date("Y");
        $fecha="".$dia."/".$mes."/".$año."";
        $sql33="update historial set fecha='".$fecha."' where idpaciente='".$carnet."'";
        $update= mysqli_query($conexion, $sql33);
        
   
}
header("Refresh: 1; URL=../vista/actualizar2.php");

