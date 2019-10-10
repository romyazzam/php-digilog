<?php
include_once('database.php');

	//connection
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

$sql_in = "SELECT a.id_panel, a.name,
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
MAX(CASE WHEN b.id_port = 12 THEN c.color ELSE NULL END) cport12,
MAX(CASE WHEN b.id_port = 1 THEN b.id ELSE NULL END) rec1,
MAX(CASE WHEN b.id_port = 2 THEN b.id ELSE NULL END) rec2,
MAX(CASE WHEN b.id_port = 3 THEN b.id ELSE NULL END) rec3,
MAX(CASE WHEN b.id_port = 4 THEN b.id ELSE NULL END) rec4,
MAX(CASE WHEN b.id_port = 5 THEN b.id ELSE NULL END) rec5,
MAX(CASE WHEN b.id_port = 6 THEN b.id ELSE NULL END) rec6,
MAX(CASE WHEN b.id_port = 7 THEN b.id ELSE NULL END) rec7,
MAX(CASE WHEN b.id_port = 8 THEN b.id ELSE NULL END) rec8,
MAX(CASE WHEN b.id_port = 9 THEN b.id ELSE NULL END) rec9,
MAX(CASE WHEN b.id_port = 10 THEN b.id ELSE NULL END) rec10,
MAX(CASE WHEN b.id_port = 11 THEN b.id ELSE NULL END) rec11,
MAX(CASE WHEN b.id_port = 12 THEN b.id ELSE NULL END) rec12

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
MAX(CASE WHEN b.id_port = 1 THEN b.id ELSE NULL END) rec1,
MAX(CASE WHEN b.id_port = 2 THEN b.id ELSE NULL END) rec2,
MAX(CASE WHEN b.id_port = 3 THEN b.id ELSE NULL END) rec3,
MAX(CASE WHEN b.id_port = 4 THEN b.id ELSE NULL END) rec4,
MAX(CASE WHEN b.id_port = 5 THEN b.id ELSE NULL END) rec5,
MAX(CASE WHEN b.id_port = 6 THEN b.id ELSE NULL END) rec6,
MAX(CASE WHEN b.id_port = 7 THEN b.id ELSE NULL END) rec7,
MAX(CASE WHEN b.id_port = 8 THEN b.id ELSE NULL END) rec8,
MAX(CASE WHEN b.id_port = 9 THEN b.id ELSE NULL END) rec9,
MAX(CASE WHEN b.id_port = 10 THEN b.id ELSE NULL END) rec10,
MAX(CASE WHEN b.id_port = 11 THEN b.id ELSE NULL END) rec11,
MAX(CASE WHEN b.id_port = 12 THEN b.id ELSE NULL END) rec12,
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
	echo "<td style='border-bottom: 20px solid white;'><div></div></td>" ;
	echo "<td style='border-bottom: 20px solid white;'><div></div></td>" ;
	echo "<td style='border-bottom: 20px solid white;'><div></div></td>" ;
	echo "<td style='border-bottom: 20px solid white;'><div></div></td>" ;
	echo "<td style='border-bottom: 20px solid white;'><div></div></td>" ;
	echo "<td style='border-bottom: 20px solid white;'><div></div></td>" ;
	echo "<td style='border-bottom: 20px solid white;'><div></div></td>" ;
	echo "<td style='border-bottom: 20px solid white;'><div></div></td>" ;
	echo "<td style='border-bottom: 20px solid white;'><div></div></td>" ;
	echo "<td style='border-bottom: 20px solid white;'><div></div></td>" ;
	echo "<td style='border-bottom: 20px solid white;'><div></div></td>" ;
	echo "<td style='border-bottom: 20px solid white;'><div></div></td>" ;
	echo "<td style='border-bottom: 20px solid white;'><div></div></td>" ;
}

$result_out  = mysqli_fetch_object($result_out);

// echo "<pre>";
// var_dump($result_out);
// echo "<pre>";
// var_dump($result_out);
// echo "</pre>";

