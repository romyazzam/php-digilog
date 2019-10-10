<?php
include_once('database.php');

$connect = mysqli_connect($servername, $username, $password, $dbname);


$id_olt = mysqli_real_escape_string($connect, $_POST['id_olt']);
$id_num = mysqli_real_escape_string($connect, $_POST['id_num']);
$port = mysqli_real_escape_string($connect, $_POST['port']);
$ftm = mysqli_real_escape_string($connect, $_POST['ftm']);

$query = " UPDATE tb_olt SET id_olt = '".$id_olt."' , id_num = '".$id_num."' , port = '".$port."' , ftm = '".$ftm."' WHERE id = ".$_POST['id']."";

// echo $query;
if(mysqli_query($connect, $query))
{
	echo 'Data Updated';
}else{
	echo mysqli_error($connect);
}
?>