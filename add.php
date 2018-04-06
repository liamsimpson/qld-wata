<?php
include('connectDB.php');
$dateAdded = date("Y-m-d H:i:s");

try {
	
	$stmt = $conn->prepare("INSERT INTO expressions (name, email, phNum) VALUES (?, ?, ?)");
	$stmt->bind_param("ssi", $name, $email, $phnum);
	echo '<script>console.log("2")</script>';

	$name=$_POST['name'];
	$email=$_POST['email'];
	$phnum=$_POST['number'];

	$stmt->execute();


} catch (PDOException $e) {
	$conn->close();
	logDBerror($e->getMessage());
	exit();
}

$conn->close();
header('Location: index.html');
?>