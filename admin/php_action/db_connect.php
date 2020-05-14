<?php 	

$localhost = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "kevaatDB";

// db connection
$connect = new mysqli($localhost, $username, $password, $dbname);
// check connection
if($connect->connect_error) {
  die("Erreur de connection à la base de donnée : " . $connect->connect_error);
} else {
  // echo "Successfully connected";
}

?>