<?php require_once $_SERVER['DOCUMENT_ROOT'].'/WebDuLich/templates/admin/inc/header.php';?>
<?php require_once $_SERVER['DOCUMENT_ROOT'].'/WebDuLich/function/chekUser.php'?>
            
<!-- Dashboard icons -->
<div class="grid_main_l">
	<a href="2addNews.php" class="dashboard-module">
		<img src="/WebDuLich/templates/admin/images/Crystal_Clear_write.gif" width="64" height="64" alt="edit" />
		<span>Thêm Tour</span>
	</a>
	
	<a href="1addCat.php" class="dashboard-module">
		<img src="/WebDuLich/templates/admin/images/Crystal_Clear_files.gif" width="64" height="64" alt="edit" />
		<span>Thêm danh mục Tour</span>
	</a>
	<div style="clear: both"></div>
</div> <!-- End .grid_7 -->

<!-- Account overview -->
<div class="grid_main_r">
	<div class="module">
			<h2><span>Quản trị Tour</span></h2>
			
			<div class="module-body">
				<p class="p">
					<strong>Phần mềm</strong> được viết trên nền tảng PHP&MySQL <br />
					<strong>Học viên thực hiện: </strong>VõHồngHữu<br />
					<strong>Email: </strong>honghuudl@gmail.com<br /> 
					<strong>Phone: </strong>0982577598<br />
				</p>
			</div>
	</div>
	<div style="clear:both;"></div>
	<div class="padding-bottom"></div>
</div> <!-- End .grid_5 -->
<?php require_once $_SERVER['DOCUMENT_ROOT'].'/WebDuLich/templates/admin/inc/footer.php';?>            