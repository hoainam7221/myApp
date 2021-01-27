<?php
include("../inc/conn.php");
if($_SERVER['REQUEST_METHOD']=='POST'){
    $tensp = $_POST['Name'];
	$giasp= $_POST['Price'];
    $mota = $_POST['Content'];
    $sql="INSERT INTO product(Name,Content,Price) VALUES(?,?,?)";
    $stmt= mysqli_prepare($Conn,$sql);
    mysqli_stmt_bind_param($stmt,"ssd",$tensp,$mota,$giasp);
    if(mysqli_stmt_execute($stmt)){
        echo "  Thêm sản phẩm thành công!";
    }
    else{
        echo "Lỗi:".mysqli_error($Conn);
    }
}
include("inc/header.php")
?>
<form class="form" method="post">
    <label> Nhập tên sản phẩm</label>
    <input type=" number" name="Name">
    <label >Nhập giá SP</label>
    <input type="number" name="Price">
    <textarea name="Content" ></textarea>
    <label > Chọn ảnh sản phẩm</label>
    <input type="file" name="Image">
    <input type="submit"  name="submit" value="Thêm">



</form>