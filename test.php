<html>
<head>
<title> connect to mysql</title>
<body>

<?php
$db_host = "localhost";
$db_user = 'vagon';
$db_passwd = "1";
$db_base = "test";

$mysqli = new mysqli($db_host, $db_user, $db_passwd, $db_base);
if($mysqli->connect_error){
  die('Connect Error (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
}

if($result  = $mysqli->query("SELECT first FROM test1")){
  while($row = mysqli_fetch_assoc($result)){
    echo $row['first']."<br>";
  }
}

?>
