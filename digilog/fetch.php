<?php
//fetch.php
include_once('database.php');
$connect = mysqli_connect($servername, $username, $password, $dbname);
$columns = array('id_alpro', 'id_panel', 'id_port', 'panel_in', 'panel_out_splitter', 'panel_out_odp', 'distrib');

$query = "SELECT tb_feeder.* FROM tb_feeder LEFT JOIN alpro ON tb_feeder.id_alpro = alpro.id WHERE alpro.label = '".$_GET['alpro']."'";

// if(isset($_POST["search"]["value"]))
// {
// 	$query .= ' WHERE id_panel LIKE "%'.$_POST["search"]["value"].'%" OR id_port LIKE "%'.$_POST["search"]["value"].'%"  OR panel_in LIKE "%'.$_POST["search"]["value"].'%" OR panel_out_splitter LIKE "%'.$_POST["search"]["value"].'%" OR panel_out_odp LIKE "%'.$_POST["search"]["value"].'%" OR distrib LIKE "%'.$_POST["search"]["value"].'%" ';
// }

// if(isset($_POST["order"]))
// {
// 	$query .= ' ORDER BY '.$columns[$_POST['order']['0']['column']].' '.$_POST['order']['0']['dir'].' 
// 	';
// }
// else
// {
// 	$query .= ' ORDER BY id ASC ';
// }

// $query1 = '';

// if($_POST["length"] != -1)
// {
// 	$query1 = ' LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
// }

// $number_filter_row = mysqli_num_rows(mysqli_query($connect, $query));

$result = mysqli_query($connect, $query);
// $result = mysqli_query($connect, $query . $query1);

$data = array();

while($row = mysqli_fetch_object($result))
{
	array_push($data, $row);
}

function get_all_data($connect)
{
	$query = "SELECT * FROM tb_feeder";
	$result = mysqli_query($connect, $query);
	return mysqli_num_rows($result);
}

$output = array(
	"data"    => $data,
);

echo json_encode($output);

?>