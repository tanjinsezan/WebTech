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
    <h2>Conversion Rate :</h2>
    
    <form action="<?php echo htmlspecialchars( $_SERVER['PHP_SELF']) ?>" method="POST">
<select name="convert" id="Rname">
        <option value="">Select one</option>
        <option value="feetToinch" >feet To inch</option>
        <option value="inchTofeet">inch To feet</option>
       
    
        </select> <br> <br>
        <label for="value1">value1 :</label>

        <input type="number" id="value" name="value1"> <br> <br> 
        <label for="value1">value2 :</label>
        <input type="number" id="value" name="value2"> <br> <br> 
         <br> <br> 
        <input type="submit" value="submit" name="submit">
</form>


    <?php 
 
  $value2 ;
  $value1 ;
  $convert = "";
  $flag = false;
 $value2 = $_POST["value2"];
 $value1 = $_POST["value1"];
 $convert = $_POST["convert"];

 if (empty($value2)) {
    $PasswordEr = "value is required";
      $flag = true;
    
  
  }
  

 
        
        if (!$flag) {

            $file = "data.txt";
            if (file_exists($file)) {
              $existing_data = read();
              if (empty($existing_data)) {
                $arr1[] = array("convert"=>$convert,"value1"=>$value1,"value2"=>$value2);
                $result = write(json_encode($arr1)."\n");
              } else {
      
                $existing_data_decode = json_decode($existing_data);
      
                array_push($existing_data_decode, array("convert"=>$convert,"feet"=>$value1,"inch"=>$value2));
      
                write("");
                $json = json_encode($existing_data_decode);
                $result = write(($json)."\n");
              }
            
        if ($result) {
          $successMesg = " Succesfully Saved";
        } else {
          $errorMesg = "Error While saving";
        }
            }
      
  }
  function input($v)
  {
    $v = htmlspecialchars($v);
    $v = trim($v);
    $v = stripslashes($v);
    return $v;
  }
  function write($value)
  {
    $fileName = "data.txt";
    $resors = fopen($fileName, "w");
    $fileWrite = fwrite($resors, $value);
    fclose($resors);
    return $fileWrite;
  }
  function read()
  {
    $fileName = "data.txt";
    $fileSize = filesize($fileName);
    $fr = "";
    if ($fileSize > 0) {
      $resource = fopen($fileName, "r");
      $fr = fread($resource, $fileSize);
      fclose($resource);
      return $fr;
    }
  }
?>
    
</body>
</html>