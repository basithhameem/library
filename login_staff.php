<?php
   include("dbConnect.php");
   session_start();
   if($_SERVER["REQUEST_METHOD"] == "POST")
   { 
      $myusername = mysqli_real_escape_string($con,$_POST['staff_username']);
      $mypassword = mysqli_real_escape_string($con,$_POST['staff_password']);
      $sql = "SELECT staff_id FROM login_staff WHERE staff_user = '$myusername' and staff_password = '$mypassword'";
      $result = mysqli_query($con,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $count = mysqli_num_rows($result);
      if($count == 1) {
         //session_register("myusername");
         $_SESSION['login_staff'] = $myusername;

         header("location: welcome_staff.php");
      }else 
      {
         header( "location: login_failed.php");
      }
   }
?>
