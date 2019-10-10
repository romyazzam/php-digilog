<?php
include_once('database.php');

$connect = mysqli_connect($servername, $username, $password, $dbname);

$id_kolom = mysqli_real_escape_string($connect, $_POST['id_kolom']);
$id_panel = mysqli_real_escape_string($connect, $_POST['id_panel']);
$nm_ftm = mysqli_real_escape_string($connect, $_POST['nm_ftm']);
$port = mysqli_real_escape_string($connect, $_POST['port']);
$odc = mysqli_real_escape_string($connect, $_POST['odc']);
$core = mysqli_real_escape_string($connect, $_POST['core']);
$ftm = mysqli_real_escape_string($connect, $_POST['ftm']);

$query = " UPDATE tb_ftm SET id_kolom = '".$id_kolom."' , id_panel = '".$id_panel."' , nm_ftm = '".$nm_ftm."' , port = '".$port."' , odc = '".$odc."' , core = '".$core."', ftm = '".$ftm."' WHERE id = ".$_POST['id']."";

// echo $query;
if(mysqli_query($connect, $query))
{
	echo 'Data Updated';
}else{
	echo mysqli_error($connect);
}
?>