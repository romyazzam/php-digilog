<?php
//fetch_lb.php
include_once('database.php');
$connect = mysqli_connect($servername, $username, $password, $dbname);
$columns = array('sto', 'alpro', 'nama', 'nik', 'loker', 'aktifitas','hasil','tanggal', 'file');

$query = "SELECT *,sto.label,logbook.id FROM logbook INNER JOIN sto ON sto.id = logbook.sto";

$result = mysqli_query($connect, $query);
// $result = mysqli_query($connect, $query . $query1);

$data = array();

while($row = mysqli_fetch_object($result))
{
	array_push($data, $row);
}

function get_all_data($connect)
{
	$query = "SELECT * FROM logbook";
	$result = mysqli_query($connect, $query);
	return mysqli_num_rows($result);
}

$output = array(
	"data"    => $data,
);

//echo "<pre>";
//echo var_dump($output);

echo json_encode($output);

?>