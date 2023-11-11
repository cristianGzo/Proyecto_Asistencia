<?php
require_once '../models/registroModel.php';
require_once '../models/conexion.php';


if (isset($_GET['opc'])) {
    $reg = new RegistroModel();

    switch ($_GET['opc']) {
        case 1:
            $usuario = $reg->crearUsr();
            $cuenta = $reg->crearCuenta();
            echo $cuenta;
            echo $usuario;
            //header('Location: pruea.html');
    }
} else {
    echo "No registrado";
    header('Location: ../registro.html');
}
?>