<?php require_once("Include/DB.php"); ?>
<?php require_once("Include/Sessions.php"); ?>
<?php require_once("Include/Functions.php"); ?>
<?php
if(isset($_POST["Submit"])){

  $name= mysqli_real_escape_string($connection,$_POST["Name"]);
  $email = mysqli_real_escape_string($connection,$_POST["Email"]);
  $Comment = mysqli_real_escape_string($connection,$_POST["comment"]);
  date_default_timezone_set("Asia/Dhaka");
  $CurrentTime=time();
  $DateTime=strftime("%B-%d-%Y %H:%M:%S",$CurrentTime);
  $DateTime;
$PostId=$_GET['id'];
  if(empty($name) || empty($email) || empty($Comment)){
    $_SESSION["ErrorMessaage"]= "All field required";
  }elseif (strlen($Comment)>500){
    $_SESSION["ErrorMessaage"]= " Comment too long";
  } else {
    global $ConnectingDB;
    $PostIDFromURL=$_GET['id'];
    $Query="INSERT INTO comments(datetime,name,email,comment,status,admin_panel_id)
    VALUES('$DateTime','$name','$email','$Comment','OFF','$PostIDFromURL')";
    $Execute=mysqli_query($connection,$Query);
    if ($Execute) {
      $_SESSION["SuccessMessaage"]="Comment Added";
      // Redirect_to("FullPost.php?id={$PostId}");
    }else {
      $_SESSION["ErrorMessaage"]="post failed to add";
      // Redirect_to("FullPost.php?id={$PostId}");
    }
  }

}

 ?>
<!DOCTYPE html>
<html lang="en">
    <!--<![endif]-->
    <head>
        <!-- Title -->
        <title>The Shooter</title>
        <!-- Meta -->
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <!-- Favicon -->
        <link href="favicon.ico" rel="shortcut icon">
        <!-- Bootstrap Core CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.css" rel="stylesheet">
        <!-- Template CSS -->
        <link rel="stylesheet" href="assets/css/animate.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/font-awesome.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/nexus.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/responsive.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/custom.css" rel="stylesheet">
        <!-- Google Fonts-->
        <link href="http://fonts.googleapis.com/css?family=Roboto+Condensed:400,300" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=PT+Sans" type="text/css" rel="stylesheet">
        <link href="http://fonts.googleapis.com/css?family=Roboto:400,300" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div id="body-bg">
            <ul class="social-icons pull-right hidden-xs">
                <li class="social-rss">
                    <a href="#" target="_blank" title="RSS"></a>
                </li>
                <li class="social-twitter">
                    <a href="#" target="_blank" title="Twitter"></a>
                </li>
                <li class="social-facebook">
                    <a href="#" target="_blank" title="Facebook"></a>
                </li>
                <li class="social-googleplus">
                    <a href="#" target="_blank" title="GooglePlus"></a>
                </li>
            </ul>
            <div id="pre-header" class="container" style="height: 40px">
                <!-- Spacing above header -->
            </div>
            <div id="header">
                <div class="container">
                    <div class="row">
                        <!-- Logo -->
                        <div class="logo">
                            <a href="index.html" title="">
                                <img src="assets/img/logo.png" alt="Logo" />
                            </a>
                        </div>
                        <!-- End Logo -->
                    </div>
                </div>
            </div>

            <!-- Top Menu -->
            <div id="hornav" class="container no-padding">
                <div class="row">
                    <div class="col-md-12 no-padding">
                        <div class="text-center visible-lg">
                            <ul id="hornavmenu" class="nav navbar-nav">
                                <li>
                                    <a href="index.php" class="fa-home">Home</a>
                                </li>
                                <li>
                                    <span class="fa-gears">Services</span>
                                    <ul>
                                        <li>
                                            <a href="wedding.php">Wedding Photography & Cinematography</a>
                                        </li>
                                        <li>
                                            <a href="Cultural.php">Cultural Photography & Cinematography</a>
                                        </li>
                                        <li>
                                            <a href="Social.php">Social & Other Photography+Cinematography</a>
                                        </li>
                                        <li>
                                            <a href="Corporate.php">Corporate Photography+Cinematography</a>
                                        </li>

                                        <li class="parent">
                                            <span>Other Services</span>
                                            <ul>
                                                <li>
                                                    <a href="Event.php">Event Planning</a>
                                                </li>
                                                <li>
                                                    <a href="Lighting.php">Lighting + Sound Management</a>
                                                </li>
                                                <li>
                                                    <a href="Artist.php">Artist management</a>
                                                </li>
                                                <li>
                                                    <a href="Costume.php">Costume Designing & Management</a>
                                                </li>
                                                <li>
                                                    <a href="Cartoon.php">Cartoon Making & Portrate Making</a>
                                                </li>
                                            </ul>
                                        </li>

                                    </ul>
                                </li>
                                <li>
                                    <a href="contact.php" class="fa-comment">Contact</a>
                                </li>
                                <li>
                                    <a href="about.php" class="fa-comment">About Us</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Top Menu -->
            <div id="post_header" class="container" style="height: 40px">
                <!-- Spacing below header -->
            </div>
            <div id="content-top-border" class="container">
            </div>
            <!-- === END HEADER === -->
            <!-- === BEGIN CONTENT === -->
            <div id="content">
                <div class="container background-white">
                    <div class="row margin-vert-30">
                        <div class="col-md-12">
                            <h2>Social & Other Photography+Cinematography</h2>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 portfolio-group no-padding">
                            <!-- Portfolio Item -->
                            <div class="row">
                              <div class="col-sm-8">
