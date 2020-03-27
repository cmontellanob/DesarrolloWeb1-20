<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="sumarcookie.php" method="post">
<?php
        $cantidad = $_GET['n'];

        for($i=0; $i<$cantidad; $i++){
            ?>
            <input type="text" name="x<?php echo $i; ?>"> <br> 
        <?php
        }
      setcookie("n",$cantidad,time()+3600); //crea cookie le damos un  valory un tiempo de duracion 
    ?>
    
    <input type="submit" value="sumar">
    </form>
    
</body>
</html>