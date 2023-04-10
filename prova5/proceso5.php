<?php

$bosque = $_POST['bosque'];
    
    if($bosque == 'bosque') { 
        session_start();
        $_SESSION['bosque']=$bosque;
        header('Location: ../prova6/prova6.php');
         
    }
    else {
        header('Location: formulario5.php?error=1'); 
    }


?>