<?php

$serv = 'localhost';
$user = 'root';
$pass = 'Radek91!';

$conn = mysqli_connect($serv, $user, $pass);

if(!$conn){
  die("Connection failed: ".mysqli_connect_error());
}

$sql = 'CREATE DATABASE testDBprocedural';

if(mysqli_query($conn, $sql)){
  echo 'Database created successfully';
}else{
  echo 'Error creating database:'.mysqli_error($conn);
}

mysqli_close($conn);

?>
