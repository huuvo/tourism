<h2>Danh mục tin</h2>
<ul>
	<?php 
		$sqlLB = "select * from category";
		$resultLB = $mysqli->query($sqlLB);
		while($arLB = mysqli_fetch_assoc($resultLB))
		{
			$name = $arLB['name'];
			$id_cat = $arLB['id_cat'];
	?>
	<li><a href="danhmuc.php?id_cat=<?php echo $id_cat; ?>"><?php echo $name; ?></a></li>
	<?php
		} 
	?>
</ul>
