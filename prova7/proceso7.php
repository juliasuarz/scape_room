<?php

$mar = $_POST['final'];
    

    if($mar == 'mar') { 
        header('Location: ../final/final.php');
        
    }
    else {
        header('Location: formulario7.php?error=1'); 
    }

?>