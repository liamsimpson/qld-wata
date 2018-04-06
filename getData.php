<?php
include('connectDB.php');
	
$sql  = 'SELECT * FROM `expressions`';


$result = mysqli_query( $conn, $sql );

$rows = array();

while($r = mysql_fetch_assoc(result)) {
	$rows[] = $r;
}


echo json_encode($json_array);
        
?>