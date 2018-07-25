<?php require_once $_SERVER['DOCUMENT_ROOT'].'/WebDuLich/templates/admin/inc/header.php';?>

<!-- Form elements -->    
<div class="grid_12">
	<div class="module">
		 <h2><span>Thêm danh tour</span></h2>
			
		 <div class="module-body">
		 <?php 
			if(isset($_POST['them']))
			{
				$name = $mysqli->real_escape_string($_POST['tendmt']);
				$query = "INSERT INTO loai_tour(TenLoaiTuor) VALUES('{$name}')";
				$result = $mysqli->query($query);
				if($result)
				{
					header("LOCATION:1indexCat.php?msg=Thêm thành công");
				}
				else
				{
					echo "<strong>Có lỗi khi thêm</strong>";
					die();
				}
			}
		 ?>
			<form action=""method = "POST" name = "fromthem" id ="fromthem">
				<p>
					<label>Tên Loại Tour</label>
					<input type="text" name="tendmt" value="" class="input-medium" name = "tendmt" />
				</p>
				
				<fieldset>
					<input class="submit-green" name="them" type="submit" value="Thêm" /> 
					<input class="submit-gray" name="reset" type="reset" value="Nhập lại" />
				</fieldset>
			</form>
		 </div> <!-- End .module-body -->

	</div>  <!-- End .module -->
	<div style="clear:both;"></div>
</div> <!-- End .grid_12 -->
<?php require_once $_SERVER['DOCUMENT_ROOT'].'/WebDuLich/templates/admin/inc/footer.php';?>