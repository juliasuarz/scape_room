<?php
$r1=$_POST['r1'];
$r2=$_POST['r2'];
$r3=$_POST['r3'];
$r4=$_POST['r4'];
$r5=$_POST['r5'];


 if ($r1=='bomba' && $r2=='llave' && $r3=='misterio' && $r4=='prueba' && $r5=='salida') {
    session_start();
        $_SESSION['r1']= $r1;
         header("location: ../prova3/prova3.php");
 
 }
 else {
    header('Location: formulario2.php?error=1');  
 }
 ?>