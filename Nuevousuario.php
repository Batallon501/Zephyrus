<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Editor.css">
    <link rel="icon" href="ROG Logo.ico">
    <script src="Elementos.js"></script>
    <title>Registrarse</title>
</head>
<body>
<div style=" background-size: cover; font-size: 300%; color: black; background-image: url('Trabajo.gif');background-position: center 100%;">
    <form method="post" autocomplete="off">
        <center>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <h1><strong>Registrarse</strong></h1>
            <br>
            <br>
            <input class="Usuario" type="text" name="Usuario" placeholder="Usuario">&nbsp;&nbsp;&nbsp;<svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com/ License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z"/></svg>
            <br>
            <br>
            <input class="Contraseña" type="password" name="Contraseña" placeholder="Contraseña">&nbsp;&nbsp;&nbsp;<svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com/ License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M144 144v48H304V144c0-44.2-35.8-80-80-80s-80 35.8-80 80zM80 192V144C80 64.5 144.5 0 224 0s144 64.5 144 144v48h16c35.3 0 64 28.7 64 64V448c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V256c0-35.3 28.7-64 64-64H80z"/></svg>
            <br>
            <br>
            <br>
            <br>
            <button name="send" class="con" style="width: 310px; height: 60px;"><a class="nodec no">Enviar</a></button>
            <button class="con" style="width: 310px; height: 60px;"><a class="nodec no" href="index.php">Continuar</a></button>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
        </center>
    </form>
</div>
<?php
    include("send.php");
?>
</body>
</html>