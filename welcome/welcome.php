<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../CSS/style.css">
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Special+Elite&display=swap');
    </style>

    
</head>
<body >
    <video width="110%" height="110%" autoplay loop  plays-inline class ="video" >
        <source src="../img/welcome.mp4" type="video/mp4" >
    </video>

    <?php

        echo "<form action='../prova1/prova1.php' >
        <button class='btn0' type='submit' id='btnNueva'>Nueva partida</button>
        </form>"

    ?>

    <button onclick="mostrarOcultar('texto1')" class="btnInstrucciones">Instrucciones</button>
    <button onclick="mostrarOcultar('texto2')" class="btnMisiones">Misiones</button>



    <p id="texto1">DESACTIVA LA BOMBA <br> <br>
        Para poder salir de la casa, deberás conseguir todas las llaves a través de las pruebas para llegar a la habitación que contiene la bomba y desactivarla. <br>
        A continuación, tendrás que realizar una serie de pruebas para poder salir de la casa.  <br>
        ¡Deberás escribir todas las respuestas en minúsculas!
    </p>



    <p id="texto2">MISIONES PARA PODER SALIR DE LA CASA<br> <br>
        Adivina la letra <br> <br>
        Encuentra las 5 palabras en la sopa de letras <br> <br>
        Encuentra la palabra en el laberinto<br><br>
        Adivina la letra <br><br>
        Gana en el minijuego para saber la respuesta <br><br>
        Adivina la letra <br><br>
        Ordena las respuestas de las adivinanzas para adivinar la palabra final <br>    <br>
    </p>



    <div class="negro">
        <img src="../img/Captura de pantalla 2023-03-07 a las 21.24.20.png" alt="" width="70%" height="20%">
    </div>


    <script>
        function mostrarOcultar(id) {
        var texto = document.getElementById(id);
        if (texto.style.display === "none") {
            texto.style.display = "block";
        } else {
            texto.style.display = "none";
        }
        }
        
    </script>


</body>
</html>