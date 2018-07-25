<?php require_once $_SERVER['DOCUMENT_ROOT'].'/WebDuLich/templates/admin/inc/header.php';?>

<!-- Form elements -->    
<div class="grid_12">

	<div class="module">
		 <h2><span>Thêm tin tức</span></h2>
		 <div class="module-body">
		<?php 
			if(isset($_POST['them']))
			{
				$tentour = $mysqli->real_escape_string($_POST['tentin']);				
				$id_loaitour= $mysqli->real_escape_string($_POST['danhmuc']);
				$picture = $_FILES['hinhanh']['name'];
				if($picture ==''){
					//Theem tin khong co hinh
					$sqlAdd = "INSERT INTO tour(TenTour,id_loaitour) VALUES ('{$tentour}',{$id_loaitour})";
					$result = $mysqli ->query($sqlAdd);
					if($result > 0)
					{
						header("LOCATION:2indexNews.php?msg=Thêm tin thành công");
						exit();
					}
					else echo "Đã xảy ra lỗi";
				}
				else{
					//them tin co hinh va upload hinh 
					//upload hinh
					//Lay ten file
					
					//explode trả giá trị về mảng
					$ar_mang=explode(".",$picture);
					$time=time();
					$duoifile=end($ar_mang);
					$tenanhmoi='VNE-'.$time.'.'.$duoifile;
					
					//Upload ảnh
					// Lay duong dan tam
					$tmp_name=$_FILES['hinhanh']['tmp_name'];
					//Lay dia chi thu muc chua file 
					$path = $_SERVER['DOCUMENT_ROOT'];
					$path_upload = $path.'/WebDuLich/files/'.$tenanhmoi;
					$resultUpload = move_uploaded_file($tmp_name,$path_upload);
					if($resultUpload){ 
						//Them tin co hinh
						$sqlAdd1 = "INSERT INTO tour(TenTour,id_loaitour,HinhAnh) VALUES ('{$tentour}',{$id_loaitour},'{$tenanhmoi}')";
						$result1 = $mysqli ->query($sqlAdd1);
						if($result1)
							{
								header("LOCATION:2indexNews.php?msg=Thêm tin thành công");
								exit();
							}
						}
					else echo'Đã có lỗi xảy ra';
					}
			}
		 ?>
			<form action = "" method = "POST" enctype="multipart/form-data" name = "fromthem" id ="fromthem">
				<p>
					<label>Tên tour</label>
					<input type="text" name="tentin" value="" class="input-medium" />
				</p>
				<p>
					<label>Danh mục tour</label>
					<select  name="danhmuc" class="input-short">
					<?php
						$sql = "SELECT * FROM loai_tour";
						$reuslt = $mysqli->query($sql);
						while($arCat = mysqli_fetch_assoc($reuslt))
						{
							$id_cat = $arCat['id_loaitour'];
							$name = $arCat['TenLoaiTuor'];
					?>
						<option value="<?php echo $id_cat; ?>"> <?php echo $name; ?> </option>
					<?php } ?>	
					</select>
				</p>
				<p>
					<label>Hình ảnh</label>
					<div id="myfileupload">
						<input type="file" name="hinhanh" id="uploadfile" onchange="readURL(this);" />
					</div>
					<div id="thumbbox">
						<img height="100" width="100" alt="Thumb image" id="thumbimage" style="display: none" />
						<a class="removeimg" href="javascript:" ></a>
					</div>
					<div id="boxchoice">
						<a href="javascript:" class="Choicefile">Chọn file</a>
						<p style="clear:both"></p>
					</div>
					<label class="filename"></label>
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