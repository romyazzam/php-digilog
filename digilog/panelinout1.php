<?php
include_once('database.php');

	//connection
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

$sql_in = "SELECT  a.id_panel, a.name,
MAX(CASE WHEN b.id_port = 1 THEN b.panel_in ELSE NULL END) port1,
MAX(CASE WHEN b.id_port = 2 THEN b.panel_in ELSE NULL END) port2,
MAX(CASE WHEN b.id_port = 3 THEN b.panel_in ELSE NULL END) port3,
MAX(CASE WHEN b.id_port = 4 THEN b.panel_in ELSE NULL END) port4,
MAX(CASE WHEN b.id_port = 5 THEN b.panel_in ELSE NULL END) port5,
MAX(CASE WHEN b.id_port = 6 THEN b.panel_in ELSE NULL END) port6,
MAX(CASE WHEN b.id_port = 7 THEN b.panel_in ELSE NULL END) port7,
MAX(CASE WHEN b.id_port = 8 THEN b.panel_in ELSE NULL END) port8,
MAX(CASE WHEN b.id_port = 9 THEN b.panel_in ELSE NULL END) port9,
MAX(CASE WHEN b.id_port = 10 THEN b.panel_in ELSE NULL END) port10,
MAX(CASE WHEN b.id_port = 11 THEN b.panel_in ELSE NULL END) port11,
MAX(CASE WHEN b.id_port = 12 THEN b.panel_in ELSE NULL END) port12,
MAX(CASE WHEN b.id_port = 1 THEN c.color ELSE NULL END) cport1,
MAX(CASE WHEN b.id_port = 2 THEN c.color ELSE NULL END) cport2,
MAX(CASE WHEN b.id_port = 3 THEN c.color ELSE NULL END) cport3,
MAX(CASE WHEN b.id_port = 4 THEN c.color ELSE NULL END) cport4,
MAX(CASE WHEN b.id_port = 5 THEN c.color ELSE NULL END) cport5,
MAX(CASE WHEN b.id_port = 6 THEN c.color ELSE NULL END) cport6,
MAX(CASE WHEN b.id_port = 7 THEN c.color ELSE NULL END) cport7,
MAX(CASE WHEN b.id_port = 8 THEN c.color ELSE NULL END) cport8,
MAX(CASE WHEN b.id_port = 9 THEN c.color ELSE NULL END) cport9,
MAX(CASE WHEN b.id_port = 10 THEN c.color ELSE NULL END) cport10,
MAX(CASE WHEN b.id_port = 11 THEN c.color ELSE NULL END) cport11,
MAX(CASE WHEN b.id_port = 12 THEN c.color ELSE NULL END) cport12

FROM tb_panel a
INNER JOIN tb_feeder b
ON a.id_panel = b.id_panel
LEFT JOIN tb_colorin c
ON b.panel_in = c.name
LEFT JOIN alpro al
ON b.id_alpro = al.id
WHERE a.id_panel = ".$acek."
AND al.label = '".$_GET['alpro']."'
GROUP BY a.id_panel, a.name";

$result_in = $conn->query($sql_in);

$sql_out = "
SELECT  a.id_panel, a.name,

