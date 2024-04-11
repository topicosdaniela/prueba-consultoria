<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subir imagen</title>
</head>
<body>
    <center><br/>
        <form action="guardar.php" method="POST" enctype="multipart/form-data">
            <input type="file" required name="imagen"/><br/><br/>
            <input type="text" required name="nombre" placeholder="nombre" value=""><br/><br/>
            <input type="text" required name="autor" placeholder="autor" value=""><br/><br/>
            <input type="submit" value="Aceptar">
        </form>
    </center>
    
</body>
</html>