<?php
include_once('database.php');

$connect = mysqli_connect($servername, $username, $password, $dbname);
if(isset($_POST["id"]))
{
	$query = "DELETE FROM tb_feeder WHERE id = '".$_POST["id"]."'";
	if(mysqli_query($connect, $query))
	{
		echo 'Data Deleted';
	}
}
?>
