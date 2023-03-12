<?php
session_start();

if(!isset($_SESSION['usuario'])){
    echo'
    <script>
    alert("Por favor debes iniciar sesión");
    windows.location="index.php";
    </script>
    ';
header("location:index.php");
session_destroy();
die();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LIBAOO</title>
    <link rel="stylesheet" href="assets/css/estilos.css">

</head>
<body>
<a href="php/cerrar_session.php">Cerrar sesión</a>
</body>
</html>