<?php

require "dbconnect.php";



   function register($full_name, $username, $password){
       $conn =connect();
    $sql = $conn->prepare("INSERT INTO user (full_name, username, password) VALUES ( ?, ?, ?)");
    $sql-> bind_param("sss",$full_name, $username, $password);
   
   $sql->execute();
   $sql->close();
    $conn->close();
  
}


function s(){
    $conn=connect();
    $sql =$conn->prepare( "SELECT * FROM chat");
   
    $sql->execute();
    $result=$sql->get_result();
   return $result;
 
}
function addv($message,$user){
    $conn=connect();
    $sql = $conn->prepare('INSERT INTO chat (message,user) VALUES (?,?)');
    $sql->bind_param("ss",$message,$user);


    $sql->execute();
    $sql->close();
    $conn->close();
}

?>