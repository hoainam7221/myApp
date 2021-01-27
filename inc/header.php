<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width">
  <title>N-Store </title>
  <link rel="stylesheet" type="text/css" href="css/main.css">
  <script src="https://kit.fontawesome.com/5c665cef75.js" crossorigin="anonymous"></script>

  <style>
  .topnav a.active {
  background-color: #2196F3;
  color: white;
}

.topnav .search-container {
  float: right;
}

.topnav input[type=text] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
}

.topnav .search-container button {
  float: right;
  padding: 6px 10px;
  margin-top: 8px;
  margin-right: 16px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.topnav .search-container button:hover {
  background: #ccc;
}

@media screen and (max-width: 600px) {
  .topnav .search-container {
    float: none;
  }
  .topnav a, .topnav input[type=text], .topnav .search-container button {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .topnav input[type=text] {
    border: 1px solid #ccc;  
  }
}
  </style>
</head>
<body>




<!-- navigation -->
<div class="topnav">
  <a href=""> <img src="Img/Logo.jpg" alt=""  width="50px" height="50px" ></a>
  <a href="Home.php" style="padding:20px">Home </a>
  <a href="index.php"style="padding:20px">Phone</a>
  <a href="#"style="padding:20px"> Laptop</a>
  <a href="#"style="padding:20px"> Accessories</a>
  <div style="padding:10px" class="search-container" >
      <form  method="GET" action="search.php">
          <input  type="text" name="s" placeholder="input name of product" />
          <button type="submit"><i class="fa fa-search"></i></button>
      </form>
  </div>
</div>
<!-- <div class="content1">
  
  
  <img class="mySlides" src="Img/ao2.jpg" style="width:100%">
  <img class="mySlides" src="Img/ao3.jpg" style="width:100%">
  <img class="mySlides" src="Img/ao6.jpg" style="width:100%">
  <img class="mySlides" src="Img/ao5.jpg" style="width:100%">

  <button class="display-left" id="aaa" onclick="plusDivs(-1)">&#10094;</button>
  <button class="  display-right" id="aaa" onclick="plusDivs(1)">&#10095;</button>
</div>

<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
</script> -->




<!-- END navigation -->
