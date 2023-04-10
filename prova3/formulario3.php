<?php
session_start();
if(!isset($_SESSION['r1'])){
    header("location: ../welcome/welcome.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laberinto</title>
    <link rel="stylesheet" href="../CSS/style.css">

</head>

<body>
    <video width="110%" height="110%" autoplay loop muted plays-inline class ="video" >
        <source src="../img/prova3.3.mp4" type="video/mp4" >
    </video>

    <form action='proceso3.php' method="post">
        <input type='text' name='exit' class='btnLab'>
        <button type='submit' class='enviarLab'>Enviar</button>
        </form>

    <div id="boxmodel">
    <a href="#nogo" id="a0"></a>
    <a href="#nogo" id="a1"></a>
    <a href="#nogo" id="a2"></a>
    <a href="#nogo" id="a3"></a>
    <a href="#nogo" id="a4"></a>
    <a href="#nogo" id="a5"></a>
    <a href="#nogo" id="a6"></a>
    <a href="#nogo" id="a7"></a>
    <a href="#nogo" id="a8"></a>
    <a href="#nogo" id="a9"></a>
     
    <a href="#nogo" id="b0"></a>
    <a href="#nogo" id="b1"></a>
    <a href="#nogo" id="b2"></a>
    <a href="#nogo" id="b3"></a>
    <a href="#nogo" id="b4"></a>
    <a href="#nogo" id="b5"></a>
    <a href="#nogo" id="b6"></a>
    <a href="#nogo" id="b7"></a>
    <a href="#nogo" id="b8"></a>
    <a href="#nogo" id="b9"></a>
     
    <a href="#nogo" id="c0"></a>
    <a href="#nogo" id="xc1"></a>
    <a href="#nogo" id="xc2"></a>
    <a href="#nogo" id="xc3"></a>
    <a href="#nogo" id="xc4"></a>
     
    <a href="#nogo" id="xc5"></a>
    <a href="#nogo" id="c6"></a>
    <a href="#nogo" id="c7"></a>
    <a href="#nogo" id="c8"></a>
    <a href="#nogo" id="c9"></a>
     
    <a href="#nogo" id="d0"></a>
    <a href="#nogo" id="d1"></a>
    <a href="#nogo" id="d2"></a>
    <a href="#nogo" id="d3"></a>
    <a href="#nogo" id="d4"></a>
    <a href="#nogo" id="d5"></a>
    <a href="#nogo" id="d6"></a>
    <a href="#nogo" id="d7"></a>
    <a href="#nogo" id="d8"></a>
    <a href="#nogo" id="d9"></a>
     
    <a href="#nogo" id="e0"></a>
    <a href="#nogo" id="e1"></a>
    <a href="#nogo" id="e2"></a>
    <a href="#nogo" id="e3"></a>
    <a href="#nogo" id="e4"></a>
    <a href="#nogo" id="e5"></a>
    <a href="#nogo" id="e6"></a>
    <a href="#nogo" id="e7"></a>
    <a href="#nogo" id="e8"></a>
    <a href="#nogo" id="e9"></a>
     
    <a href="#nogo" id="f0"></a>
    <a href="#nogo" id="f1"></a>
    <a href="#nogo" id="f2"></a>
    <a href="#nogo" id="f3"></a>
    <a href="#nogo" id="f4"></a>
    <a href="#nogo" id="f5"></a>
     
    <a href="#nogo" id="f6"></a>
    <a href="#nogo" id="f7"></a>
    <a href="#nogo" id="f8"></a>
    <a href="#nogo" id="f9"></a>
     
    <a href="#nogo" id="g0"></a>
    <a href="#nogo" id="g1"></a>
    <a href="#nogo" id="g2"></a>
    <a href="#nogo" id="g3"></a>
    <a href="#nogo" id="g4"></a>
    <a href="#nogo" id="g5"></a>
    <a href="#nogo" id="g6"></a>
    <a href="#nogo" id="g7"></a>
    <a href="#nogo" id="g8"></a>
    <a href="#nogo" id="g9"></a>
     
    <a href="#nogo" id="h0"></a>
     
    <a href="#nogo" id="h1"></a>
    <a href="#nogo" id="h2"></a>
    <a href="#nogo" id="h3"></a>
    <a href="#nogo" id="h4"></a>
    <a href="#nogo" id="h5"></a>
    <a href="#nogo" id="h6"></a>
    <a href="#nogo" id="h7"></a>
    <a href="#nogo" id="h8"></a>
    <a href="#nogo" id="h9"></a>
     
    <a href="#nogo" id="i0"></a>
    <a href="#nogo" id="i1"></a>
    <a href="#nogo" id="i2"></a>
    <a href="#nogo" id="i3"></a>
    <a href="#nogo" id="i4"></a>
    <a href="#nogo" id="i5"></a>
    <a href="#nogo" id="i6"></a>
     
    <a href="#nogo" id="i7"></a>
    <a href="#nogo" id="i8"></a>
    <a href="#nogo" id="i9"></a>
     
    <a href="#nogo" id="j0"></a>
    <a href="#nogo" id="j1"></a>
    <a href="#nogo" id="j2"></a>
    <a href="#nogo" id="j3"></a>
    <a href="#nogo" id="j4"></a>
    <a href="#nogo" id="j5"><span></span></a>
    <a href="#nogo" id="j6"></a>
    <a href="#nogo" id="j7"></a>
    <a href="#nogo" id="j8"></a>
    <a href="#nogo" id="j9"></a>
    <a href="#nogo" id="maze"><span></span></a>
    </div>
    


    <div id="error" style= "position: absolute; top: 220px; left: 530px; color: white;">
    <?php
    if (isset($_GET['error']) && $_GET['error'] == 1){
    echo "ENTRADA:VERDE <br>";
    echo "SALIDA:ROJO <br>";
    echo "Algunas líneas desaparecerán cuando te acerques";
    }
    ?>
    </div>

</body>
</html>