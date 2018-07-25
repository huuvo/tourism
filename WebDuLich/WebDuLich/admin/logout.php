<?php require_once $_SERVER['DOCUMENT_ROOT'].'/WebDuLich/templates/admin/inc/header.php';?>
<?php
	session_destroy();
	header('LOCATION:login.php');
?>
<?php require_once $_SERVER['DOCUMENT_ROOT'].'/WebDuLich/templates/admin/inc/footer.php';?> 