foreach ($result_in as $row) {	
//PORT1
	echo "<td style='background-color: ".$row['cport1']."; border-bottom: 20px solid white; padding-bottom: 0px; padding-left: 0px; padding-right: 0px; font-size: 11px; line-height: 1.5;' data-toggle=modal data-target='#modalEditData' onclick='editData(".$row['rec1'].")' >
	<div><h4 style='color: #334456;'>".$row['port1']."</h4></div>";
	if (strpos($result_out->port1,'SPL')!== false or empty($result_out->port1)) {
		echo "<div style='background-color: ".$result_out->cport1."; padding-top: 10px; height: 40px; width: 75px;'>".$result_out->port1."</div></td>";

	}elseif(strpos($result_out->port1,'STUB')!== false or empty($result_out->port1)){
		echo "<div style='background-color: ".$result_out->cport1."; padding-top: 10px; height: 40px; width: 75px;'>".$result_out->port1."</div></td>";

	}else{
		echo "<div style='background-color: #780094; color: white;	 padding-top: 10px; height: 40px; width: 75px;'>".$result_out->port1."</div></td>";
	}

//PORT2
	echo "<td style='background-color: ".$row['cport2']."; border-bottom: 20px solid white; padding-bottom: 0px; padding-left: 0px; padding-right: 0px; font-size: 11px; line-height: 1.5;' data-toggle=modal data-target='#modalEditData' onclick='editData(".$row['rec2'].")'>
	<div><h4 style='color: #334456;'>".$row['port2']."</h4></div>";
	if (strpos($result_out->port2,'SPL')!== false or empty($result_out->port2)) {
		echo "<div style='background-color: ".$result_out->cport2."; padding-top: 10px; height: 40px; width: 75px;'>".$result_out->port2."</div></td>";

	}elseif(strpos($result_out->port2,'STUB')!== false or empty($result_out->port2)){
		echo "<div style='background-color: ".$result_out->cport2."; padding-top: 10px; height: 40px; width: 75px;'>".$result_out->port2."</div></td>";

	}else{
		echo "<div style='background-color: #780094; color: white;	 padding-top: 10px; height: 40px; width: 75px;'>".$result_out->port2."</div></td>";
	}

//PORT3
	echo "<td style='background-color: ".$row['cport3']."; border-bottom: 20px solid white; padding-bottom: 0px; padding-left: 0px; padding-right: 0px; font-size: 11px; line-height: 1.5;' data-toggle=modal data-target='#modalEditData' onclick='editData(".$row['rec3'].")'>
	<div><h4 style='color: #334456;'>".$row['port3']."</h4></div>";
	if (strpos($result_out->port3,'SPL')!== false or empty($result_out->port3)) {
		echo "<div style='background-color: ".$result_out->cport3."; padding-top: 10px; height: 40px; width: 75px;'>".$result_out->port3."</div></td>";

	}elseif(strpos($result_out->port3,'STUB')!== false or empty($result_out->port3)){
		echo "<div style='background-color: ".$result_out->cport3."; padding-top: 10px; height: 40px; width: 75px;'>".$result_out->port3."</div></td>";

	}else{
		echo "<div style='background-color: #780094; color: white;	 padding-top: 10px; height: 40px; width: 75px;'>".$result_out->port3."</div></td>";
	}

//PORT4
	echo "<td style='background-color: ".$row['cport4']."; border-bottom: 20px solid white; padding-bottom: 0px; padding-left: 0px; padding-right: 0px; font-size: 11px; line-height: 1.5;' data-toggle=modal data-target='#modalEditData' onclick='editData(".$row['rec4'].")'>
	<div><h4 style='color: #334456;'>".$row['port4']."</h4></div>";
	if (strpos($result_out->port4,'SPL')!== false or empty($result_out->port4)) {
		echo "<div style='background-color: ".$result_out->cport4."; padding-top: 10px; height: 40px; width: 75px;'>".$result_out->port4."</div></td>";

	}elseif(strpos($result_out->port4,'STUB')!== false or empty($result_out->port4)){
		echo "<div style='background-color: ".$result_out->cport4."; padding-top: 10px; height: 40px; width: 75px;'>".$result_out->port4."</div></td>";

	}else{
		echo "<div style='background-color: #780094; color: white;	 padding-top: 10px; height: 40px; width: 75px;'>".$result_out->port4."</div></td>";
	}

//PORT5
	echo "<td style='background-color: ".$row['cport5']."; border-bottom: 20px solid white; padding-bottom: 0px; padding-left: 0px; padding-right: 0px; font-size: 11px; line-height: 1.5;' data-toggle=modal data-target='#modalEditData' onclick='editData(".$row['rec5'].")'>
	<div><h4 style='color: #334456;'>".$row['port5']."</h4></div>";
	if (strpos($result_out->port5,'SPL')!== false or empty($result_out->port5)) {
		echo "<div style='background-color: ".$result_out->cport5."; padding-top: 10px; height: 40px; width: 75px;'>".$result_out->port5."</div></td>";

	}elseif(strpos($result_out->port5,'STUB')!== false or empty($result_out->port5)){
		echo "<div style='background-color: ".$result_out->cport5."; padding-top: 10px; height: 40px; width: 75px;'>".$result_out->port5."</div></td>";

	}else{
		echo "<div style='background-color: #780094; color: white;	 padding-top: 10px; height: 40px; width: 75px;'>".$result_out->port5."</div></td>";
	}

//PORT6
	echo "<td style='background-color: ".$row['cport6']."; border-bottom: 20px solid white; padding-bottom: 0px; padding-left: 0px; padding-right: 0px; font-size: 11px; line-height: 1.5;' data-toggle=modal data-target='#modalEditData' onclick='editData(".$row['rec6'].")'>
	<div><h4 style='color: #334456;'>".$row['port6']."</h4></div>";
	if (strpos($result_out->port6,'SPL')!== false or empty($result_out->port6)) {
		echo "<div style='background-color: ".$result_out->cport6."; padding-top: 10px; height: 40px; width: 75px;'>".$result_out->port6."</div></td>";

	}elseif(strpos($result_out->port6,'STUB')!== false or empty($result_out->port6)){
		echo "<div style='background-color: ".$result_out->cport6."; padding-top: 10px; height: 40px; width: 75px;'>".$result_out->port6."</div></td>";

	}else{
		echo "<div style='background-color: #780094; color: white;	 padding-top: 10px; height: 40px; width: 75px;'>".$result_out->port6."</div></td>";
	}

//PORT7
	echo "<td style='background-color: ".$row['cport7']."; border-bottom: 20px solid white; padding-bottom: 0px; padding-left: 0px; padding-right: 0px; font-size: 11px; line-height: 1.5;' data-toggle=modal data-target='#modalEditData' onclick='editData(".$row['rec7'].")'>
	<div><h4 style='color: #334456;'>".$row['port7']."</h4></div>";
	if (strpos($result_out->port7,'SPL')!== false or empty($result_out->port7)) {
		echo "<div style='background-color: ".$result_out->cport7."; padding-top: 10px; height: 40px; width: 75px;'>".$result_out->port7."</div></td>";

	}elseif(strpos($result_out->port7,'STUB')!== false or empty($result_out->port7)){
		echo "<div style='background-color: ".$result_out->cport7."; padding-top: 10px; height: 40px; width: 75px;'>".$result_out->port7."</div></td>";

	}else{
		echo "<div style='background-color: #780094; color: white;	 padding-top: 10px; height: 40px; width: 75px;'>".$result_out->port7."</div></td>";
	}

//PORT8
	echo "<td style='background-color: ".$row['cport8']."; border-bottom: 20px solid white; padding-bottom: 0px; padding-left: 0px; padding-right: 0px; font-size: 11px; line-height: 1.5;' data-toggle=modal data-target='#modalEditData' onclick='editData(".$row['rec8'].")'>
	<div><h4 style='color: #334456;'>".$row['port8']."</h4></div>";
	if (strpos($result_out->port8,'SPL')!== false or empty($result_out->port8)) {
		echo "<div style='background-color: ".$result_out->cport8."; padding-top: 10px; height: 40px; width: 75px;'>".$result_out->port8."</div></td>";

	}elseif(strpos($result_out->port8,'STUB')!== false or empty($result_out->port8)){
		echo "<div style='background-color: ".$result_out->cport8."; padding-top: 10px; height: 40px; width: 75px;'>".$result_out->port8."</div></td>";

	}else{
		echo "<div style='background-color: #780094; color: white;	 padding-top: 10px; height: 40px; width: 75px;'>".$result_out->port8."</div></td>";
	}

//PORT9
	echo "<td style='background-color: ".$row['cport9']."; border-bottom: 20px solid white; padding-bottom: 0px; padding-left: 0px; padding-right: 0px; font-size: 11px; line-height: 1.5;' data-toggle=modal data-target='#modalEditData' onclick='editData(".$row['rec9'].")'>
	<div><h4 style='color: #334456;'>".$row['port9']."</h4></div>";
	if (strpos($result_out->port9,'SPL')!== false or empty($result_out->port9)) {
		echo "<div style='background-color: ".$result_out->cport9."; padding-top: 10px; height: 40px; width: 75px;'>".$result_out->port9."</div></td>";

	}elseif(strpos($result_out->port9,'STUB')!== false or empty($result_out->port9)){
		echo "<div style='background-color: ".$result_out->cport9."; padding-top: 10px; height: 40px; width: 75px;'>".$result_out->port9."</div></td>";

	}else{
		echo "<div style='background-color: #780094; color: white;	 padding-top: 10px; height: 40px; width: 75px;'>".$result_out->port9."</div></td>";
	}

//PORT10
	echo "<td style='background-color: ".$row['cport10']."; border-bottom: 20px solid white; padding-bottom: 0px; padding-left: 0px; padding-right: 0px; font-size: 11px; line-height: 1.5;' data-toggle=modal data-target='#modalEditData' onclick='editData(".$row['rec10'].")'>
	<div><h4 style='color: #334456;'>".$row['port10']."</h4></div>";
	if (strpos($result_out->port10,'SPL')!== false or empty($result_out->port10)) {
		echo "<div style='background-color: ".$result_out->cport10."; padding-top: 10px; height: 40px; width: 75px;'>".$result_out->port10."</div></td>";

	}elseif(strpos($result_out->port10,'STUB')!== false or empty($result_out->port10)){
		echo "<div style='background-color: ".$result_out->cport10."; padding-top: 10px; height: 40px; width: 75px;'>".$result_out->port10."</div></td>";

	}else{
		echo "<div style='background-color: #780094; color: white;	 padding-top: 10px; height: 40px; width: 75px;'>".$result_out->port10."</div></td>";
	}

//PORT11
	echo "<td style='background-color: ".$row['cport11']."; border-bottom: 20px solid white; padding-bottom: 0px; padding-left: 0px; padding-right: 0px; font-size: 11px; line-height: 1.5;' data-toggle=modal data-target='#modalEditData' onclick='editData(".$row['rec11'].")'>
	<div><h4 style='color: #334456;'>".$row['port11']."</h4></div>";
	if (strpos($result_out->port11,'SPL')!== false or empty($result_out->port11)) {
		echo "<div style='background-color: ".$result_out->cport11."; padding-top: 10px; height: 40px; width: 75px;'>".$result_out->port11."</div></td>";

	}elseif(strpos($result_out->port11,'STUB')!== false or empty($result_out->port11)){
		echo "<div style='background-color: ".$result_out->cport11."; padding-top: 10px; height: 40px; width: 75px;'>".$result_out->port11."</div></td>";

	}else{
		echo "<div style='background-color: #780094; color: white;	 padding-top: 10px; height: 40px; width: 75px;'>".$result_out->port11."</div></td>";
	}


//PORT12
	echo "<td style='background-color: ".$row['cport12']."; border-bottom: 20px solid white; padding-bottom: 0px; padding-left: 0px; padding-right: 0px; font-size: 11px; line-height: 1.5;' data-toggle='modal' data-target='#modalEditData' onclick='editData(".$row['rec12'].")'>
	<div><h4 style='color: #334456;'>".$row['port12']."</h4></div>";
	if (strpos($result_out->port12,'SPL')!== false or empty($result_out->port12)) {
		echo "<div style='background-color: ".$result_out->cport12."; padding-top: 10px; height: 40px; width: 75px;'>".$result_out->port12."</div></td>";

	}elseif(strpos($result_out->port12,'STUB')!== false or empty($result_out->port12)){
		echo "<div style='background-color: ".$result_out->cport12."; padding-top: 10px; height: 40px; width: 75px;'>".$result_out->port12."</div></td>";

	}else{
		echo "<div style='background-color: #780094; color: white;	 padding-top: 10px; height: 40px; width: 75px;'>".$result_out->port12."</div></td>";
	}

	echo "<td style='border-bottom: 20px solid white; padding-top: 0px; padding-bottom: 0px; padding-left: 0px; padding-right: 0px;'>
	<div></div><div style='background-color: ".$result_out->color."; height: 78px; width: 110px;'>
	<h3 style='color: white; text-shadow: -1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000, 1px 1px 0 #000; text-align: center; padding-top: 25px;'>".$result_out->distrib."</h3>
	</div></td>";

}

$conn->close();
?>
