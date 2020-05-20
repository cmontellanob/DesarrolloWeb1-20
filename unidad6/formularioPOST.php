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
    <div class="form-group">    
        <label for="nombre">Nombre: </label>
        <input type="text" name="nombre" id="nombre" class="form-control"> 
    </div>    
    <div class="form-group">    
     <label for="apellido">Apellido: </label>
        <input type="text" name="apellido" id="apellido" class="form-control"> 
    </div>
    <div class="form-group">    
     
        <label for="selDepartamento">Departamento: </label>
        <select name="selDepartamento" id="selDepartamento" onchange="cargarlugares()" class="form-control">
            <?php while ($fila=$resultado->fetch_assoc())
            { ?>
            <option value="<?php echo $fila['id'];?>"><?php echo $fila['departamento']; ?></option>
             <?php    
            }?>
        </select> <br>
        <label for="selLugar" >Lugar: </label>
        <select name="selLugar" id="selLugar" class="form-control">
        </select>
    </div>       
    <div class="form-group">    
  
        <input type="button" value="registrar" onclick="llamarregistrar()" class="form-control"> 
    </div>        
    </form>

</body>

</html>