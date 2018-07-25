<?php require_once $_SERVER['DOCUMENT_ROOT'].'/WebDuLich/templates/admin/inc/header.php';?>
<?php require_once $_SERVER['DOCUMENT_ROOT'].'/WebDuLich/function/chekUser.php'?>
 <?php
		 $uid = $_GET['uid'];
		 $sqlUser = "SELECT * FROM users WHERE id_user = {$uid} LIMIT 1";
		 $ketquaUser = $mysqli->query($sqlUser);
		 $arrUser = mysqli_fetch_assoc($ketquaUser); 
		
		$usersname = $arrUser['usersname'];
		$password = $arrUser['password'];
		$fullname = $arrUser['fullname'];
?>




<!-- Form elements -->    
<div class="grid_12">

	<div class="module">
		 <h2><span>Sửa User</span></h2>
			
		 <div class="module-body">
		 <?php 
			$id_user = $_REQUEST['id'];
			$sql = "select * from users where id_user={$id_user}";
			$kq = $mysqli->query($sql);
			$ar = mysqli_fetch_assoc($kq);
				$taikhoan = htmlspecialchars($ar['usersname']);
				$matkhau = htmlspecialchars($ar['password']);
				$hoten = htmlspecialchars($ar['fullname']);
			if(isset($_POST['sua']))
			{
				$taikhoan = $mysqli->real_escape_string($_POST['taikhoan']);
				$password1 = $mysqli->real_escape_string($_POST['matkhau']);
				$password = MD5($password1);
				if($password == "")
				{
					$query = "UPDATE users SET fullname ='{$hoten}' WHERE id_user = {$id_user}";
				}
				else {
					$query = "UPDATE users SET password ='{$password}',fullname ='{$hoten}' WHERE id_user = {$id_user}";
				}
				$result = $mysqli->query($query);
				if($result)
				{
					header("LOCATION:3indexUser.php?msg=Sửa thành công");
				}
				else
				{
					echo "<strong>Có lỗi khi sửa</strong>";
					die();
				}
			}
		 ?>
			<form action=""method = "POST" name = "fromsua" id ="fromsua">
				<p>
					<label>Tài khoản</label>
					<input type="text" name="taikhoan" value="<?php echo $taikhoan; ?>" class="input-medium" name = "taikhoan" />
				</p>
				
				<p>
					<label>Mật khẩu</label>
					<input type="password" name="matkhau" value="" class="input-medium" name = "matkhau" />
				</p>
				
				<p>
					<label>Họ tên</label>
					<input type="text" name="hoten" value="<?php echo $hoten; ?>" class="input-medium" name = "hoten" />
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