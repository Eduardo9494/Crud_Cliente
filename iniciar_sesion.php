<?php
include_once "encabezado.php";

if(isset($_POST['ingresar'])){
    if(empty($_POST['usuario']) || empty($_POST['password'])){
        echo'
        <div class="alert alert-warning mt-3" role="alert">
            Debes completar todos los datos.
            <a href="login.php">Regresar</a>
        </div>';
        return;
    }

    
}
?>