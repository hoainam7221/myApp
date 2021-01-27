<?php
include('index/connect.php');
include('inc/header.php');
$timkiem ="";
if (!empty($_GET['s']))
{
    $timkiem =$_GET['s'];
}
?>
<br><br><br><br><br><br><br>
<div class="row">
    <div class="leftcolumn">
        <h3 class="title">Kết quả tìm kiếm cho:<?= $timkiem?></h3>
        <?php
        if(!empty($timkiem)){
            $rs = mysqli_query($Conn,"SELECT * FROM product WHERE Name LIKE'%{$timkiem}%'");
            $rs = mysqli_query($Conn,"SELECT * FROM phukien WHERE Name LIKE'%{$timkiem}%'");
            $rs = mysqli_query($Conn,"SELECT * FROM dienthoai WHERE Name LIKE'%{$timkiem}%'");
       
       
            while($row=mysqli_fetch_assoc($rs)){
                ?>
               
                <a href="single-product.php?ID=<?php echo $row['ID']?>" class="product">
        
            <div class="product-image"> <img src="Img/<?php echo $row ['Image']?>"></div>
            <h2 class="product-title"><?php echo $row ['Name']?></h2>
            <p class="product-price"><?php echo $row['Price']."VND"?></p>
            <Button><i class="fas fa-cart-plus">BUY NOW</i></Button>
        </a>
        <?php
            }
        }
        ?>
        
        

</div>