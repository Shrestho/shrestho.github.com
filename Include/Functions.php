<?php require_once("Include/DB.php"); ?>
<?php require_once("Include/Sessions.php"); ?>
<?php
function Redirect_to($New_Location){
  header("Location:".$New_Location);
  exit;
}
// function Login_attempt($Username,$Password){
//   global $ConnectingDB;
//   $Query="SELECT * FROM registration WHERE username='$Username' AND password='$Password' ";
//   $Execute=mysqli_query($connection,$Query);
//
// if ($Admin=mysqli_fetch_assoc($Execute)) {
//   return $Admin;
// }else {
//   return null;
// }
//
// }
 ?>
