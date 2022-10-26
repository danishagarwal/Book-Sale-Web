<?php
$text=$_POST['text1'];


$dbconnect=mysqli_connect("localhost","root","","danish");
if(mysqli_connect_errno($dbconnect)){
	echo "failed to connect";
	
}
else {
	

	
	$INSERT = "INSERT into addbook (text1) values(?)";
	
	$stmt = $dbconnect->prepare($INSERT);
	$r= $stmt->num_rows;
	if ($r==0){
		
		$stmt->bind_param("s",$text);
		$stmt->execute();
		$stmt->store_result();
	
		header("location: home.html");
		
	}
	else
	{echo "Record is same";}
	}
?>

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
<?php
  $sql = "SELECT * FROM addbook";
  $result = mysqli_query($dbconnect, $sql);
  
  while($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["id"]. " - Name: " . $row["text1"]. "<br>";
    }
  
?>

<a href="checkout1.html"><input type="submit" value="Proceed to checkout" name="Proceed to CheckOut"></a>


</body>
</html>