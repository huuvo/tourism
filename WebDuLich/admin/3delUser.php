<?php require_once $_SERVER['DOCUMENT_ROOT'].'/WebDuLich/templates/admin/inc/header.php';?>
	<?php
		$id_user = $_REQUEST['id'];
		$query = "DELETE FROM users where id_user = {$id_user}";
		$result = $mysqli->query($query);
		if($result)
		{
			header("LOCATION:3indexUser.php?msg=Xóa thành công");
		}
		else
		{
			echo "<strong>Có lỗi khi xóa</strong>";
			die();
		}
	?>	
<?php require_once $_SERVER['DOCUMENT_ROOT'].'/WebDuLich/templates/admin/inc/footer.php';?>