<?php
include_once('database.php');

$connect = mysqli_connect($servername, $username, $password, $dbname);
if(isset($_POST["id"]))
{
	$value = mysqli_real_escape_string($connect, $_POST["value"]);
	$query = "UPDATE tb_feeder SET ".$_POST["column_name"]."='".$value."' WHERE id = '".$_POST["id"]."'";
	if(mysqli_query($connect, $query))
	{
		echo 'Data Updated';
	}
}
?>