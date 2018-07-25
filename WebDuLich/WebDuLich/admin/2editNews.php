<?php require_once $_SERVER['DOCUMENT_ROOT'].'/WebDuLich/templates/admin/inc/header.php';?>
<?php require_once $_SERVER['DOCUMENT_ROOT'].'/WebDuLich/function/chekUser.php'?>

<!-- Form elements -->    
<div class="grid_12">

	<div class="module">
		 <h2><span>Sửa tin tức</span></h2>
			
		 <div class="module-body">
			<?php
				// Lấy dữ liệu hiện ra tại các ô input
				$id_news = $_REQUEST['id_news'] ;
				$sqlNews = "SELECT * FROM tour WHERE id_tour = {$id_news} LIMIT 1";
				$resultNews = $mysqli->query($sqlNews);
				$arNews = mysqli_fetch_assoc($resultNews);
					$cid = htmlspecialchars($arNews['id_loaitour']);
					$name1 = htmlspecialchars($arNews['TenTour']);
					$picture = htmlspecialchars($arNews['HinhAnh']);
			?>
			<?php
				if(isset($_POST['xoa']))
					{
						//Xóa hình 
						$delete_picutre_old=$_SERVER['DOCUMENT_ROOT']."s/files/{$picture}";
							if(is_file($delete_picutre_old))
							{
								unlink($delete_picutre_old);
							}
						$sql_del_picturw="update news set picture = '' where id_tour ={$id_news} ";
						$result_del=$mysqli->query($sql_del_picturw);
						if($result_del>0)
						{
							header ("location:2editNews.php?id_news={$id_news}");
							exit();
						}
					}
			?>
			<?php
				//Sửa tin tức
				if(isset($_POST['sua'])){
					
					$tentin = $mysqli->real_escape_string($_POST['tentin']);		
					$danhmuc = $mysqli->real_escape_string($_POST['danhmuc']);
					$hinhanh = $_FILES['hinhanh']['name'];
					if($hinhanh != ''){
						//Người dùng upload ảnh mới
						//Lay ten file
						//explode trả giá trị về mảng
						$ar_mang=explode(".",$hinhanh);
						$time=time();
						$duoifile=end($ar_mang);
						$hinhanh='VNE-'.$time.'.'.$duoifile;
						
						//Upload ảnh
						// Lay duong dan tam
						$tmp_name=$_FILES['hinhanh']['tmp_name'];
						//Lay dia chi thu muc chua file 
						$path = $_SERVER['DOCUMENT_ROOT'];
						$path_upload = $path.'/WebDuLich/files/'.$hinhanh;
						$resultUpload = move_uploaded_file($tmp_name,$path_upload);
						if($resultUpload){
							$query = "UPDATE tour 
							SET  TenTour = '{$tentin}',
							id_loaitour = {$danhmuc},
							HinhAnh = '{$hinhanh}' WHERE id_tour = {$id_news} LIMIT 1" ;
						}
						else
						{
							echo "Có lỗi khi sửa tin";
						}
					}
					else{
						//trường hợp không upload ảnh
							$query = "UPDATE tour 
							SET  TenTour = '{$tentin}',
							id_loaitour = {$danhmuc}
							WHERE id_tour = {$id_news} LIMIT 1" ;
					}
					
					 // echo "<pre>";
					// print_r($query); die();
					 // echo "</pre>";
					$result1 = $mysqli->query($query);
					if($result1 > 0)
					{
						header("LOCATION:2indexNews.php?msg=Sửa tin thành công");
						die();
					}
					else echo "Đã xảy ra lỗi trong quá trình sửa tin, Vui lòng thử lại";
				}
			?>
			<form action=""method = "POST" enctype="multipart/form-data"name = "fromthem" id ="fromthem">
				<p>
					<label>Tên tin</label>
					<input type="text" name="tentin" value="<?php echo $name1; ?>" class="input-medium" />
				</p>
				<p>
					<label>Danh mục tin</label>
					<select  name="danhmuc" class="input-short">
					<?php
						$sql = "SELECT * FROM loai_tour";
						$reuslt = $mysqli->query($sql);
						while($arCat = mysqli_fetch_assoc($reuslt))
						{
							$id_cat = $arCat['id_loaitour'];
							$name = $arCat['TenLoaiTuor'];
							if($id_cat == $cid)
							{
								$select  = 'selected ="selected"';
							}
							else
							{
								$select = null;
							}
					?>
						<option <?php echo $select; ?>value="<?php echo $id_cat; ?>"> <?php echo $name; ?> </option>
					<?php } ?>	
					</select>
				</p>
				<p>
					<label>Hình ảnh</label>
					<?php
						if($picture=='')
							{
								echo "<span style='color:red;font-size:30px;'>Không có hình</span><br />";
							}
						else {
							$pic_url = "/files/$picture";
					?>
					<img src="/files/<?php echo $picture; ?>" alt="" width = "200px" height = "200px" /> <br />
					<input class="submit-green" name="xoa" type="submit" value="Xóa" /> 
						<?php } ?>
					<input type="file"  name="hinhanh" value="" />
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