<?php

$serv = 'localhost';
$user = 'root';
$pass = 'Radek91!';
$db = 'testdbprocedural';

$conn = mysqli_connect($serv, $user, $pass, $db);

if(!$conn){
  die("Connection failed: ".mysqli_connect_error());
}

$sql = "INSERT INTO TestTable(firstName,  lastName,  email)
        VALUES ('Rad', 'Fol', 'radF@wp.pl');";
$sql .= "INSERT INTO TestTable(firstName,  lastName,  email)
        VALUES ('Aga', 'Gran', 'agaG@wp.pl');";
$sql .= "INSERT INTO TestTable(firstName,  lastName,  email)
        VALUES ('Raf', 'Gran', 'rafG@wp.pl');";

/*
mysqli_multi_query = stosujemy gdy należy wykonać wiele instrukcji SQL.
W tym przykładzie trzy nowe rekordy.
*/

if(mysqli_multi_query($conn, $sql)){
  echo 'New records successfully';
}else{
  echo 'Error : '.$sql.'<br>'.mysqli_error($conn);
}

mysqli_close($conn);

?>
