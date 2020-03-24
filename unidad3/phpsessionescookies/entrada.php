<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="sumar.php" method="post">
<?php
        $cantidad = $_GET['n'];

        for($i=0; $i<$cantidad; $i++){
            ?>
            <input type="text" name="x<?php echo $i; ?>"> <br> 
        <?php
        }

    ?>
    <input type="hidden" name="n" value="<?php echo $cantidad?>">
    <input type="submit" value="sumar">
    </form>
    
</body>
</html>