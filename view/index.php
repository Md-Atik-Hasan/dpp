<?php
  ob_start();
  session_start();
  if($_SESSION['name']!='resdnt'){
    header("location: login.php");
  }
  else{
  $username= $_SESSION['username'];
  
  }
  echo $username;
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  </head>
  <body>

    <?php
    $username = "";

      if (isset($_COOKIE["username"])) {

        $username = $_COOKIE["username"];
      }
      $username = strtoupper($username);
      echo "<h2>  WELCOME  </h2>";      
      echo "<h3> DOCTOR PORTAL</h3>";
      echo "<br>";
      
      
    ?>

<fieldset>
 <font color="blue"><h2><b><font Background color="red">Home</b></h1></font></font>
 <!-- <a  target="_blank" href="../view/index.php">1.Home</a>
 <a  target="_blank" href="search patient.php">  <br></br> 2.Search Patient</a>
 <a  target="_blank" href="view appointment.php">  <br></br> 3.View appoinment</a>
  <a  target="_blank" href="appointment history.php">4.Appointment history</a>
 -->
 <?php include("../view/header.php");?>
 
  <font color="black"><h2>Find own patient</h1></font>
 
 
 value:<input type="text"> <br><br>
 result:<input type="text">
 <input type="submit" value="Submit">
 
 </fieldset>

  </body>
</html>