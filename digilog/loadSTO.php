<?php
include_once('database.php');

$conn = mysqli_connect($servername, $username, $password, $dbname);

$id_sto = mysqli_escape_string($_GET['id']);
$id_ftm = mysqli_escape_string($_GET['id']);

$sql = "SELECT id, label FROM sto";
$result = $conn->query($sql);

if ($result->num_rows > 0) {  
	while($row = $result->fetch_assoc()) {
		echo '<option value="'.$row["id"].'">'.$row["label"].'</option>';
	}
}

// echo "<pre>"; 
// var_dump($id_sto); 

$conn->close();
?>