<?php
   // Çıkış yap butonuna tıklandığında çalışacak kod
   setcookie('userLogin', '', time() - (3600*12), '/');
   // Kullanıcıyı giriş sayfasına yönlendir veya başka bir sayfaya
   header("Location: login.php");
   exit();
?>