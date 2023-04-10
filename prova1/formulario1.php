?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adivinanza 1</title>
    <link rel="stylesheet" href="../CSS/style.css">
</head>

<body>
    <video width="110%" height="110%" autoplay loop muted plays-inline class ="video" >
        <source src="../img/prova1.1.mp4" type="video/mp4" >
    </video>

    <img src="../img/pista1.png" alt="" class="foto1" width="60%" height="60%" style="position: absolute; top:20%; left:20%;">

    <form action='proceso1.php' method="get">
        <input type='text' name='letraM' id='letraM' class='btnEscribir'>
        <button type='submit' class='btnEnviar'>Enviar</button>
    </form>

    <div id="error" style= "position: absolute; top: 140px; left: 300px; color: white;">
    <?php
    if (isset($_GET['error']) && $_GET['error'] == 1){
    echo "PISTA!: Es la letra 13 del abecedario";
    }
    ?>
    </div>
        
    </body>
    </html>