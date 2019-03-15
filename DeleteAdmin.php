<?php require_once("Include/DB.php"); ?>
<?php require_once("Include/Sessions.php"); ?>
<?php require_once("Include/Functions.php"); ?>
<?php
if (isset($_GET["id"])) {
  $IdFromURL=$_GET["id"];
  $ConnectingDB;
  $Query="DELETE FROM registration WHERE id='$IdFromURL'";
  $Execute=mysqli_query($connection,$Query);
  if ($Execute) {
    $_SESSION['ErrorMessage']="Admin Deleted";
    Redirect_to("admin.php");
  }else {
    $_SESSION["ErrorMessage"]="Not delete";
    Redirect_to("admin.php");
  }
} ?>
