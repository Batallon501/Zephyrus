<?php
    include("conexion.php");
    if(isset($_POST['send'])){
        if(
            strlen($_POST['Usuario'])>= 1 &&
            strlen($_POST['Contraseña'])>= 1
        ){
            $Usuario=trim($_POST['Usuario']);
            $Contraseña=trim($_POST['Contraseña']);
            $consulta="INSERT INTO datos(usuario,contraseña)
                       VALUES ('$Usuario','$Contraseña')";
            $resultado=mysqli_query($conex, $consulta);
            if($resultado){
                ?>
                    <h3 style="color: green; font-size: 30px; margin-top: -20%; margin-left: 43%;">Registro exitoso</h3>
                <?php
            } else{
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