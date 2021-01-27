<?php
    session_start(); //khởi tạo session
    if( $_SERVER['REQUEST_METHOD'] == 'POST'){
    	include('inc/conn.php' );
    	$username = $_POST['username'];
    	$password = $_POST['pass'];
    	$user = mysqli_fetch_assoc(mysqli_query( $conn , "SELECT * FROM user WHERE username = '{$username}' AND password = '{$password}' ") );
    	if($user){
    		//lưu thông tin của người dùng vào session
    		$_SESSION['user'] = $user['username'];
            header('location:index.php'); //đưa người dùng về trang index
            include('index.php');
    		die;
        }
    		else{
    			echo " Sai thông tin tài khoản! ";
    		}
    }

    
?>

<!DOCTYPE html>
<html >
<head>
    <title>Login</title>
    <link rel="stylesheet" href="asset/Login.css">
    <script src="https://kit.fontawesome.com/5c665cef75.js" crossorigin="anonymous"></script>
</head>
<body>
<h1 class="w3ls">wellcome to admin page</h1>
<div class="content-w3ls">
<div class="content-agile1">
            <h2 class="agileits1">N-Store</h2>
            <p class="agileits2">Solutions for a smart planet</p>
        </div>
        <div class="content-agile2">
<form method="POST" action="" class="">
    <h1> Login</h1>
<br><br>
        <label for="taikhoan" ></label><br>
       
        <input type="text" class="first"  name="username" placeholder="Please enter your email" ><br>
      
        <label for="password" ></label><br>
        
        <input type="password" name="pass" class="second" placeholder="Please enter your Password"><br>
        <br><br>
        <input type="submit" class="third"  value="Đăng nhâp">
        <input type="checkbox" value=""  name="duy" id ="four">
    
    <label for=" four" class=" four">Duy trì đăng nhập</label>  <br> <br>
        <br><br><br><br><br><br><br>
        <ul class="social-agileinfo wthree2">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
            </ul>
    </form> 
        </div>

    
</div>
    
        

    
</body>
</html>