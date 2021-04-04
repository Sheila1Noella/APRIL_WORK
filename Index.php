<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>TYPE ANY SIMPLE MESSAGE</h1>
  <form method="post">
  <input type="text" placeholder="type your message here" id="messagebox" name="c_message">
  <p id="Messagedisplay"></P>
  <button type="submit" name="submit" onclick="displaymessage()">DISPLAY</button>
</form>
<?php 
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "first_database";
  $conn = new mysqli($servername, $username, $password, $dbname);
  if($conn -> connect_error)
  {
      die("connection failed: ". $conn->connect_error);
  }
  if(isset($_POST['submit'])){
        $sql = "insert into client_message (Messages) values ('".$_POST["c_message"]."');";
  }
  if($conn->query($sql) === TRUE)
  {
      echo "Message inserted successfully";
  }
  else
  {
      echo "Error ".$sql. "<br>" . $conn->error;
  }
  $result = mysqli_query($conn,"SELECT * FROM Client_message");
  echo "<h2>The message you entered</h2>";
  echo "<table border=1><tr><th>ID</th>
  <th>Message</th></tr>";
  while($row = mysqli_fetch_array($result))
  {
      echo "<tr>";
      echo "<td>".$row['ID_No']."</td>";
      echo "<td>".$row['Messages']."</td>";
      echo "</tr>";
  }
  echo "</table>";
  $conn->close();
?>

<script src="test.js"></script>
</body>
</html>
