<?php
    if(isset($_POST['ingresar'])){
        if( strlen($_POST['Usuario'])>= 1 &&
            strlen($_POST['Contraseña'])>= 1
          ){
                $usuario=$_POST['Usuario'];
                $contraseña=$_POST['Contraseña'];
                $sql=$conex->query("select * from datos where usuario='$usuario' and contraseña='$contraseña'");
                if($datos=$sql->fetch_object()){
                    header("location:Tablon.html");
                }else{
                    ?>
                    <h3 style="color: red; font-size: 30px; margin-top: -20%; margin-left: 43%;">Registro fallido</h3>
                    <?php
                }
        }else{
            ?>
            <h3 style="color: red; font-size: 30px; margin-top: -20%; margin-left: 37%;">Llena todos los campos porfavor</h3>
            <?php
        }
    }
?>