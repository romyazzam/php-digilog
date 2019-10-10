<?php
include_once('database.php');

$connect = mysqli_connect($servername, $username, $password, $dbname);
$id_record = $_GET['id_record'];
$tabel = $_GET['tabel'];
$query = "SELECT * FROM $tabel WHERE id = $id_record";
$query = mysqli_query($connect, $query);
$query = mysqli_fetch_object($query);
echo json_encode($query);
?>
