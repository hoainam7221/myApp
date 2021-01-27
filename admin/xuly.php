<?php
session_start();
if($_SERVER['REQUEST_METHOD']=='POST'){
    // include('../inc/conn.php');
    $cn = mysqli_connect("localhost","root","","bandienthoai");
    $username = $_POST['name'];
    $password = $_POST['pass'];
    $query = "SELECT * FROM use WHERE username='$username' AND password ='$password'";
    // $use = mysqli_fetch_assoc(mysqli_query($cn,"SELECT * FROM use WHERE username='{$username}' AND password ='{$password}'"));
    $rs = mysqli_query($cn,$query);
    echo $rs -> error;
    $userr = mysqli_fetch_assoc($rs);
    if($userr){
        $_SESSION['userr']=$use['username'];
        header('location: index.php');
    }
    else{
        echo"Sai thong tin tai khoan!";
    }
}
?>