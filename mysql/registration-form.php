<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

  <?php

  ?>

  <?php
  include "DB/dbinsert.php";
  $fname =  $Lname = $gender = $dob = $region = $paddress = $paraddress = $phone = $email = $username = $password = "";
  $fnameEr = $LnameEr = $genderEr = $dobEr = $regionEr =  $emailEr = $passwordEr =  $usernameEr = '';
  $flag = false;
  $successMesg = $errorMesg = "";


  if ($_SERVER["REQUEST_METHOD"] == "POST") {



    

    if (empty($_POST["fname"])) {

      $fnameEr = "First Name is required";
      $flag = true;
    }
    if (empty($_POST["Lname"])) {
      $LnameEr = "Last Name is required";
      $flag = true;
    }
    if (empty($_POST["gender"])) {

      $genderEr = "Gender is required";
      $flag = true;
    }
    if (empty($_POST["dob"])) {
      $dobEr = "Date of Birth is required";
      $flag = true;
    }
    if (empty($_POST["region"])) {
      $regionEr = "Religion is required";
      $flag = true;
    }


    if (empty($_POST["email"])) {
      $emailEr = "Email is required";
      $flag = true;
    }

    if (empty($_POST["username"])) {
      $usernameEr = "User Name is required";
      $flag = true;
    }

    if (empty($_POST["password"])) {
      $passwordEr = "password is required";
      $flag = true;
    }

    if (!$flag) {
 
      $region =  input($_POST["region"]);
      $paddress = input($_POST["paddress"]);
      $paraddress = input($_POST["paraddress"]);
  
      $phone = input($_POST["phone"]);
      $email = input($_POST["email"]);
      $username = input($_POST["username"]);
      $password = input($_POST["password"]);
      $fname = input($_POST["fname"]);
      $Lname = input($_POST["Lname"]);
      $gender = input($_POST["gender"]);
      $dob = input($_POST["dob"]);

      
     $result = add($fname, $Lname, $gender, $dob, $region, $paddress, $paraddress, $phone, $email, $username, $password);
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
 


  ?>
  <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
    <fieldset>
      <legend>Basic information</legend>
      <label for="fname">Enter your first name :</label>
      <input type="text" id="fname" name="fname" value="<?php echo $fname;  ?>">
      <span style="color: red;"> * <?php echo $fnameEr;  ?></span>
      <br>
      <label for="Lname">Enter your Last name :</label>
      <input type="text" id="Lname" name="Lname">
      <span style="color: red;"> * <?php echo $LnameEr;  ?></span>
      <br>
      <label for="gender">Gender</label>
      <input type="radio" name="gender" value="female">Female
      <input type="radio" name="gender" value="male">Male
      <input type="radio" name="gender" value="other">Other
      <span style="color: red;"> * <?php echo $genderEr;  ?></span>
      <br><br>
      <label for="dob">Enter you Date of Birth</label>
      <input type="text" id="dob" name="dob">
      <span style="color: red;"> * <?php echo $dobEr;  ?></span>
      <br>
      <label for="region">Religion</label>
      <select name="region" id="region">
        <option value="">Select one</option>
        <option value="Muslim">Muslim</option>
        <option value="Hindu">Hindu</option>

      </select>
      <span style="color: red;"> * <?php echo $regionEr;  ?></span>


    </fieldset>
    <fieldset>
      <legend>Contact information</legend>

      <label for="paddress">Present Address :</label>
      <textarea name="paddress" id="paddress" cols="30" rows="3"></textarea> <br>
      <label for="paraddress">Permanent Address :</label>
      <textarea name="paraddress" id="paraddress" cols="30" rows="3"></textarea> <br>
      <label for="phone">phone :</label>
      <textarea name="phone" id="phone" cols="30" rows="3"></textarea> <br>


      <label for="email">Email :</label>
      <input type="text" id="email" name="email">
      <span style="color: red;"> * <?php echo $emailEr;  ?></span>
      <br>
      <label for="Pweb">Perasonal Website Link :</label>
      <a href="">https://github.com/tanjinsezan/WebTech</a><br>

    </fieldset>
    <fieldset>
      <legend>Account information</legend>

      <label for="username">User Name :</label>
      <input type="text" id="username" name="username">
      <span style="color: red;"> * <?php echo $usernameEr;  ?></span>
      <br>
      <label for="password">password :</label>
      <input type="password" id="password" name="password">
      <span style="color: red;"> * <?php echo $passwordEr;  ?></span>
      <br>
    </fieldset>
    <input type="submit" name="submit" value="Register"> <a href="login.php">Log In</a>

    <br>
  </form>
  <span><?php echo $successMesg ?></span>
  <span><?php echo $errorMesg ?></span>
 

</body>

</html>