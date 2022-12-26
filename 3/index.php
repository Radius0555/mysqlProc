<?php

$serv = 'localhost';
$user = 'root';
$pass = 'Radek91!';
$db = 'testdbprocedural';

$conn = mysqli_connect($serv, $user, $pass, $db);

if(!$conn){
  die("Connection failed: ".mysqli_connect_error());
}

$sql = 'CREATE TABLE TestTable(
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  firstName VARCHAR(30) NOT NULL,
  lastName VARCHAR(30) NOT NULL,
  email VARCHAR(50),
  reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)';

if(mysqli_query($conn, $sql)){
  echo 'Tabela Test created successfully';
}else{
  echo 'Error creating table: '.mysqli_error($conn);
}

mysqli_close($conn);

?>
