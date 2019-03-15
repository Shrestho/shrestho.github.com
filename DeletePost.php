<?php require_once("Include/DB.php"); ?>
<?php require_once("Include/Sessions.php"); ?>
<?php require_once("Include/Functions.php"); ?>

<?php
if(isset($_POST["Submit"])){

  $title= mysqli_real_escape_string($connection,$_POST["Title"]);
  $Category = mysqli_real_escape_string($connection,$_POST["Category"]);
  date_default_timezone_set("Asia/Dhaka");
  $CurrentTime=time();
  $DateTime=strftime("%B-%d-%Y %H:%M:%S",$CurrentTime);
  $DateTime;
  $Image=$_FILES["Image"]["name"];
  $Target="Upload/".basename($_FILES["Image"]["name"]);

    global $ConnectingDB;
    $DeleteFromURL=$_GET['Delete'];
    $Query="DELETE FROM admin_panel WHERE id='$DeleteFromURL'";
    $Execute=mysqli_query($connection,$Query);
    move_uploaded_file($_FILES["Image"]["tmp_name"],$Target);
    if ($Execute) {
      $_SESSION["SuccessMessaage"]="Post Deleted";
      Redirect_to("maindashboard.php");
    }else {
      $_SESSION["ErrorMessaage"]="failed to Post Delete";
      Redirect_to("mainDashBoard.php");
    }


}

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Delete Post</title>
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
      <li class="active"> <a href="maindashboard.php"><span class="glyphicon glyphicon-th"></span>&nbsp; DashBoard</a> </li>
      <li> <a href="mainaddnewpost.php"><span class="glyphicon glyphicon-list-alt"> </span>&nbsp;  Add New post</a> </li>
      <li> <a href="Categories.php"><span class="glyphicon glyphicon-tags"></span>&nbsp;  Categories</a> </li>
      <li> <a href="admin.php"><span class="glyphicon glyphicon-user"></span>&nbsp; Manage Admin</a ></li>
      <li> <a href="Comments.php"><span class="glyphicon glyphicon-comment"></span>&nbsp; Comments &nbsp;
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
      <li> <a href="blog.php" target="_blank"><span class="glyphicon glyphicon-equalizer"></span>&nbsp; Live  Blog </a> </li>
      <li> <a href="postapprove.php"><span class="glyphicon glyphicon-log-out"></span>&nbsp; Post approve</a> </li>
    </ul>
  </div>
  <!-- ending of side area -->
  <div class="col-sm-10">
    <div >
      <?php echo Message(); echo SuccessMessaage(); ?>
    </div>
    <h1>Delete Post:</h1>
<?php
$searchQueryParameter=$_GET['Delete'];
$ConnectingDB;
$Query="SELECT * FROM admin_panel WHERE id='$searchQueryParameter'";
$ExecuteQuery=mysqli_query($connection,$Query);
while ($DataRows=mysqli_fetch_array($ExecuteQuery)) {
  $titleToBeUpdated=$DataRows['title'];
  $CategoryToBeUpdated=$DataRows['category'];
  $ImageToBeUpdated=$DataRows['image'];
}

 ?>
<form class="" action="DeletePost.php?Delete=<?php echo $searchQueryParameter; ?>" method="post" enctype="multipart/form-data">
  <fieldset>
    <div class="form-group">
    <label for="title"><span class="FieldInfo">Title</span></label>
    <input disabled value="<?php echo $titleToBeUpdated ?>" class="form-control" type="text" name="Title" id="Title" value="" placeholder="Title">
  </div> <br>
  <div class="form-group">
    <span class="FieldInfo">Existing Category:</span>
    <?php echo $CategoryToBeUpdated; ?><br>
  <label for="categoryselect"><span class="FieldInfo">Category:</span></label>
  <select disabled class="form-control" id="categoryselect" name="Category">
    <?php
    global $ConnectingDB;
    $viewQuery="SELECT * FROM category ORDER BY datetime desc;";
    $Execute=mysqli_query($connection,$viewQuery);
    while ($DataRows=mysqli_fetch_array($Execute)) {
      $id=$DataRows["id"];
      $CategoryName=$DataRows["name"];
     ?>
     <option> <?php echo $CategoryName; ?></option>
   <?php } ?>
  </select>
</div>
<div class="form-group">
  <span class="FieldInfo">Existing Image:</span><br>
  <img src="Upload/<?php echo $ImageToBeUpdated; ?>" width="170"; height="50"><br>
<label for="imageselect"><span class="FieldInfo">Select Image:</span></label>
<input disabled type="file" class="form-control" name="Image" id="imageselect" value="">
</div>
  <input class="btn btn-danger btn-block" type="submit" name="Submit" value="Delete Post">
  </fieldset>

</form>



  </div><!-- ending main area -->
</div><!-- ending row -->
</div><!-- container-fluid -->
<div id="Footer">
 <hr><p>Shaishab Das <br> &trade; All copyright reserved.</p>
</div>

<!-- jscript -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
