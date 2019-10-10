<?php
include_once('database.php');

$connect = mysqli_connect($servername, $username, $password, $dbname);

$id_olt = mysqli_real_escape_string($connect, $_POST["id_olt"]);
$id_num = mysqli_real_escape_string($connect, $_POST["id_num"]);
$id_col = mysqli_real_escape_string($connect, $_POST["id_col"]);
$id_row = mysqli_real_escape_string($connect, $_POST["id_row"]);
$port = mysqli_real_escape_string($connect, $_POST["port"]);
$ftm = mysqli_real_escape_string($connect, $_POST["ftm"]);


$query = "INSERT INTO tb_olt(id_olt, id_num, id_col, id_row, port, ftm) VALUES ('$id_olt', '$id_num', '$id_col', '$id_row', '$port', '$ftm' )";

// echo "<pre>";
// var_dump($query);

if(mysqli_query($connect, $query)){
	echo 'Data Inserted';
}else{
	echo mysqli_error($connect);
}
?>