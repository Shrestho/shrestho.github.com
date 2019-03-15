<?php require_once("Include/DB.php"); ?>
<?php require_once("Include/Sessions.php"); ?>
<?php require_once("Include/Functions.php"); ?>

<?php
if(isset($_POST["Submit"])){
  $Category = mysqli_real_escape_string($connection,$_POST["Category"]);
  date_default_timezone_set("Asia/Dhaka");
  $CurrentTime=time();
  $DateTime=strftime("%B-%d-%Y %H:%M:%S",$CurrentTime);
  $DateTime;
  if(empty($Category)){
    $_SESSION["ErrorMessaage"]= "Field Must be filled out";
    Redirect_to("Categories.php");
  }elseif (strlen($Category)>99){
    $_SESSION["ErrorMessaage"]= "too long name";
    Redirect_to("Categories.php");
  } else {
    global $ConnectingDB;
    $Query="INSERT INTO category(datetime,name)
    VALUES('$DateTime','$Category')";
    $Execute=mysqli_query($connection,$Query);
    if ($Execute) {
      $_SESSION["SuccessMessaage"]="Category Added";
      Redirect_to("Categories.php");
    }else {
      $_SESSION["ErrorMessaage"]="Category failed to add";
      Redirect_to("Categories.php");
    }
  }

}

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Categories</title>
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
    <h1>Shrestho</h1>
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
    <h1>Manage Categories:</h1>
<form class="" action="Categories.php" method="post">
  <fieldset>
    <div>
    <label for="Categoriesname"></label>
    <input class="form-control" type="text" name="Category" id="Categoryname" value="" placeholder="Name">
  </div> <br>
  <input class="btn btn-success btn-block" type="submit" name="Submit" value="Add New Category">
  </fieldset>

</form>
<div class="table-responsive">
  <table class="table table-hover">
    <tr>
      <th>Sr No:</th>
      <th>date & time:</th>
      <th>Category:</th>
      <th>Action</th>
    </tr>
    <?php
    global $ConnectingDB;
    $viewQuery="SELECT * FROM category";
    $Execute=mysqli_query($connection,$viewQuery);
    $Srno=0;
    while ($DataRows=mysqli_fetch_array($Execute)) {
      $id=$DataRows["id"];
      $DateTime=$DataRows["datetime"];
      $Category=$DataRows["name"];
      $Srno++;

     ?>
    <tr>
      <td><?php echo $Srno; ?></td>
      <td><?php echo $DateTime; ?></td>
      <td><?php echo $Category ?></td>
  <td>
<a href="DeleteCategory.php?id=<?php echo $id ?>">
  <span class="btn btn-danger">Delete</span>
</a>
  </td>
    </tr>
  <?php } ?>
  </table>
</div>

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
