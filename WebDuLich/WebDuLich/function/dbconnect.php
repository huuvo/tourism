<?php 
//PHP MYSQL: mysqli
// các bước kết nối PHP và MYSQL
//Khởi tạo đối tượng
$mysqli = new mysqli("localhost","root","","dacn");
//Thiết lập font chữ tiếng việt
$mysqli->set_charset("utf8");
//Thông báo lỗi nếu kết nối sai
if(mysqli_connect_errno()){
	echo "Lỗi kết nối" .mysqli_connect_error();
	exit();
}
?>