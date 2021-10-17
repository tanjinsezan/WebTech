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
    <h2>Conveter</h2>
<form action="<?php echo htmlspecialchars( $_SERVER['PHP_SELF']) ?>" method="POST">
<select name="convert" id="Rname">
        <option value="">Select one</option>
        <option value="feetToinch" >feet To inch</option>
        <option value="inchTofeet">inch To feet</option>
    
    
        </select> <br> <br>
        <label for="value">value :</label>

        <input type="number" id="value" name="value"> <br> <br> 
        <input type="submit" value="convert">
</form>

<?php 
include "variables.php";



?>
</body>
</html>