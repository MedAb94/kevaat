<?php 	

require_once 'db_connect.php';

$sql = "SELECT * FROM posts order by id desc limit 4";
$result = $connect->query($sql);


$data = array();

$output = array('data' => array());


     while ($row = mysqli_fetch_assoc($result)){
         $data[] = $row;
     }



$connect->close();

echo json_encode($data);