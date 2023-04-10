<?php
session_start();
if(!isset($_SESSION['letraR'])){
    header("location: ../welcome/welcome.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palabra</title>
    <link rel="stylesheet" href="../CSS/style.css">

</head>
<body>
    <video width="110%" height="110%" autoplay loop muted plays-inline class ="video" >
        <source src="../img/prova7.7.mp4" type="video/mp4" >
    </video>

    <img src="../img/ORDENA.jpg" alt="" width="60%" height="60%" style="position: absolute; top:20%; left:20%;" >

  <form action='proceso7.php' method="post">
    <input type='text' name='final' class='btnEscribir'>
    <button type='submit' class='btnEnviar'>Enviar</button>
</form>
    
<div id="error" style= "position: absolute; top: 140px; left: 300px; color: white;">
    <?php
    if (isset($_GET['error']) && $_GET['error'] == 1){
    echo "PISTA!: La primera letra es la M";
    }
    ?>
    </div>
</body>
</html>