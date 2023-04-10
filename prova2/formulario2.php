<?php
session_start();
if(!isset($_SESSION['letraM'])){
    header("location: ../welcome/welcome.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sopa de letras</title>
    <link rel="stylesheet" href="../CSS/style.css">
</head>
<body>
    <video width="110%" height="110%" autoplay loop muted plays-inline class ="video" >
        <source src="../img/prova2.2.mp4" type="video/mp4" >
    </video>
    <img src="../img/sopa.png" alt="" id="foto1">

    <div class="palabras">
    <form action="proceso2.php" method="post">
    <input type="text" name="r1" >
    <input type="text" name="r2" >
    <input type="text" name="r3" >
    <input type="text" name="r4" >
    <input type="text" name="r5" >
    <input type="submit" id="btnEnviar">
    </form>
    </div>

<div>
<?php
    if (isset($_GET['error']) && $_GET['error'] == 1){?>
    <div class="palabras">
    <form action="proceso2.php" method="post">
    <input type="text" name="r1" placeholder="b">
    <input type="text" name="r2" placeholder="L">
    <input type="text" name="r3" placeholder="m">
    <input type="text" name="r4" placeholder="p">
    <input type="text" name="r5" placeholder="s">
    <input type="submit" id="btnEnviar">
    </form>
</div>
<?php } ?>
    
</div>
</body>
</html>