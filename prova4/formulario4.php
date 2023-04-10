
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adivinanza 2t</title>
    <link rel="stylesheet" href="../CSS/style.css">

</head>
<body>
    <video width="110%" height="110%" autoplay loop muted plays-inline class ="video" >
        <source src="../img/prov4.4.mp4" type="video/mp4" >
    </video>
    <img src="roma.png" alt="" style="position: absolute; top:20%; left:20%;" width="60%" height="65%">
</head>
<body>
    <video width="110%" height="110%" autoplay loop muted plays-inline class ="video" >
        <source src="../img/prov4.4.mp4" type="video/mp4" >
    </video>
    <img src="../img/letraA.png" alt="" style="position: absolute; top:20%; left:20%;" width="60%" height="65%">
    <form action='proceso4.php' method="post">
        <input type='text' name='letraA' class='btnEscribir'>
        <button type='submit' class='btnEnviar'>Enviar</button>
    </form>
    
    <div id="error" style= "position: absolute; top: 140px; left: 300px; color: white;">
    <?php
    if (isset($_GET['error']) && $_GET['error'] == 1){
    echo "PISTA!: Es la letra 1 del abecedario";
    }
    ?>
    </div>
    </body>
    </html>