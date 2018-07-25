<?php require_once $_SERVER['DOCUMENT_ROOT'].'/WebDuLich/templates/admin/inc/header.php';?>
<?php require_once $_SERVER['DOCUMENT_ROOT'].'/WebDuLich/function/chekUser.php'?>
	<?php
		$id_tour = $_REQUEST['id'];
		$query = "DELETE FROM loai_tour where id_loaitour = {$id_tour}";
		$result = $mysqli->query($query);
		if($result)
		{
			header("LOCATION:1indexCat.php?msg=Xóa thành công");
		}
		else
		{
			echo "<strong>Có lỗi khi xóa</strong>";
			die();
		}
	?>	
<?php require_once $_SERVER['DOCUMENT_ROOT'].'/WebDuLich/templates/admin/inc/footer.php';?>