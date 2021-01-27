<?php
$servername = "localhost";
$username = "root";
$pass ="";
$dbname = "bandienthoai";
$Conn = mysqli_connect($servername , $username , $pass, $dbname);
if(!$Conn){
    die("ket noi bi loi:".mysqli_connect_error());
}
else{
    
}
?>