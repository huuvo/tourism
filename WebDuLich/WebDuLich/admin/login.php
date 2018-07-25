<?php require_once $_SERVER['DOCUMENT_ROOT'].'/WebDuLich/templates/admin/inc/header.php';?>
<!-- Form elements -->    
<div class="grid_12">

	<div class="module">
		 <h2><span>Đăng nhập</span></h2>
			
		 <div class="module-body">
		<?php
			if(isset($_POST['login'])){
				$username = $_POST['Username'];
				$password = $_POST['Password'];
				$password_md5 = md5($password);
			$query = "SELECT * FROM users WHERE username = '{$username}' AND password = '{$password_md5}' ";
			$result = $mysqli->query($query);
			$arUser = mysqli_fetch_assoc($result); 
			
			if(count($arUser) == 0){
				echo "<strong> Sai tài khoản hoặn mật khẩu</strong>";
			}else{
				$_SESSION['arAdmin'] = $arUser;
				header ('LOCATION:index.php');
				
			}
		}
		
		?>
			<form action="" method="POST">
				<p>
					<label>Username</label>
					<input type="text" name="Username" value="" class="input-medium" />
				</p>
				<p>
					<label>Password</label>
					<input type="text" name="Password" value="" class="input-medium" />
				</p>
				
				
				<fieldset>
					<input class="submit-green" name="login" type="submit" value="Đăng nhập" /> 
				</fieldset>
			</form>
		 </div> <!-- End .module-body -->

	</div>  <!-- End .module -->
	<div style="clear:both;"></div>
</div> <!-- End .grid_12 -->
<?php require_once $_SERVER['DOCUMENT_ROOT'].'/WebDuLich/templates/admin/inc/footer.php';?> 