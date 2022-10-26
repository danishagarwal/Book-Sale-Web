<?php
$Email = $_POST['email'];
$password = $_POST['password'];

$dbconnect=mysqli_connect("localhost","root","","danish");
if(mysqli_connect_errno($dbconnect)){
	echo "failed to connect";
	
}
else {
	

	$password = md5($password);
	$INSERT = "INSERT into reg (email,password) values(?,?)";
	
	
	$stmt = $dbconnect->prepare($INSERT);
	$r= $stmt->num_rows;
	$to = $Email; 
  	$sub = "Registration successful"; 
  	$msg="Hello , You have been registered successfully"; 
  	if (mail($to,$sub,$msg)) 
      		echo "Your Mail is sent successfully."; 
  	else
      		echo "Your Mail is not sent. Try Again.";
	if ($r==0){
		
		$stmt->bind_param("ss",$Email,$password);
		$stmt->execute();
		$stmt->store_result();
	
		header("location: login.html");
		

	}
	else
	{echo "Record is same";}
	}
?>