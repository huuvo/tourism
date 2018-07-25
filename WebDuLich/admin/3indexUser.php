<?php require_once $_SERVER['DOCUMENT_ROOT'].'/WebDuLich/templates/admin/inc/header.php';?>

<div class="bottom-spacing">
	  <!-- Button -->
	  <div class="float-left">
		  <a href="3addUser.php" class="button">
			<span>Thêm người dùng<img src="/WebDuLich/templates/admin/images/plus-small.gif" alt="Thêm tin"></span>
		  </a>
	  </div>
	  <div class="clear"></div>
</div>
<?php 
	if(isset($_GET['msg']))
	{
		echo "<strong style='color:red'>{$_GET['msg']}</strong>";
	}
?>
<div class="grid_12">
	<!-- Example table -->
	<div class="module">
		<h2><span>Danh sách người dùng</span></h2>
		
		<div class="module-table-body">
			<form action="">
			<table id="myTable" class="tablesorter">
				<thead>
					<tr>
						<th style="width:4%; text-align: center;">ID</th>
						<th>Tài khoản</th>
						<th>Họ tên</th>
						<th style="width:11%; text-align: center;">Chức năng</th>
					</tr>
				</thead>
				<tbody>
				<?php 
					$sqlTDM = "SELECT * FROM users";
					$resultTDM = $mysqli->query($sqlTDM );
					while($arTMD = mysqli_fetch_assoc($resultTDM))
					{
						$id_user = $arTMD['id_user'];
						$usersname = $arTMD['usersname'];
						$fullname = $arTMD['fullname'];
					
				?>
					<tr>
						<td class="align-center"><?php echo $id_user;?></td>
						<td><a href=""><?php echo $usersname;?></a></td>
						<td><a href=""><?php echo $fullname;?></a></td>
						<td align="center">
							<a href="3editUser.php?id=<?php echo $id_user ?>">Sửa <img src="/WebDuLich/templates/admin/images/pencil.gif" alt="edit" /></a>
							<?php 
								if($usersname=="admin") echo ""; else {?>
							
							<a href="3delUser.php?id=<?php echo $id_user ?>">Xóa <img src="/WebDuLich/templates/admin/images/bin.gif" width="16" height="16" alt="delete" /></a>
								<?php } ?>
						</td>
					</tr>
				 <?php } ?>  
				</tbody>
			</table>
			</form>
		 </div> <!-- End .module-table-body -->
	</div> <!-- End .module -->
		 <div class="pagination">           
			<div class="numbers">
				<span>Trang:</span> 
				<a href="">1</a> 
				<span>|</span> 
				<a href="">2</a> 
				<span>|</span> 
				<span class="current">3</span> 
				<span>|</span> 
				<a href="">4</a> 
				<span>|</span> 
				<a href="">5</a> 
				<span>|</span> 
				<a href="">6</a> 
				<span>|</span> 
				<a href="">7</a>
				<span>|</span> 
				<a href="">8</a> 
				<span>|</span> 
				<a href="">9</a>
				<span>|</span> 
				<a href="">10</a>   
			</div> 
			<div style="clear: both;"></div> 
		 </div>
	
</div> <!-- End .grid_12 -->
<?php require_once $_SERVER['DOCUMENT_ROOT'].'/WebDuLich/templates/admin/inc/footer.php';?>