<?php
session_start();
include('inc/Conn.php');
include('inc/header.php');

if($_SERVER['REQUEST_METHOD']=='POST'){
    $id = $_POST['ID'];
    if(empty($_SESSION['cart']['ID'])){
    $q=mysqli_query($Conn,"SELECT * FROM product WHERE ID={$id}");
    $product = mysqli_fetch_assoc($q);
    $_SESSION['cart'][$id]=$product;
    $_SESSION['cart'][$id]['sl']=$_POST['sl'];
    }
    else{
        $slMoi = $_SESSION['cart']['$id']['sl']+$_POST['sl'];
        $_SESSION['cart']['$id']['sl']=$slMoi;
    }
}

?>
<div class="row">
    <link rel="stylesheet" href="css/card.css">
    <div class="leftcolumn">
        <h3 style="text-align: center; "class='title'>Giỏ Hàng</h3>
        <?php
        if(!empty($_SESSION['cart']))
        foreach($_SESSION['cart']as $item):

        ?>
         <a href="single-product.php?ID=<?php echo $item['ID']?>" class="product">

<div class="product-image">
    <img src="Img/<?php echo $item ['Image']?>">
</div>
<h2 class="product-title"><?php echo $item ['Name']?></h2>
<p class="product-price"><?php echo $item['Price']."$"?></p>
<p class="sl">Số Lượng:<?php echo $item['sl']?></p>


</a>

        <?php
        endforeach;
        else {
            echo"khong ton tai gio hang!";
        }

        ?>
        <div id="total" class ="clearfix"> 
            <?php
            $tong=0;
            foreach($_SESSION['cart']as $item){
                $tong=$tong+($item['sl']*$item['Price']);}
            ?>
<h3 style=" background:white";>Thành Tiền:<?php echo number_format($tong)?>đ</h3>

    </div>
</div>
</div>
<br><br><br><br>
<?php
include('inc/footer.php')
?>