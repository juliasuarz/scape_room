<?php
$letraR = $_POST['letraR'];
    

    if($letraR == 'r') { 
        session_start();
        $_SESSION['letraR']=$letraR;
        header('Location: ../prova7/prova7.php');
       
    }
    else {
        header('Location: formulario6.php?error=1');  
    }


?>