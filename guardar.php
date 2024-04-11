<?php
    include("conection.php");

    $imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
    $nombre = $_POST['nombre'];
    $autor = $_POST['autor'];
    
    $query = "INSERT INTO `pinturas`(`imagen`, `nombre`, `autor`) VALUES('$imagen','$nombre','$autor')";
    $resultado = $conexion->query($query);

    if($resultado){
        echo "si se incerto";
    }
    else{
        echo "no se incerto, ayuda pls";
    }

?>