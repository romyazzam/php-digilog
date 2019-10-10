<?php
include_once('database.php');

	//connection
$mysqli = new mysqli($servername, $username, $password, $dbname);

if ($mysqli->connect_error) {
	die("Connection failed: " . $mysqli->connect_error);
} 

$query_get_record = "
SELECT a.id ,a.id_olt, a.id_num, a.id_row, a.id_col, a.port, a.ftm
FROM tb_olt a
LEFT JOIN olt b
ON a.id_olt = b.id
WHERE a.id_row = ".$acekolt."
AND b.label = '".$_GET['olt']."' 
ORDER BY id ";

if ($result = $mysqli->query($query_get_record)) {
		$j = 1; // kolom
		while ($obj = $result->fetch_object() OR $j <= 17){
			
			if (isset($obj->port) && $obj->id_col == 2 && $obj->id_num == 2){
				if (empty($obj->port)){
					echo"<td>";
				}else{
					echo "<td style='background-color: #a4bfea; solid white; border-left-width: 10px; font-size: 10px; line-height: 2.0 ;' data-toggle='modal' data-target='#modalEditDataOLT' onclick='editDataOLT(".$obj->id.")'>";  
				}
				echo "<div>
				<h4 style='background-color: #334456; color: white; width: 75px;'>".$obj->port."</h4>
				</div>
				</td>";

				echo "<td style='background-color: #a4bfea; border-right-width: 10px; solid white; font-size: 10px; line-height: 2.0 ;' data-toggle='modal' data-target='#modalEditDataOLT' onclick='editDataOLT(".$obj->id.")'>
				<div style='color: #334456; width: 125px; '><strong>".$obj->ftm."</strong></div>";
				echo "</td>";

			}elseif (isset($obj->port) && $obj->id_num == 1) {
				echo "<td style='background-color: #212529; color: white;'>EMPTY";
				echo "</td>";
			}
			elseif (isset($obj->port) && $j == $obj->id_col) {
				if (empty($obj->port)) {
					echo"<td>";
				}else{
					echo "<td style='background-color: #a4bfea; solid white; border-right-width: 10px; font-size: 10px; line-height: 2.0 ;' data-toggle='modal' data-target='#modalEditDataOLT' onclick='editDataOLT(".$obj->id.")'>";
				}
				echo "<div><h4 style='background-color: #334456; color: white; width: 125px;'>".$obj->port."</h4></div>";
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