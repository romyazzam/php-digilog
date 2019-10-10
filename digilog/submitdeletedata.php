<?php
include_once('database.php');

$connect = mysqli_connect($servername, $username, $password, $dbname);

$query = "DELETE FROM ".$_POST['tabel']." WHERE id = ".mysqli_real_escape_string($connect, $_POST['id_record']);


if(mysqli_query($connect, $query))
{
	echo 'Data Deleted';
}else{
	echo mysqli_error($connect);
}