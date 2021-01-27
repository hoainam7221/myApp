<?php 
	session_start(); //khoi tao session => có thể sử dụng dc biến $_SESSION  

	if( !empty( $_SESSION['user'] ) ){
		
		echo "" . $_SESSION['user'] ;
	}else{

		header('Location:login.php'); //dieu huong toi trang login.php
		die;

	}

	?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="asset/admin.css" />
</head>
<body>

<div class="header">
  <h1>Trang Quản trị</h1>
</div>

<div class="row">
  <div class="leftcolumn">
  	<!-- navigation -->
	<div class="topnav">

	  <a href="index.php">Quản lí bài viết  </a>
	  <hr>
	  <a href="themsp.php">Thêm SP  </a>
	 
	  <a href="index.php">Quản lí sản phẩm</a>
	  <a href="#">Quản lí người dùng</a>
	  <a href="logout.php">ĐăNG XUấT </a>

	</div>

	<!-- END navigation -->
  </div>
 <!-- END left column -->


  <div class="rightcolumn">