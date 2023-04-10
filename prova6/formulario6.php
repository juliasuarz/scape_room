<?php
session_start();
if(!isset($_SESSION['bosque'])){
    header("location: welcome.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>adivinanza 3</title>
    <link rel="stylesheet" href="../css/style.css">

</head>
<body>
    <video width="110%" height="110%" autoplay loop muted plays-inline class ="video" >
        <source src="../img/prova6.6.mp4" type="video/mp4" >
    </video>

  <img src="../img/letrar.jpg" class="foto1" width="60%" height="60%" style="position: absolute; top:15%; left:20%;" >

  <form action='proceso6.php' method="post">
    <input type='text' name='letraR' class='btnEscribir'>
    <button type='submit' class='btnEnviar'>Enviar</button>
</form>
    
<div id="error" style= "position: absolute; top: 100px; left: 300px; color: white;">
    <?php
    if (isset($_GET['error']) && $_GET['error'] == 1){
    echo "PISTA!: Es la letra 19 del abecedario";
    }
    ?>
    </div>
</body>
</html>