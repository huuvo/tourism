<?php
   if(!isset($_SESSION['arAdmin'])){ //không tồn tại
	   header('LOCATION:login.php');
   }
?>