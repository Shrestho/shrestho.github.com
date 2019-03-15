 <?php
 $servername = "localhost";
 $username = "root";
 $password = "";
 $connection = new mysqli($servername, $username, $password,'photography');

 if ($connection) {
   // echo "connected </br>";
 } else {
   error.mysql_connect();
 }
 $ConnectingDB = mysqli_select_db($connection,'photography');
 if ($ConnectingDB) {
   // echo "database selected";
 } else {
   error.mysqli_select_db();
 }
 ?>
