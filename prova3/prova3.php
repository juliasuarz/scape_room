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
    <title>Document</title>
    <link rel="stylesheet" href="../CSS/style.css">
</head>
<body>
    <video width="110%" height="110%" autoplay   plays-inline class ="video" id="myVideo">
        <source src="../img/prova3.mp4" type="video/mp4" >
    </video>

    <script>
    var video = document.getElementById("myVideo");
    video.addEventListener("ended", function() {
    window.location.href = "formulario3.php";
    });
</script>
    
</body>
</html>