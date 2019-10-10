<?php
include_once('database.php');

	//connection
$mysqli = new mysqli($servername, $username, $password, $dbname);

if ($mysqli->connect_error) {
	die("Connection failed: " . $mysqli->connect_error);
} 

$query_get_record = "
SELECT a.id, a.id_kolom, a.id_panel, a.id_row, a.id_col, a.nm_ftm, a.port , a.odc , a.core , a.ftm, b.color
FROM tb_ftm a
LEFT JOIN alpro b
ON a.odc = b.label 
LEFT JOIN tb_panel c
ON a.id_panel = c.id_panel
WHERE a.id_row = ".$acekftm." 
AND c.name = '".$_GET['tb_panel']."'
AND a.id_kolom = '".$_GET['tb_ftm']."'
AND a.nm_ftm = '".$_GET['alpro']."'
ORDER BY id ";

if ($result = $mysqli->query($query_get_record)) {
		$j = 1; // kolom
		$b = 0;
		if ($_GET['tb_ftm'] == 1 ){
			$b = 24;
		} 
		else if ($_GET['tb_ftm'] == 2 ){
			$b = 12;
		}

		while ($obj = $result->fetch_object() OR $j <= $b) {
			
			if (isset($obj->port) && $j == $obj->id_col) {
				echo "<td style='background-color:".$obj->color."; solid white; font-size: 10px; line-height: 2.0 ;' data-toggle='modal' data-target='#modalEditDataFTM' onclick='editDataFTM(".$obj->id.")'>";
				echo "<div><h4 style='background-color: #334456; color: white; width: 125px;'>".$obj->port."</h4></div>";
				echo "<div style='color: #334456;'><strong>".$obj->odc."</strong></div>";
				echo "<div style='color: #334456;'><strong>".$obj->core."</strong></div>";
				echo "<div style='color: #334456;'><strong>".$obj->ftm."</strong></div>";
				echo "</td>";
			}else{
				echo "<td></td>";
			}
			$j++;
		}
		$j=0;

		$result->close();
	}

	$mysqli->close();
	?>
