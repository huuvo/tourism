<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<?php require_once $_SERVER['DOCUMENT_ROOT'].'/WebDuLich/function/dbconnect.php';
	ob_start();
?>
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title>WedDuLich</title>
        <link rel="stylesheet" type="text/css" href="/WebDuLich/templates/admin/css/styles.css"/>
		<script type="text/javascript" src="/WebDuLich/libraries/jquery/jquery-1.12.3.min.js"></script>
		<script type="text/javascript" src="/WebDuLich/libraries/jquery/jquery.validate.min.js"></script>
		<script type="text/javascript" src="/WebDuLich/templates/admin/js/js.js"> </script>
	</head>
	<body>
    	<!-- Header -->
        <div id="header">
            <!-- Header. Status part -->
            <div id="header-status">
                <div class="container_12">
                    <div class="grid_4">
                    	<ul class="user-pro">
							<li><a href="logout.php">Logout</a></li>
							<li>Chào, <a href="profile.php">admin</a></li>
                    	</ul>
                    </div>
                </div>
                <div style="clear:both;"></div>
            </div> <!-- End #header-status -->
            
            <!-- Header. Main part -->
            <div>
                <div class="container_12">
                    <div class="grid_12">
                        <div id="logo">
                            <ul id="nav">
                                <li id="current"><a href="index.php">Quản trị</a></li>
                                <li><a href="profile.php">Tài khoản</a></li>
                            </ul>
                        </div><!-- End. #Logo -->
                    </div><!-- End. .grid_12-->
                    <div style="clear: both;"></div>
                </div><!-- End. .container_12 -->
            </div> <!-- End #header-main -->
            <div style="clear: both;"></div>
            <!-- Sub navigation -->
            <div id="subnav">
                <div class="container_12">
                    <div class="grid_12">
                        <ul>
                            <li><a href="2indexNews.php">Thêm Tour</a></li>
                            <li><a href="1indexCat.php">Thêm danh mục Tour</a></li>
                            <li><a href="3indexUser.php">User</a></li>
                        </ul>
                        
                    </div><!-- End. .grid_12-->
                </div><!-- End. .container_12 -->
                <div style="clear: both;"></div>
            </div> <!-- End #subnav -->
        </div> <!-- End #header -->
        
		<div class="container_12">