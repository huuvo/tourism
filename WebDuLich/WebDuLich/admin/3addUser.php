<?php require_once $_SERVER['DOCUMENT_ROOT'].'/WebDuLich/templates/admin/inc/header.php';?>
<?php require_once $_SERVER['DOCUMENT_ROOT'].'/Bnews/function/chekUser.php'?>
<!-- Form elements -->    
<div class="grid_12">

	<div class="module">
		 <h2><span>Thêm tài khoản</span></h2>
			
		 <div class="module-body">
				<?php
					if(isset($_POST['them']))
					{
						$taikhoan = $mysqli->real_escape_string($_POST['taikhoan']);
						$password1 = $mysqli->real_escape_string(($_POST['matkhau']));
						$password = $mysqli->real_escape_string(MD5($password1));
						$fullname = $mysqli->real_escape_string(($_POST['fullname']));
						
						//kiểm tra username 
						$sql1="select * from users where usersname ='{$taikhoan}'";
						$result1 = $mysqli->query($sql1);
						$ar = mysqli_fetch_assoc($result1);
						$count=count($ar);
						if($count > 0)
						{
							echo "User đã tồn tại";
						}
						else
						{
							$sql="insert into users(usersname,password,fullname) values('{$taikhoan}','{$password}','{$fullname}')";
							$result=$mysqli->query($sql);
							if($result)
							{
								header("location:3indexUser.php?msg=Thêm người dùng thành công");
								exit();
							}
							else echo "Đã có lỗi xảy ra";
						}
					}
				?>
								<script>
		//bắt buộc người dùng nhập
	$(document).ready(function (){
		$('.aa').validate({
			rules:{
				taikhoan:{
					required:true,
				},
				password:{
					required:true,
				},
				fullname:{
					  required: true, 
				}	

				
			},
			messages:{
				username1:{
					required:"Vui lòng nhập",
					minlength:"Tên truy cập phải có ít nhất 6 ký tự, nhiều nhất 32 ký tự",
				},
				mota:{
					
					required:"Vui lòng nhập."
				},
				fullname:{
						required: "Vui lòng nhập  !",
				}
			},


		});
	});
	</script>
			<form action=""method = "POST" name = "fromthem" id ="fromthem">
				<p>
					<label>Tài khoản</label>
					<input type="text" name="taikhoan" value="" class="input-medium" name = "taikhoan" />
				</p>
				
				<p>
					<label>Mật khẩu</label>
					<input type="password" name="matkhau" value="" class="input-medium" name = "matkhau" />
				</p>
				
				<p>
					<label>Họ tên</label>
					<input type="text" name="fullname" value="" class="input-medium" name = "fullname" />
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