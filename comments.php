<?php require_once("Include/DB.php"); ?>
<?php require_once("Include/Sessions.php"); ?>
<?php require_once("Include/Functions.php"); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Comments</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery-3.3.1.min.js"></script>
    <script  src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/adminstyle.css">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- from w3school -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  </head>
  <body>

<div class="container-fluid">
<div class="row">
  <div class="col-sm-2">
    <h2>The shooter</h2>
    <ul id="Side_Menu" class="nav nav-pills nav-stacked">
      <li> <a href="maindashboard.php"><span class="glyphicon glyphicon-th"></span>&nbsp; DashBoard</a> </li>
      <li> <a href="mainaddnewpost.php"><span class="glyphicon glyphicon-list-alt"> </span>&nbsp;  Add New post</a> </li>
      <!-- <li> <a href="Categories.php"><span class="glyphicon glyphicon-tags"></span>&nbsp;  Categories</a> </li> -->
      <li> <a href="admin.php"><span class="glyphicon glyphicon-user"></span>&nbsp; Manage Admin</a ></li>
      <li class="active"> <a href="Comments.php"><span class="glyphicon glyphicon-comment"></span>&nbsp; Comments &nbsp;
        <?php
        $ConnectingDB;
        $QueryTotal="SELECT COUNT(*) FROM Comments WHERE status='OFF'";
        $ExecuteTotal=mysqli_query($connection,$QueryTotal);
        $RowsTotal=mysqli_fetch_array($ExecuteTotal);
        $Total=array_shift($RowsTotal);
        if($Total>0){
         ?>
         <span class="label pull-right label-warning ">
           <?php echo $Total; ?>
         </span>
        <?php } ?>

      </a> </li>
      <li> <a href="index.php" target="_blank"><span class="glyphicon glyphicon-equalizer"></span>&nbsp; Live  Blog </a> </li>
      <li> <a href="postapprove.php"><span class="glyphicon glyphicon-ok"></span>&nbsp; Post approve</a> </li>
    </ul>
  </div>
  <!-- ending of side area -->
  <div class="col-sm-10">
    <div>  <?php echo Message(); echo  SuccessMessaage();  ?>  </div>

    <h1>Unapprove Comments:</h1>
<div class="table-responsive">
<table class="table table-striped table-hover">
  <tr>
    <th>No.</th>
    <th>Name</th>
    <th>Date</th>
    <th>comment</th>
    <th>Approve</th>
    <th>Delete</th>
    <th>Details</th>
  </tr>
<?php
$ConnectingDB;
$Query="SELECT * FROM Comments WHERE status='OFF' ORDER BY datetime desc";
$Execute=mysqli_query($connection,$Query);
$SrNo=0;
while ($DataRows=mysqli_fetch_array($Execute)) {
  $CommentId=$DataRows['id'];
  $DataTimeofComment=$DataRows['datetime'];
  $PersonName=$DataRows['name'];
  $PersonComment=$DataRows['comment'];
  $CommentedPersonId=$DataRows['admin_panel_id'];
  $SrNo++;
 ?>
 <tr>
   <td><?php echo $SrNo ?></td>
   <td><?php echo $PersonName ?></td>
   <td><?php echo $DataTimeofComment ?></td>
   <td><?php
   if (strlen($PersonComment)>20) {
     echo substr($PersonComment,0,20).'...';}else {
       echo $PersonComment;
     } ?>
    </td>
   <td><a href="ApproveComment.php?id=<?php echo $CommentId ?>"><span class="btn btn-success">Approve</span></a></td>
   <td><a href="deletecomments.php?id=<?php echo $CommentId ?>"><span class="btn btn-danger">Delete</span></a></td>
   <td><a target="_blank" href="fullpost.php?id=<?php echo $CommentedPersonId ?>"><span class="btn btn-primary">Live Preview</span></a></td>
 </tr>
<?php } ?>
</table>
</div>

<h1>Approve Comments:</h1>
<div class="table-responsive">
<table class="table table-striped table-hover">
<tr>
<th>No.</th>
<th>Name</th>
<th>Date</th>
<th>comment</th>
<th>Approve</th>
<th>Delete</th>
<th>Details</th>
</tr>
<?php
$ConnectingDB;
$Query="SELECT * FROM Comments WHERE status='ON' ORDER BY datetime desc";
$Execute=mysqli_query($connection,$Query);
$SrNo=0;
while ($DataRows=mysqli_fetch_array($Execute)) {
$CommentId=$DataRows['id'];
$DataTimeofComment=$DataRows['datetime'];
$PersonName=$DataRows['name'];
$PersonComment=$DataRows['comment'];
$CommentedPersonId=$DataRows['admin_panel_id'];
$SrNo++;
if (strlen($PersonComment>18)) {$PersonComment=substr($PersonComment,0,18).'..';}

?>
<tr>
<td><?php echo $SrNo ?></td>
<td><?php echo $PersonName ?></td>
<td><?php echo $DataTimeofComment ?></td>
<td><?php
if (strlen($PersonComment)>20) {
  echo substr($PersonComment,0,20)."...";}else {
    echo $PersonComment;
  } ?>
 </td>
<td><a href="disapproveComment.php?id=<?php echo $CommentId ?>"><span class="btn btn-danger">DisApprove</span></a></td>
<td><a href="deletecomments.php?id=<?php echo $CommentId ?>"><span class="btn btn-danger">Delete</span></a></td>
<td><a target="_blank" href="fullpost.php?id=<?php echo $CommentedPersonId ?>"><span class="btn btn-primary">Live Preview</span></a></td>
</tr>
<?php } ?>
</table>
</div>

  </div>
<!-- ending main area -->
</div>
<!-- ending row -->
</div>
<!-- container-fluid -->


<!-- jscript -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
