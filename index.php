<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Editor.css">
    <link rel="icon" href="ROG Logo.ico">
    <script src="Elementos.js"></script>
    <title>Inicio de sesión</title>
</head>
<body>
<form method="post" action="">
    <div class="login">
        <center>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <h1><strong>Bienvenido</strong></h1>
            <br>
            <br>
            <input class="Usuario" type="text" name="Usuario" placeholder="Usuario">&nbsp;&nbsp;&nbsp;<svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com/ License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z"/></svg>
            <br>
            <br>
            <input class="Contraseña" type="password" name="Contraseña" placeholder="Contraseña">&nbsp;&nbsp;&nbsp;<svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com/ License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M144 144v48H304V144c0-44.2-35.8-80-80-80s-80 35.8-80 80zM80 192V144C80 64.5 144.5 0 224 0s144 64.5 144 144v48h16c35.3 0 64 28.7 64 64V448c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V256c0-35.3 28.7-64 64-64H80z"/></svg>
            <br>
            <br>
            <p style="font-size: 50%;">¿No está registrado? <a style="color: aquamarine;" href="Nuevousuario.php">Haga click aquí</a></p>
            <button name="ingresar" class="con" style="width: 20%;"><a class="nodec no" href="">Iniciar sesión</a></button>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
        </center>
    </div>
    </form>
    <?php
        include("conexion.php");
        include("controlador.php");
    ?>
</body>
</html>