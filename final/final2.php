<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Final</title>
    <link rel="stylesheet" href="../CSS/style.css">

</head>
<body>
    <video width="110%" height="110%" autoplay loop muted plays-inline class ="video" >
        <source src="../img/final2.mp4" type="video/mp4" >
    </video>
    
    <!-- no se ve -->
    

    <form action='../prova1/prova1.php' >
    <p id="felicidades">¡FELICIDADES, HAS LOGRADO SALIR DE LA CASA!</p>
        <button type='submit' class='btnPartida'>Nueva partida</button>
    </form>

    <form action="../welcome/welcome.php">
        <button class="btnInicio">Inicio</button>
    </form>
    
    <?php
    session_destroy();
    ?>
</body>
</html>
    
