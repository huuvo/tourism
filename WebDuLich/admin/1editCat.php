<?php require_once $_SERVER['DOCUMENT_ROOT'].'/WebDuLich/templates/admin/inc/header.php';?>

<!-- Form elements -->    
<div class="grid_12">

	<div class="module">
		 <h2><span>Sửa danh tour</span></h2>
			
		 <div class="module-body">
		 <?php 
			$id_tour = $_REQUEST['id'];
			$sql = "select TenLoaiTuor from loai_tour where id_loaitour={$id_tour}";
			$kq = $mysqli->query($sql);
			$ar = mysqli_fetch_assoc($kq );
			$TenLoaiTuor = htmlspecialchars($ar['TenLoaiTuor']);
			if(isset($_POST['sua']))
			{
				$TenLoaiTuor = $_POST['tendmt'];
				$query = "UPDATE loai_tour SET TenLoaiTuor ='{$TenLoaiTuor}' WHERE id_loaitour = {$id_tour}";
				$result = $mysqli->query($query);
				if($result)
				{
					header("LOCATION:1indexCat.php?msg=Sửa thành công");
				}
				else
				{
					echo "<strong>Có lỗi khi sửa</strong>";
					die();
				}
			}
		 ?>
			<form action=""method = "POST" name = "fromthem" id ="fromthem">
				<p>
					<label>Tên danh mục tin</label>
					<input type="text" name="tendmt" value="<?php echo $TenLoaiTuor; ?>" class="input-medium" />
				</p>
				
				<fieldset>
					<input class="submit-green" name="sua" type="submit" value="Sửa" /> 
					<input class="submit-gray" name="reset" type="reset" value="Nhập lại" />
				</fieldset>
			</form>
		 </div> <!-- End .module-body -->

	</div>  <!-- End .module -->
	<div style="clear:both;"></div>
</div> <!-- End .grid_12 -->
<?php require_once $_SERVER['DOCUMENT_ROOT'].'/WebDuLich/templates/admin/inc/footer.php';?>