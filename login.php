<?php
$conn=mysqli_connect("localhost","root","","danish");
extract($_POST);
$Email = $_POST['email'];
$password = $_POST['password'];


if(isset($submit))
{
  $rs=mysqli_query($conn,"select * from reg where email='$Email' and password='$password'");
  if(mysqli_num_rows($rs)<1)
  {
    $found="N";
  }
  else
  {
    $_SESSION["login"]=$Email;
    $_SESSION["login"]=$password;
  }
}
if (isset($_SESSION["login"]))
{

header("Location: home.php");


}
else
{
 header("Location: loginerror.html");

}
?>