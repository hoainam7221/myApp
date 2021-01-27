<?php
include("../inc/Conn.php");
if($_SERVER['REQUEST_METHOD'] == 'GET' && !empty( $_GET['idxoa'])){
    $idxoa = $_GET['idxoa'];
$sql = "DELETE from product WHERE ID = {$idxoa} limit 1 ";
if(mysqli_query($Conn,$sql)){
    echo "delete succes".$idxoa;

}
else{
    echo "failed".mysqli_error($Conn);
}
}
include("inc/header.php");
include("listsp.php");


?>