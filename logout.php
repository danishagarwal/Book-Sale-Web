<?php

if(isset($_GET['logout'])) {  
   
    session_start();
	unset($_SESSION["email"]);
	unset($_SESSION["password"]);
    header('Location: login.html');
    exit;
    }
?>