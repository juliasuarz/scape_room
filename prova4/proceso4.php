<?php

if(isset($_POST['letraA'])) { 
    $letraA= $_POST['letraA'];

    if($letraA == 'a') { 
        session_start();
        $_SESSION['letraA']=$letraA;
        header('Location: ../prova5/prova5.php'); 
      
    }
    else {
        header('Location: formulario4.php?error=1');  
      
    }
}
