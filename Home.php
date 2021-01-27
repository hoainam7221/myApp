
<?php
include("inc/Conn.php");
include('inc/header.php');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/home.css" rel="stylesheet">
        <script src="https://kit.fontawesome.com/5c665cef75.js" crossorigin="anonymous"></script>
    </head>
    <body>
    
    
<br><br><br><br>

<div class="slideshow-container">
       
        <div class="mySlides fade">
        <img src="https://cdn.cellphones.com.vn/media/ltsoft/promotion/Sliding-690x300-11.png" alt=""width="50%">
           
        </div>
 
        <div class="mySlides fade">
        <img src="https://cdn.cellphones.com.vn/media/ltsoft/promotion/IPHONE_XR_Sliding-690.png" alt=""width="50%">
        </div>

        <div class="mySlides fade">
        <img src="https://cdn.cellphones.com.vn/media/ltsoft/promotion/Sliding-690x300-10t_2_.png"  alt=""width="50%">
        </div>
        <div class="mySlides fade">
        <img src="https://cdn.cellphones.com.vn/media/ltsoft/promotion/Sliding-reno4.png" alt="" width="50%">
        </div>
    </div>
    
    <br>

    <div style="text-align:center">
        <span class="dot" onclick="currentSlide(0)"></span>
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
        
        
    </div>
    
    
    <script>
        //khai báo biến slideIndex đại diện cho slide hiện tại
        var slideIndex;
        // KHai bào hàm hiển thị slide
        function showSlides() {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("dot");
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }

            slides[slideIndex].style.display = "block";
            dots[slideIndex].className += " active";
            //chuyển đến slide tiếp theo
            slideIndex++;
            //nếu đang ở slide cuối cùng thì chuyển về slide đầu
            if (slideIndex > slides.length - 1) {
                slideIndex = 0
            }
            //tự động chuyển đổi slide sau 5s
            setTimeout(showSlides, 10000);
        }
        //mặc định hiển thị slide đầu tiên 
        showSlides(slideIndex = 0);


        function currentSlide(n) {
            showSlides(slideIndex = n);
        }
        
    </script>

<div class="describe">
    <img src="https://cdn.cellphones.com.vn/media/wysiwyg/1920x75---iPhone12_2.gif" alt="">
</div>

<div class="flash" style="margin-left: 600px;">
    
    <h2>FLASH</h2> 
    <img src="https://cellphones.com.vn/media/icon/flash.gif"   alt="">
    <h2>SALE</h2>
    <h2 class="sale">Từ 16/11 - 20/11</h2>

</div>
<div class="box">
<?php
if(!empty($_GET['page']))
{
    $page=$_GET['page']-1;

}
else{
    $page =0;
}
$product_per_page = 6;
$offset =$product_per_page * $page;
$sql="SELECT * FROM dienthoai LIMIT $offset, $product_per_page";
$rs = mysqli_query($Conn,$sql);
if(mysqli_num_rows($rs)>0)
{
    while($row=mysqli_fetch_assoc($rs)){
        ?>
       
        <a href="singlee-product.php?ID=<?php echo $row['ID']?>" class="product">

    <div class="product-image">
        <img src="Img/<?php echo $row ['Image']?>">
    </div>
    <p class="product-title"><?php echo $row ['Name']?></p>
    <p class="product-price"><?php echo $row['Price']."đ"?> <strike> <?php echo $row['gia']."đ"?></strike></p>
    <Button style=" width: 30%;
    font-size: 15px;
    text-transform: uppercase;
    
   
    background: #ff0000;
    text-align:center;
    color: #fff;"><i class="fas fa-cart-plus">BUY NOW</i></Button>
</a>
<?php
    }
}
?>

</div>


<div class="flash" style="margin-left: 600px;">
    
    <h2>FLASH SALE</h2> 
    <img src="https://cellphones.com.vn/media/icon/flash.gif"   alt="">
    <h2>PHỤ KIỆN</<h2></h2>
    <h2 class="sale">Từ 16/11 - 20/11</h2>

</div class="box">

<?php
if(!empty($_GET['page']))
{
    $page=$_GET['page']-1;

}
else{
    $page =0;
}
$product_per_page = 6;
$offset =$product_per_page * $page;
$sql="SELECT * FROM phukien LIMIT $offset, $product_per_page";
$rs = mysqli_query($Conn,$sql);
if(mysqli_num_rows($rs)>0)
{
    while($row=mysqli_fetch_assoc($rs)){
        ?>
       
        <a href="single-productt.php?ID=<?php echo $row['ID']?>" class="product">

    <div class="product-image">
        <img src="Img/<?php echo $row ['Image']?>">
    </div>
    <p class="product-title"><?php echo $row ['Name']?> </p>
    <p class="product-price"><?php echo $row['Price']."đ"?> <strike> <?php echo $row['gia']."đ"?></strike></p>
    <Button style=" width: 30%;
    font-size: 15px;
    text-transform: uppercase;
    
   
    background: #ff0000;
    text-align:center;
    color: #fff;"><i class="fas fa-cart-plus">BUY NOW</i></Button>
</a>
</a>
<?php
    }
}
?>

</div>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<div class="flash" style="margin-left: 150px;">
    <a href=""><img src="https://www.nology.net/wp-content/uploads/2018/01/apple-banner.jpg"  alt="" width="20%"></a>
    <a href=""><img src="https://cdn4.iconfinder.com/data/icons/logos-brands-5/24/samsung-512.png"  alt="" width="20%"></a>
    <a href=""><img src="https://cdn.iconscout.com/icon/free/png-512/huawei-226443.png"  alt="" width="15%"></a>
    <a href=""><img src="https://i1.wp.com/www.techjunkie.com/wp-content/uploads/2020/02/MIUI-How-to-Change-Icons.jpg?resize=1000%2C563&ssl=1"  alt="" width="20%"></a>
</div>
<div>

    
</div>
<?php 
// include ('inc/pagination.php');
?>
</div>

<?php 
// include ('inc/right.php');
?>

<?php
include('inc/footer.php');
?>
</body>
</html>
