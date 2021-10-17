<?php 
  $convertYpe = '';
  $convert = "";
   $value = "" ;
  
 $value = $_POST["value"];
 $convert = $_POST["convert"];
 

 if (empty($value)) {
    $PasswordEr = "value is required";
      $flag = true;
    
  
  }
  if(!$flag){
    $readValue= read();
    $jsonDecode= json_decode($readValue,true);
    
    
    for($i=0; $i <count($jsonDecode); $i++){
        if($convert == $jsonDecode[$i]["feetToinch"]){
        echo  $result = $value * $jsonDecode[$i]["value1"];
        }
         else if ( $convert == $jsonDecode[$i]["inchTofeet"] ){

        echo  $result = $value * $jsonDecode[$i]["value2"];
           
        }
    }
    }
  function write($v){
    $fileName= "data.txt";
    $resors= fopen($fileName, "a");
    $fileWrite = fwrite($resors ,$v);
    fclose($resors);
    return $fileWrite;
  }
  function read(){
      $fileName ="data.txt";
      $resorse= fopen($fileName, "r");
      $fileRead= fread($resorse, filesize($fileName));
      fclose($resorse);
      return $fileRead;

  }
?>