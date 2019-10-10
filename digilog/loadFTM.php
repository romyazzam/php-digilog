<?php
include_once('database.php');

$conn = mysqli_connect($servername, $username, $password, $dbname);

$id_ftm = addslashes($_POST['id_ftm_ajax']);

if($id_ftm == 0){
	echo '<option value="0">Pilih FTM</option>';
}else{
	$sql = "SELECT id, label FROM ftm WHERE id_sto = '".$id_ftm."'";

	$result = $conn->query($sql);
	
	if ($result->num_rows > 0) {  
		while($row = $result->fetch_assoc()) {
			echo '<option value="'.$row["label"].'">'.$row["label"].'</option>';
		}
	}
}

$conn->close();
?>