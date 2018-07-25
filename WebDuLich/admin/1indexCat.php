<?php require_once $_SERVER['DOCUMENT_ROOT'].'/WebDuLich/templates/admin/inc/header.php';?>
<div class="bottom-spacing">
	  <!-- Button -->
	  <div class="float-left">
		  <a href="1addCat.php" class="button">
			<span>Thêm danh tour<img src="/WebDuLich/templates/admin/images/plus-small.gif" alt="Thêm tin"></span>
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
		<h2><span>Danh Sách Loại Tour</span></h2>
		
		<div class="module-table-body">
			<form action="">
			<table id="myTable" class="tablesorter">
				<thead>
					<tr>
						<th style="width:4%; text-align: center;">ID</th>
						<th>Tên Loại Tour</th>
						<th style="width:4%; text-align: center;">NgàyTạo</th>
						<th style="width:4%; text-align: center;">NgàySữa</th>
						<th style="width:4%; text-align: center;">NgườiTạo</th>
						<th style="width:4%; text-align: center;">HìnhẢnh</th>
						<th style="width:11%; text-align: center;">Chức năng</th>
					</tr>
				</thead>
				<tbody>
				<?php 
					$sqlTDM = "SELECT * FROM loai_tour";
					$resultTDM = $mysqli->query($sqlTDM );
					while($arTMD = mysqli_fetch_assoc($resultTDM))
					{
						$id_tour = $arTMD['id_loaitour'];
						$TenLoaiTuor = $arTMD['TenLoaiTuor'];
						$NgayTao = $arTMD['NgayTao'];
						$NgaySua = $arTMD['NgaySua'];
						$NguoiTao = $arTMD['NguoiTao'];
						$HinhDaiDien = $arTMD['HinhDaiDien'];
					
				?>
					<tr>
						<td class="align-center"><?php echo $id_tour;?></td>
						<td><a href=""><?php echo $TenLoaiTuor;?></a></td>
						<td><a href=""><?php echo $NgayTao;?></a></td>
						<td><a href=""><?php echo $NgaySua;?></a></td>
						<td><a href=""><?php echo $NguoiTao;?></a></td>
						<td><a href=""><?php echo $HinhDaiDien;?></a></td>
						<td align="center">
							<a href="1editCat.php?id=<?php echo $id_tour ?>">Sửa <img src="/WebDuLich/templates/admin/images/pencil.gif" alt="edit" /></a>
							<a href="1delCat.php?id=<?php echo $id_tour ?>">Xóa <img src="/WebDuLich/templates/admin/images/bin.gif" width="16" height="16" alt="delete" /></a>
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