<?php require_once("Include/DB.php"); ?>
<?php require_once("Include/Sessions.php"); ?>
<?php require_once("Include/Functions.php"); ?>
<?php
if (isset($_GET["id"])) {
  $IdFromURL=$_GET["id"];
  $ConnectingDB;
  $Query="UPDATE Comments SET status='OFF' WHERE id='$IdFromURL'";
  $Execute=mysqli_query($connection,$Query);
  if ($Execute) {
    $_SESSION['ErrorMessage']="Comment DisApproved";
    Redirect_to("Comments.php");
  }else {
    $_SESSION["ErrorMessage"]="Not approve";
    Redirect_to("Comments.php");
  }
} ?>
