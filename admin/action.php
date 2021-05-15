<?php
   if(isset($_POST["submit"])){
      $username=$_POST["username"];
      $password=$_POST["password"];

      require_once 'config.php';
      require_once 'function.php';

      if(emptyInputLogin($username,$password)==true){
         header("location:login.php?error=emptyinput");
         exit();

      }
      loginUser($conn,$username,$password);
   }
   else {
      header("location:login.php");
      exit();
   }
