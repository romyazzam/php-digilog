<?php 
include_once('../database.php');

$connect = mysqli_connect($servername, $username, $password, $dbname);

$sto = mysqli_real_escape_string($connect, $_POST['sto']);
$alpro = mysqli_real_escape_string($connect, $_POST['alpro']); 
$nama = mysqli_real_escape_string($connect, $_POST['nama']);
$nik = mysqli_real_escape_string($connect, $_POST['nik']);
$loker = mysqli_real_escape_string($connect, $_POST['loker']);
$aktifitas = mysqli_real_escape_string($connect, $_POST['aktifitas']);
$hasil = mysqli_real_escape_string($connect, $_POST['hasil']);


$target_dir = "../uploads/before/";
$target_dirf = "../uploads/after/";
$target_file = $target_dir . basename($_FILES["file"]["name"]);
$target_file2 = $target_dirf . basename($_FILES["file_after"]["name"]);
$uploadOk = 1;

//file
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
$check = getimagesize($_FILES["file"]["tmp_name"]);
if($check !== false) {
	echo "File is an image - " . $check["mime"] . ".";
	$uploadOk = 1;
} else {
	echo "<script>
			alert('Error, file not image ');
			window.location.href='../logbook.php';
		</script>";
	$uploadOk = 0;
}
if (file_exists($target_file)) {
	echo "<script>
			alert('Error, File already exists');
			window.location.href='../logbook.php';
		</script>";
	$uploadOk = 0;
}
if ($_FILES["file"]["size"] > 15000000) {
	echo "<script>
			alert('Error, file max 15mb');
			window.location.href='../logbook.php';
		</script>";

	$uploadOk = 0;
}
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
	echo "<script>
			alert('Error, File not image ');
			window.location.href='../logbook.php';
		</script>";
	$uploadOk = 0;
}

// file_after
$imageFileType2 = strtolower(pathinfo($target_file2,PATHINFO_EXTENSION));
$check2 = getimagesize($_FILES["file_after"]["tmp_name"]);
if($check2 !== false) {
	echo "File is an image - " . $check2["mime"] . ".";
	$uploadOk = 1;
} else {
	echo "<script>
			alert('Error, file not image ');
			window.location.href='../logbook.php';
		</script>";
	$uploadOk = 0;
}
if (file_exists($target_file2)) {
	echo "<script>
			alert('Error, File already exists');
			window.location.href='../logbook.php';
		</script>";
	$uploadOk = 0;
}
if ($_FILES["file_after"]["size"] > 1000000) {
	echo "<script>
			alert('Error, file max 1mb');
			window.location.href='../logbook.php';
		</script>";

	$uploadOk = 0;
}
if($imageFileType2 != "jpg" && $imageFileType2 != "png" && $imageFileType2 != "jpeg" && $imageFileType2 != "gif" ) {
	echo "<script>
			alert('Error, File not image ');
			window.location.href='../logbook.php';
		</script>";
	$uploadOk = 0;
}

// upload
if ($uploadOk == 0) {
	echo "<script>
			alert('Error, file not upload ');
			window.location.href='../logbook.php';
		</script>";
} else {
	if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file) and move_uploaded_file($_FILES["file_after"]["tmp_name"], $target_file2)) {
		echo "The file ". basename( $_FILES["file"]["name"]). " has been uploaded.</br>";
		echo "The file after ". basename( $_FILES["file_after"]["name"]). " has been uploaded.</br>";
		$query = "
		INSERT INTO logbook(sto, alpro, nama, nik, loker, aktifitas, hasil, tanggal, file, file_after ) 
		VALUES ('$sto', '$alpro', '$nama', '$nik', '$loker', '$aktifitas', '$hasil', '".date("Y-m-d")."', '".$_FILES["file"]["name"]."', '".$_FILES["file_after"]["name"]."')";

		if(mysqli_query($connect, $query))
		{
			// echo 'Data Insert';
			$query = "SELECT label FROM sto WHERE id = ".$_POST['sto'];
			$query = mysqli_query($connect,$query);
			$row = mysqli_fetch_assoc($query);
 			echo '<script type="text/javascript">'; 
        	echo 'alert("Data Saved");'; 
        	echo 'window.location= "../tblogbook.php"';
        	echo '</script>';
		}else{
 			echo '<script type="text/javascript">'; 
        	echo 'alert('.mysql_error($connect).');'; 
        	echo 'window.location= "../logbook.php"';
        	echo '</script>';
		}
	echo var_dump();	
	}else{
 			echo '<script type="text/javascript">'; 
        	echo 'alert("Error upload");'; 
        	echo 'window.location= "../logbook.php"';
        	echo '</script>';
			}
		}
?>