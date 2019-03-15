<?php require_once("Include/DB.php"); ?>
<?php require_once("Include/Sessions.php"); ?>
<?php require_once("Include/Functions.php"); ?>
<?php
if (isset($_GET["id"])) {
  $IdFromURL=$_GET["id"];
  $ConnectingDB;
  $Query="DELETE FROM category WHERE id='$IdFromURL'";
  $Execute=mysqli_query($connection,$Query);
  if ($Execute) {
    $_SESSION['ErrorMessage']="Category Deleted";
    Redirect_to("categories.php");
  }else {
    $_SESSION["ErrorMessage"]="Not delete";
    Redirect_to("categories.php");
  }
} ?>
