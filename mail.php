<?php 

  $to = "sameerahire6399@gmail.com"; 
  $sub = "Registration successful"; 
  $msg="Hello , You have been registered successfully"; 
  if (mail($to,$sub,$msg)) 
      echo "Your Mail is sent successfully."; 
  else
      echo "Your Mail is not sent. Try Again."; 
?>