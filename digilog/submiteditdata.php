<?php
include_once('database.php');

$connect = mysqli_connect($servername, $username, $password, $dbname);

$id_alpro = mysqli_real_escape_string($connect, $_POST['id_alpro']);
$id_panel = mysqli_real_escape_string($connect, $_POST['id_panel']);
$id_port = mysqli_real_escape_string($connect, $_POST['id_port']);
$panel_in = mysqli_real_escape_string($connect, $_POST['panel_in']);
// $panel_out_splitter = mysqli_real_escape_string($connect, $_POST['panel_out_splitter']);
// $panel_out_odp = mysqli_real_escape_string($connect, $_POST['panel_out_odp']);
$distrib = mysqli_real_escape_string($connect, $_POST['distrib']);

$query = " UPDATE tb_feeder SET id_alpro = '".$id_alpro."' , id_panel = '".$id_panel."' , id_port = '".$id_port."' , panel_in = '".$panel_in."' ,";

if (isset($_POST["panel_out_splitter"])) {
	if ($_POST["panel_out_splitter"] !== "") {
		$query .= " panel_out_splitter = '".mysqli_real_escape_string($connect, $_POST["panel_out_splitter"])."',";
	}else{
		$query .= " panel_out_splitter = NULL,";
	}
}else{
	$query .= " panel_out_splitter = NULL,";
}

if (isset($_POST["panel_out_odp"])) {
	if ($_POST["panel_out_odp"] !== "") {
		$query .= " panel_out_odp = '".mysqli_real_escape_string($connect, $_POST["panel_out_odp"])."',";
	}else{
		$query .= " panel_out_odp = NULL,";
	}
}else{
	$query .= " panel_out_odp = NULL,";
}

$query .= " distrib = '".$distrib."' WHERE id = ".$_POST['id_record']."";

// echo $query;
if(mysqli_query($connect, $query))
{
	echo 'Data Updated';
}else{
	echo mysqli_error($connect);
}
?>