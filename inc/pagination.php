<!-- count dem id,  -->
<!-- ceil lam tron so trang (sp bi le)-->
<?php
include("Conn.php");
?>
<?php 
$product_per_page=9;
$q=mysqli_query($Conn, "SELECT COUNT(ID) AS total FROM product");
$rs =mysqli_fetch_assoc($q);
$total_products=$rs['total'];
$pages=ceil($total_products / $product_per_page);
if(!empty($_GET['page'])){
    $curent_page=$_GET['page'];
}else{
    $curent_page=1;
}
?>
<div class="pagination-wrap" style="padding:10px">
    <div class="pagination">
        <?php for ($i=0;$i<$pages;$i++){
            ?>
            <a href="index.php?page= <?= $i+1?>"
            <?php
            if($curent_page==($i+1)){
                echo "class='active'";
            }else{
                echo"";
            }
            ?>
            >
            <?php echo $i+1 ?>
        </a>
       <?php }?>
    </div>
</div>
