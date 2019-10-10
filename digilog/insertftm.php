<?php
include_once('database.php');

$connect = mysqli_connect($servername, $username, $password, $dbname);

$id_kolom = mysqli_real_escape_string($connect, $_POST["id_kolom"]);
$id_panel = mysqli_real_escape_string($connect, $_POST["id_panel"]);
$id_row = mysqli_real_escape_string($connect, $_POST["id_row"]);
$id_col = mysqli_real_escape_string($connect, $_POST["id_col"]);
$nm_ftm = mysqli_real_escape_string($connect, $_POST["nm_ftm"]);
$port = mysqli_real_escape_string($connect, $_POST["port"]);
$odc = mysqli_real_escape_string($connect, $_POST["odc"]);
$core = mysqli_real_escape_string($connect, $_POST["core"]);
$ftm = mysqli_real_escape_string($connect, $_POST["ftm"]);


$query = "INSERT INTO tb_ftm(id_kolom, id_panel, id_row, id_col, nm_ftm, port, odc, core, ftm) VALUES ('$id_kolom', '$id_panel', '$id_row', '$id_col', '$nm_ftm', '$port', '$odc', '$core', '$ftm' )";

// echo "<pre>";
// var_dump($query);

if(mysqli_query($connect, $query)){
	echo 'Data Inserted';
}else{
	echo mysqli_error($connect);
}
?>