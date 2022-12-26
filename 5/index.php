<?php

$serv = 'localhost';
$user = 'root';
$pass = 'Radek91!';
$db = 'testdbprocedural';

$conn = mysqli_connect($serv, $user, $pass, $db);

if(!$conn){
  die("Connection failed: ".mysqli_connect_error());
}

$sql = "SELECT id, firstname, lastname FROM testtable";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0){
  while($row = mysqli_fetch_assoc($result)){
    echo 'id: '.$row["id"]." - Name: ".$row['firstname']." "
    .$row["lastname"]."<br><br>";
  }
}else{
  echo "0 result";
}

mysqli_close($conn);

?>
