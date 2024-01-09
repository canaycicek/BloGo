<?php
   setcookie('userLogin', '', time() - (3600*12), '/');
   setcookie('loggedIn', '', time() - (3600*12), '/');
   setcookie('userType', '', time() - (3600*12), '/');
   setcookie('name', '', time() - (3600*12), '/');

   header("Location: login.php");
   exit();
?>