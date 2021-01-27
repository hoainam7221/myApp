<?php
session_start();
include('inc/Conn.php');
include('inc/header.php');
?>
<br><br><br><br><br>
<div class="row">
<div class="leftcolumn">
<?php
$ID=$_GET['ID'];
$sql="SELECT * FROM phukien WHERE ID = {$ID}";

$rs = mysqli_query($Conn, $sql);
while ($row = mysqli_fetch_assoc($rs)){
    ?>
    <div class="single-product">
    <h2 class="product-title"><?php echo $row ['Name']?></h2>
    <div class="product-image">
    <img src="Img/<?php echo $row ['Image']?>">
    </div>
    <p class="product-price"><?php echo $row['Price']."vnd"?></p>
    <br>
                 <form method="post" action="cart.php">
                      Enter number of product: <input type="number" name="sl" value="1"> <br>
                    <input type="hidden" name="ID" value="<?= $ID ?>">
                    <Button style=" width: 15%;
    font-size: 15px;
    text-transform: uppercase;
    padding: 7px 0;
   
    background: #ff0000;
    text-align:center;
    color: #fff;"><i class="fas fa-cart-plus">BUY NOW</i></Button>
</a>
        </form>
    
</form>
<div class="product-content">
<?phpecho $row['Content']?>    
</div>
    </div>
<?php
}
?>
</div>
</div>
<br><br><br><br><br>
<?php
include('inc/footer.php');
?>