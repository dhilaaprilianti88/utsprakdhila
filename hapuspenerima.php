<?php 
	include 'config.php';

	$id = $_GET['id'];

	$sql = 'DELETE FROM penerima WHERE id = "'.$id.'"';

	$result = mysqli_query($conn, $sql);

	if ($result) {
		header('Location: tables.php');
	} else {
		echo "Deleted Failed";
	}
 ?>