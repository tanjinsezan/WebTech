<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include "header.php"?>
    <?php include "variables.php" ?>
    <?php
    
    
    $readData = read();
    $arrayData = explode("\n", $readData);
    for($i = 0; $i <count($arrayData) -1 ; $i++){
        echo " " .$arrayData[0] . " " .$arrayData[1];
    }



    ?>
    
</body>
</html>