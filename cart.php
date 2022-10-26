



<html>
<head>
<title>Cart</title>
<link rel="stylesheet" type="text/css" href="cartstyle.css">
</head>
<body>

			<header>

		    <div class="container">
		      <h1 class="logo"></h1>
		<nav>
		<ul>
		   <li><a href="home.html">Back</a></li>		  
		   <li><a href="login.html">logout</a></li>		          
	        </ul>
	      </nav>
	    </div>
	</header>
			
			
<div class="booklist">

<?php
//$text = $_POST['text1'];


$dbconnect=mysqli_connect("localhost","root","","danish");
if(mysqli_connect_errno($dbconnect)){
	echo "failed to connect";
	
}
$sql = "SELECT  * FROM addbook";
$result = mysqli_query($dbconnect, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
	echo"Selected books are:  <br>";
    while($row = mysqli_fetch_assoc($result)) {
        echo "-->" . $row["text1"]. "<br>";
    }
} else {
    echo "0 results";
}

?>

</div>
<br>
<br>
<br>

<a href="checkout1.html"><input type="submit" value="Proceed to checkout" name="Proceed to CheckOut"></a>

<?php
//$text = $_POST['text1'];

$sql = "DELETE FROM addbook WHERE id=0";

if (mysqli_query($dbconnect, $sql)) {
   // echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}

?>
</body>
</html>