<div>  <?php echo Message(); echo  SuccessMessaage();  ?>  </div>
                                <?php
                                    global $ConnectingDB;
                                      $PostIDFromURL=$_GET["id"];
                                    $ViewQuery="SELECT * FROM admin_panel WHERE id='$PostIDFromURL' ORDER BY datetime desc";
                                    $Execute=mysqli_query($connection,$ViewQuery);
                                while ($DataRows=mysqli_fetch_array($Execute)) {
                                  $PostId=$DataRows["id"];
                                  $DateTimes=$DataRows["datetime"];
                                  $Title=$DataRows["title"];
                                  $Category=$DataRows["category"];
                                  $Image=$DataRows["image"];
                                 ?>
                                 <div class="blogpost thumbnail">
                                   <h1 id="heading"><?php echo htmlentities($Title) ?></h1>
                                   <img class="img-responsive img-rounded" src="Upload/<?php echo $Image; ?>" alt="">
                                   <div class="caption">
                                     <p style="text-align:left" class="description">
                                       <b>Published on: </b><?php echo htmlentities($DateTimes) ?>
                                     </p>
                                   </div>
                                 </div>
              <br>
                                <?php } ?>
              <?php
              $ConnectingDB;
              $PostIDFromComments=$_GET["id"];
              $ExtractingCommentQuery="SELECT * FROM comments
              WHERE admin_panel_id='$PostIDFromComments' AND status='ON'";
              $Execute=mysqli_query($connection,$ExtractingCommentQuery);
              while ($DataRows=mysqli_fetch_array($Execute)) {
                $CommentDate=$DataRows["datetime"];
                $commenterName=$DataRows["name"];
                $Comments=$DataRows["comment"];
               ?>
               <div style="text-align:left" class="" style="background-color: white; ">
                 <img style="margin-top:10px;" src="images/face.png" alt="face" height="70" width="100";>
                 <h4 style="margin-left:10px;"><?php echo $commenterName; ?></h4>
                 <p style="font-style:italic;margin-left:10px;"><?php echo $CommentDate; ?></p>
                 <p style="margin-left:10px;"><?php echo $Comments; ?></p>
               </div>
              <?php } ?>
              <div class="">
                <h1>Comment:</h1>
                <form class=""  method="post" enctype="multipart/form-data">
                  <fieldset>
                    <div  style="text-align:left"  class="form-group">
                    <label for="Name"><span class="FieldInfo">Name:</span></label>
                    <input class="form-control" type="text" name="Name" id="Name" value="" placeholder="Name">
                  </div> <br>
                  <div  style="text-align:left"  class="form-group">
                  <label for="Email"><span class="FieldInfo">E-mail::</span></label>
                  <input class="form-control" type="email" name="Email" id="Email" value="" placeholder="Email">
                </div> <br>
                <div class="form-group">
                <label for="commentarea"><span class="FieldInfo">Comments:</span></label>
                <textarea class="form-control" id="commentarea" name="comment" rows="8" cols="80"></textarea>
                </div>

                  <input class="btn btn-primary" type="submit" name="Submit" value="Submit">
                  </fieldset>

                </form>
              </div>
                              </div>
                              <div class="col-sm-offset-1 col-sm-3">
                                <h2>Site option</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                              </div>
                            </div>
</div>
</div>
</div>
                            <!-- End Portfolio Item -->


                        </div>
                    </div>
                </div>
            </div>
            <!-- === END CONTENT === -->

    </body>
</html>
<!-- === END FOOTER === -->
