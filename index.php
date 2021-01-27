
<?php
include("inc/Conn.php");
include('inc/header.php');
?>
<br><br><br><br>
<div class="slideshow-container">
       
        <div class="mySlides fade">
        <img src="Img/banner1.jpg"  style="width:50%">
           
        </div>
 
        <div class="mySlides fade">
         <img src="Img/banner2.jpg" style="width:50%">
        </div>

        <div class="mySlides fade">
            <img src="Img/banner3.jpg"  style="width:50%">
        </div>
        <div class="mySlides fade">
            <img src="Img/banner4.jpg"  style="width:50%">
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

<hr>
<div class="row">
<div class="leftcolumn">
<?php
if(!empty($_GET['page']))
{
    $page=$_GET['page']-1;

}
else{
    $page =0;
}
$product_per_page = 9;
$offset =$product_per_page * $page;
$sql="SELECT * FROM product LIMIT $offset, $product_per_page";
$rs = mysqli_query($Conn,$sql);
if(mysqli_num_rows($rs)>0)
{
    while($row=mysqli_fetch_assoc($rs)){
        ?>
       
        <a href="single-product.php?ID=<?php echo $row['ID']?>" class="product">

    <div class="product-image">
        <img src="Img/<?php echo $row ['Image']?>">
    </div>
    <p class="product-title"><?php echo $row ['Name']?></p>
    <p class="product-price"><?php echo $row['Price']."$"?></p>
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

<?php 
include ('inc/pagination.php');
?>
</div>

<?php 
include ('inc/right.php');
?>

<?php
include('inc/footer.php');
?>