MAX(CASE WHEN b.id_port = 1 AND b.panel_out_splitter IS NOT NULL THEN b.panel_out_splitter WHEN  b.id_port = 1 AND b.panel_out_odp IS NOT NULL THEN b.panel_out_odp END) port1,
MAX(CASE WHEN b.id_port = 2 AND b.panel_out_splitter IS NOT NULL THEN b.panel_out_splitter WHEN  b.id_port = 2 AND b.panel_out_odp IS NOT NULL THEN b.panel_out_odp END) port2,
MAX(CASE WHEN b.id_port = 3 AND b.panel_out_splitter IS NOT NULL THEN b.panel_out_splitter WHEN  b.id_port = 3 AND b.panel_out_odp IS NOT NULL THEN b.panel_out_odp END) port3,
MAX(CASE WHEN b.id_port = 4 AND b.panel_out_splitter IS NOT NULL THEN b.panel_out_splitter WHEN  b.id_port = 4 AND b.panel_out_odp IS NOT NULL THEN b.panel_out_odp END) port4,
MAX(CASE WHEN b.id_port = 5 AND b.panel_out_splitter IS NOT NULL THEN b.panel_out_splitter WHEN  b.id_port = 5 AND b.panel_out_odp IS NOT NULL THEN b.panel_out_odp END) port5,
MAX(CASE WHEN b.id_port = 6 AND b.panel_out_splitter IS NOT NULL THEN b.panel_out_splitter WHEN  b.id_port = 6 AND b.panel_out_odp IS NOT NULL THEN b.panel_out_odp END) port6,
MAX(CASE WHEN b.id_port = 7 AND b.panel_out_splitter IS NOT NULL THEN b.panel_out_splitter WHEN  b.id_port = 7 AND b.panel_out_odp IS NOT NULL THEN b.panel_out_odp END) port7,
MAX(CASE WHEN b.id_port = 8 AND b.panel_out_splitter IS NOT NULL THEN b.panel_out_splitter WHEN  b.id_port = 8 AND b.panel_out_odp IS NOT NULL THEN b.panel_out_odp END) port8,
MAX(CASE WHEN b.id_port = 9 AND b.panel_out_splitter IS NOT NULL THEN b.panel_out_splitter WHEN  b.id_port = 9 AND b.panel_out_odp IS NOT NULL THEN b.panel_out_odp END) port9,
MAX(CASE WHEN b.id_port = 10 AND b.panel_out_splitter IS NOT NULL THEN b.panel_out_splitter WHEN b.id_port = 10 AND b.panel_out_odp IS NOT NULL THEN b.panel_out_odp END) port10,
MAX(CASE WHEN b.id_port = 11 AND b.panel_out_splitter IS NOT NULL THEN b.panel_out_splitter WHEN b.id_port = 11 AND b.panel_out_odp IS NOT NULL THEN b.panel_out_odp END) port11,
MAX(CASE WHEN b.id_port = 12 AND b.panel_out_splitter IS NOT NULL THEN b.panel_out_splitter WHEN b.id_port = 12 AND b.panel_out_odp IS NOT NULL THEN b.panel_out_odp END) port12,
MAX(CASE WHEN b.id_port = 1 THEN c.color ELSE NULL END) cport1,
MAX(CASE WHEN b.id_port = 2 THEN c.color ELSE NULL END) cport2,
MAX(CASE WHEN b.id_port = 3 THEN c.color ELSE NULL END) cport3,
MAX(CASE WHEN b.id_port = 4 THEN c.color ELSE NULL END) cport4,
MAX(CASE WHEN b.id_port = 5 THEN c.color ELSE NULL END) cport5,
MAX(CASE WHEN b.id_port = 6 THEN c.color ELSE NULL END) cport6,
MAX(CASE WHEN b.id_port = 7 THEN c.color ELSE NULL END) cport7,
MAX(CASE WHEN b.id_port = 8 THEN c.color ELSE NULL END) cport8,
MAX(CASE WHEN b.id_port = 9 THEN c.color ELSE NULL END) cport9,
MAX(CASE WHEN b.id_port = 10 THEN c.color ELSE NULL END) cport10,
MAX(CASE WHEN b.id_port = 11 THEN c.color ELSE NULL END) cport11,
MAX(CASE WHEN b.id_port = 12 THEN c.color ELSE NULL END) cport12,
b.distrib,
b.panel_out_odp,
b.panel_out_splitter,
d.color
FROM tb_panel a
INNER JOIN tb_feeder b
ON a.id_panel = b.id_panel
LEFT JOIN tb_color c
ON b.panel_out_splitter = c.name
LEFT JOIN tb_distribution d
ON d.name = b.distrib
LEFT JOIN alpro al
ON b.id_alpro = al.id
WHERE a.id_panel = '".$acek."'
AND al.label = '".$_GET["alpro"]."'
GROUP BY a.id_panel, a.name";


$result_out = $conn->query($sql_out);


if(mysqli_num_rows($result_in)==0 && mysqli_num_rows($result_out)==0){
	for ($nn=1; $nn < 13; $nn++) {
		echo "<td style='border-bottom: 20px solid white;'><div></div></td>" ;
	}
}

$result_out  = mysqli_fetch_object($result_out);

// echo "<pre>";
// var_dump($result_out);
// echo "<pre>";
// var_dump($result_out);
// echo "</pre>";

foreach ($result_in as $row) {
	for ($i=1; $i < 13; $i++) {
	//PORT
		$j="cport".$i;
		$k="port".$i;
		echo "<td style='background-color: ".$row[$j]."; border-bottom: 20px solid white; padding-bottom: 0px; padding-left: 0px; padding-right: 0px;  line-height: 1.5;' data-toggle=modal data-target=#modalEditData>
		<div><h4 style='color: #334456;'>".$row[$k]."</h4></div>";
		if (strpos($result_out->$k,'SPL')!== false or empty($result_out->$k)) {
			echo "<div style='background-color: ".$result_out->$j."; padding-top: 10px; height: 40px; width: 75px;'>".$result_out->$k."</div></td>";

		}elseif(strpos($result_out->$k,'STUB')!== false or empty($result_out->$k)){
			echo "<div style='background-color: ".$result_out->$j."; padding-top: 10px; height: 40px; width: 75px;'>".$result_out->$k."</div></td>";

		}else{
			echo "<div style='background-color: #780094; color: white;	 padding-top: 10px; height: 40px; width: 75px;'>".$result_out->$k."</div></td>";
		}
	}
}
$conn->close();
?>
