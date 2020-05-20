<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php include("conexion.php");
    $sql= "select id,departamento from departamentos";
    $resultado=$con->query($sql);
    ?>
    <form method="POST">
        <label for="nombre">Nombre: </label>
        <input type="text" name="nombre" id="nombre"> <br>
        <label for="apellido">Apellido: </label>
        <input type="text" name="apellido" id="apellido"> <br>
        <label for="selDepartamento">Departamento: </label>
        <select name="selDepartamento" id="selDepartamento" onchange="cargarlugares()">
            <?php while ($fila=$resultado->fetch_assoc())
            { ?>
            <option value="<?php echo $fila['id'];?>"><?php echo $fila['departamento']; ?></option>
             <?php    
            }?>
        </select> <br>
        <label for="selLugar">Lugar: </label>
        <select name="selLugar" id="selLugar">
        </select>
        
        <input type="button" value="registrar" onclick="llamarregistrar()"> <br>
        
    </form>

</body>

</html>