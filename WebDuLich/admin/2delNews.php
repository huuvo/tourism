<?php require_once $_SERVER['DOCUMENT_ROOT'].'/WebDuLich/templates/admin/inc/header.php';?>

	<?php
	//Trường hợp xóa không có hình
	//Xóa có hình
	
		$id = $_REQUEST['id_news'];
		$sql = "SELECT * FROM tour WHERE id_tour = {$id}";
		$kq = $mysqli->query($sql );
		$arNew = mysqli_fetch_assoc($kq );
			$picture = $arNew['HinhAnh'];
			echo $picture ;
		if($picture != ""){
			//Xóa hình ở đây
			$url_pic = $_SERVER['DOCUMENT_ROOT'].'/files/'.$picture;
			unlink($url_pic);
		}
		$query = "DELETE FROM tour where id_tour = {$id}";
		$result = $mysqli->query($query);
		if($result)
		{
			header("LOCATION:2indexNews.php?msg=Xóa thành công");
		}
		else
		{
			echo "<strong>Có lỗi khi xóa</strong>";
			die();
		}
	?>	
<?php require_once $_SERVER['DOCUMENT_ROOT'].'/WebDuLich/templates/admin/inc/footer.php';?>