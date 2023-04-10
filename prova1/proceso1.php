<!-- <!DOCTYPE html>
<html lang="en">
<?php

if(isset($_GET['letraM'])) { 
    $letraM = $_GET['letraM'];

    if($letraM == 'm') { 
        session_start();
        $_SESSION['letraM']=$letraM;
        header('Location: ../prova2/prova2.php'); 
    
    }
    else {
        header('Location: formulario1.php?error=1'); 
         
    }
}

?>