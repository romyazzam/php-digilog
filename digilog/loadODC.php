<?php
include_once('database.php');

$conn = mysqli_connect($servername, $username, $password, $dbname);

$id_sto = addslashes($_POST['id_sto_ajax']);

if($id_sto == 0){
	echo '<option value="0">Pilih ODC</option>';
}else{
	$sql = "SELECT id, label FROM odc WHERE id_sto = '".$id_sto."'";

	$result = $conn->query($sql);
	
	if ($result->num_rows > 0) {  
		while($row = $result->fetch_assoc()) {
			echo '<option value="'.$row["label"].'">'.$row["label"].'</option>';
		}
	}
}

$conn->close();
?>