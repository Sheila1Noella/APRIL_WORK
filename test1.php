<html>
 <head>
  <title>PHP-Test</title>
 </head>
 <body>
  <?php 
  $servername = "localhost";
  $username = "root";
  $password = "";
  $conn = mysql_connect ($servername, $username, $password) or die("unable to connect to host");
  $sql = mysql_select_db ('first_database',$conn) or die ("unable to connect to the database");
      $sql = "create table table2(ID_No int Primary key, names varchar(255));";
      $result = mysql_query($sql);
  echo ?>
<script src="test.js"></script>
 </body>
</html>