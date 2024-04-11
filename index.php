<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet" type="text/css" />
    <title>Inicio</title>
</head>
<body style="background-color: <?php
    if (isset($_SESSION['color'])) {
        echo $_SESSION['color'];
    } else {
        echo "white";
    }
?>;">
    <center>
        <h3 class="cambiar-css">¿Quieres cambiar color de la página?</h3>

        <table>
            <form action="color.php" method="GET">
                <select name="color" id="color">
                    <option value="red">Rojo</option>
                    <option value="white" selected>Blanco</option>
                    <option value="blue">Azul</option>
                    <option value="green">Verde</option>
                    <option value="brown">Cafe</option>
                </select>
                <br/><br/><input type="submit" name="cambiar" value="Aceptar">
            </form>
        </table><br/><br/><br/><br/>

        <table border="2">
            <thead>
                <tr>
                    <td class="titulo-css">Pinturas Famosas</td>
                </tr>
            </thead>
            <tbody>
                <?php
                    include("conection.php");

                    $query = "SELECT * FROM `pinturas`";
                    $resultado = $conexion->query($query);
                    while($row = $resultado->fetch_assoc()){
                ?>
                    <tr>
                        <td class="imagen-css"> <img src="data:image/jpg;base64,<?php echo base64_encode($row['imagen']); ?>"/> </td>
                    </tr>   
                    <tr> 
                        <td class="nombre-css"> <?php echo $row['nombre'] ?> </td>
                    </tr>
                    <tr>    
                        <td class="autor-css"> <?php echo $row['autor'] ?> </td> 
                    </tr>
                <?php
                    }
                ?>
                
            </tbody>
        </table><br/><br/>
    </center>
    <div class="fecha-css">
        <?php
            echo date('d. m. Y');
        ?> <br/>
        <?php
            echo date('H:i'); 
        ?>
    </div>
    
</body>
</html>