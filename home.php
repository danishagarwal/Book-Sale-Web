<?php
$text = $_POST['text1'];


$dbconnect=mysqli_connect("localhost","root","","danish");
if(mysqli_connect_errno($dbconnect)){
	echo "failed to connect";
	
}
else {
	

	//$query=mysqli_query("$dbconnect","INSERT INTO addbook values("","$text")");
	
	$INSERT = "INSERT into addbook (text1) values(?)";
	header("location: home.html");
	
	$stmt = $dbconnect->prepare($INSERT);
	$r= $stmt->num_rows;
	if ($r==0){
		
		$stmt->bind_param("s",$text);
		$stmt->execute();
		$stmt->store_result();
	
		//header("location: home.html");
		
	}
	else
	{echo "Record is same";}
	}
?>




<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>


header {
  background: #55d6aa;
  
}

header::after {
  content: '';
  display: table; the margin ;
  check : fetahte
  clear: both;
}
.container {
	width: 80%;
	margin: 0 auto;
}
nav {
  float: right;
}

nav ul {
  margin: 0;
  padding: 0;
  list-style: none;
}

nav li {
  display: inline-block;
  margin-left: 70px;
  padding-top: 23px;

  position: relative;
}
nav a {
  color: #444;
  text-decoration: none;
  text-transform: uppercase;
  font-size: 14px;
}

nav a:hover {
  color: #000;
}

nav a::before {
  content: '';
  display: block;
  height: 5px;
  background-color: #444;

  position: absolute;
  top: 0;
  width: 0%;

  transition: all ease-in-out 250ms;
}

nav a:hover::before {
  width: 100%;
}

body{
    margin: 0;
    padding: 0;
    background: url(download.jpg);
    background-size: cover;
    background-position: center;
    font-family: sans-serif;
}


* {box-sizing: border-box}
.mySlides1, .mySlides2 {display: none}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a grey background color */
.prev:hover, .next:hover {
  background-color: #f1f1f1;
  color: black;
}

input[type="submit"]
{
	padding:10px;
	margin:10px;
    border: none;
    outline: none;
    height: 40px;
    background: #fb2525;
    color: #fff;
    font-size: 18px;
    border-radius: 20px;
}

input[type="text"]
{
	padding:20px;
	margin:20px;
    border: none;
    border-bottom: 1px solid #fff;
    background: transparent;
    outline: none;
    height: 40px;
    color: #fff;
    font-size: 16px;
	width:500px;

}

h2{
color:white;

}

p{
color:white;
font-size:20px;
}

#wrap{
width:485px;
}

.left{
float:left;
}

.right{
float:right;
}
</style>
</head>
<body>
			<header>

		    <div class="container">
		      <h1 class="logo"></h1>

		      <nav>
		        <ul>
		          <li><a href="home.html">Home</a></li>
				  <li><a href="add.php">Cart</a></li>
		          <li><a href="login.html">logout</a></li>
		          
		        </ul>
		      </nav>
		    </div>
			</header>
		  


<h2 style="text-align:center">Books Available Right Now </h2>
<div class="header">
		
		    <form method="POST" action="home.php">
		    <input type="text" name="text1" placeholder="Enter Book Name">
			<input type="submit" value="Add Book" name="submit" onclick="home.html">
        	
    </form>

		</div>
<div id="wrap">
<div class="left">
<p>Adventure</p>
<div class="slideshow-container">
  <div class="mySlides1">
    <img src="1.jfif" style="width:150%">
    <p>The Mirror of Z</p>
	<p>Cost:-Rs250</p>
  </div>

  <div class="mySlides1">
    <img src="2.jfif" style="width:150%">
    <p>Dragon Throne</p>
	<p>Cost:-Rs400</p>
  </div>

  <div class="mySlides1">
    <img src="3.jfif" style="width:150%">
    <p>The Forbidden Library</p>
	<p>Cost:-Rs600</p>
  </div>

  <a class="prev" onclick="plusSlides(-1, 0)">&#10094;</a>
  <a class="next" onclick="plusSlides(1, 0)">&#10095;</a>
</div>
</div>

<div class="right">
<p>Fiction</p>
<div class="slideshow-container">
  <div class="mySlides2">
    <img src="4.jfif" style="width:150%">
	<p>An Orphans War</p>
	<p>Cost:-Rs150</p>
  </div>

  <div class="mySlides2">
    <img src="5.jfif" style="width:150%">
	<p>Harry Potter</p>
	<p>Cost:-Rs600</p>
  </div>

  <div class="mySlides2">
    <img src="6.jfif" style="width:150%">
	<p>Life of Pi</p>
	<p>Cost:-Rs150</p>
  </div>

  <a class="prev" onclick="plusSlides(-1, 1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1, 1)">&#10095;</a>
</div>
</div>
</div>
<script>
 
   
var slideIndex = [1,1];
var slideId = ["mySlides1", "mySlides2"]
showSlides(1, 0);
showSlides(1, 1);

function plusSlides(n, no) {
  showSlides(slideIndex[no] += n, no);
}

function showSlides(n, no) {
  var i;
  var x = document.getElementsByClassName(slideId[no]);
  if (n > x.length) {slideIndex[no] = 1}    
  if (n < 1) {slideIndex[no] = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[slideIndex[no]-1].style.display = "block";  
}
</script>

</body>
</html> 
