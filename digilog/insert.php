<?php
include_once('database.php');

$connect = mysqli_connect($servername, $username, $password, $dbname);

$id_alpro = mysqli_real_escape_string($connect, $_POST["id_alpro"]);
$id_panel = mysqli_real_escape_string($connect, $_POST["id_panel"]);
$id_port = mysqli_real_escape_string($connect, $_POST["id_port"]);
$panel_in = mysqli_real_escape_string($connect, $_POST["panel_in"]);
$distrib = mysqli_real_escape_string($connect, $_POST["distrib"]);


$query = "INSERT INTO tb_feeder(id_alpro, id_panel, id_port, panel_in, panel_out_splitter, panel_out_odp, distrib) VALUES ('$id_alpro', '$id_panel', '$id_port', '$panel_in', ";


if (isset($_POST["panel_out_splitter"])) {
	$query .= " '".mysqli_real_escape_string($connect, $_POST["panel_out_splitter"])."', ";
}else{
	$query .= "NULL,";
}

if (isset($_POST["panel_out_odp"])) {
	$query .= " '".mysqli_real_escape_string($connect, $_POST["panel_out_odp"])."',";
}else{
	$query .= " NULL,";
}

if ($_POST["distrib"] !== '') {
	$query .= " '".mysqli_real_escape_string($connect, $_POST["distrib"])."')";
}else{
	$query .= " NULL)";
}

// echo "<pre>";
// var_dump($query);

if(mysqli_query($connect, $query)){
	echo 'Data Inserted';
}else{
	echo mysqli_error($connect);
}
?>