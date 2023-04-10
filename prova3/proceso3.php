<?php

$palabra = $_POST['exit'];
    

    if($palabra == 'exit') { 
        session_start();
        $_SESSION['palabra']=$palabra;
        header('Location: ../prova4/prova4.php');
        
    }
    else {
        header('Location: formulario3.php?error=1');  
       
    }


?>