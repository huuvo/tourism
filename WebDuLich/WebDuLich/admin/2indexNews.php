<?php require_once $_SERVER['DOCUMENT_ROOT'].'/WebDuLich/templates/admin/inc/header.php';?>
<?php require_once $_SERVER['DOCUMENT_ROOT'].'/WebDuLich/function/chekUser.php'?>


<div class="bottom-spacing">
	  <!-- Button -->
	  <div class="float-left">
		  <a href="2addNews.php" class="button">
			<span>Thêm tin <img src="/WebDuLich/templates/admin/images/plus-small.gif" alt="Thêm tin"></span>
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
		<h2><span>Danh sách tour</span></h2>
		
		<div class="module-table-body">
			<form action="">
			<table id="myTable" class="tablesorter">
				<thead>
					<tr>
						<th style="width:4%; text-align: center;">STT</th>
						<th>Tên</th>
						<th style="width:20%; text-align: center;">Hình ảnh</th>
						<th style="width:15%; text-align: center;">Chức năng</th>
					</tr>
				</thead>
				<tbody>
					
					<?php 
		
						$sql = "SELECT * from tour order by id_tour desc ";
						$result = $mysqli->query($sql);
						$stt = 1;
						while($ar = mysqli_fetch_assoc($result)){
							$id_tour = $ar['id_tour'];
							$TenTour = $ar['TenTour'];
							$picture = $ar['HinhAnh'];
							$url_pic = '/WebDuLich/files/'.$picture;
					?>
					<tr>
					
						<td class="align-center"><?php echo $stt; ?></td>
						<td><a href=""><?php echo $TenTour; ?></a></td>
						<td align="center">
							<?php 
								if($picture=='')
								{
									echo "Không có hình";
								}
								else {
							?>
							<img src="<?php echo $url_pic; ?>" class="hoa" />
								<?php } ?>
						</td>
						<td align="center">
							<a href="2editNews.php?id_news=<?php echo $id_tour; ?>">Sửa <img src="/WebDuLich/templates/admin/images/pencil.gif" alt="edit" /></a>
							<a href="2delNews.php?id_news=<?php echo $id_tour; ?>" onclick = "return confirm('Bạn có muốn xóa không ?');">Xóa <img src="/WebDuLich/templates/admin/images/bin.gif" width="16" height="16" alt="delete" /></a>
						</td>
					</tr>
				   <?php $stt++;} ?>
				</tbody>
			</table>
			</form>
		 </div> <!-- End .module-table-body -->
	</div> <!-- End .module -->
	
		<div style="clear: both;"></div> 
		 </div>
	
</div> <!-- End .grid_12 -->
<?php require_once $_SERVER['DOCUMENT_ROOT'].'/WebDuLich/templates/admin/inc/footer.php';?>