<?php 
include( "../inc/conn.php" );


if(   $_SERVER['REQUEST_METHOD'] == 'POST' ){

	$id = $_GET['id'];
	$tensp = $_POST['tensp'];
	$giasp= $_POST['giasp'];
	$mota = $_POST['mota'];

	$file = $_FILES['anhsp']; // 1 mang chua thong tin file da upload  

	//chỉ update file nếu người dùng có chọn file upload.

	if( !empty( $file ) ){
		$tenFile = rand() . $file['name']; //asdasd232anh.jpg cho hai file trong thu muc khong bi trung=>ten file luu trong server
		if( move_uploaded_file($file['tmp_name'], "../Img" . $tenFile ) ){

			$sql = "UPDATE product SET anhsp=? WHERE ID=? "; //php prepare statement
			$stmt = mysqli_prepare($Conn ,$sql);
			mysqli_stmt_bind_param( $stmt, "sd" , $tenFile, $id );
			mysqli_stmt_execute($stmt);
			echo "Update hình ảnh thành công! <br/>";

		}
		else{
			echo "";
		}	
	}
	


	// $anh = $_POST['anhsp'];
	//$q = "UPDATE product SET tieude =  , noidung = $noidung , anh ='{$anh}' "; //gay co kha nang loi sql injection + gay kho viet 
	// mysqli_query($Conn , $q);


	$sql = "UPDATE product SET Name=?, Content=?, Price=?  WHERE ID=? "; //php prepare statement
	$stmt = mysqli_prepare($Conn ,$sql);
	mysqli_stmt_bind_param( $stmt, "ssdd" , $tensp, $mota, $giasp, $id );

	//s = string 
	// d = double 
	// i = integer
	if( mysqli_stmt_execute($stmt) ) {
		echo "đã cập nhật sản phẩm thành công! ";
	}else{
		echo "Lõi : " . mysqli_error($Conn);//ham lay loi gan nhat cua connection sinh ra
	}


}// POST 

//lay id san pham 


$id = $_GET['id'];
$sql = mysqli_query( $Conn , "SELECT * FROM product WHERE id={$id}" );
$row =  mysqli_fetch_assoc($sql);
include ("inc/header.php");
?>
	<h2> Sửa sản phẩm: <?= $row['Name'] ?> </h2>

	<!-- phai co ectype="multipart/form-data" thi moi upload dc file len server  -->
	<form class="form" method="post" enctype="multipart/form-data">
	  <label>Nhập tên sản phẩm </label>
		<input type="text" name="tensp" value="<?= $row['Name'] ?>"/>
		<label>Nhập giá SP</label>
		<input type="number" name="giasp" value="<?= $row['Price'] ?>">

		<label>Nhập mô tả sản phẩm</label>
		<textarea name="mota	"><?= $row['Content']?></textarea>
		<label>Chọn ảnh sản phẩm</label>
		<img class="anhsp" src="../Img/<?= $row['Image']?>" />
	    <input type="file" name="anhsp" >
		<input type="submit" name="submit" value="Cập nhật ">
	</form>
<?php 	
include ("inc/footer.php");