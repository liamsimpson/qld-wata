<?php
include_once('cridentials.php');

 
 $host = 'localhost';
 $UN = UN;
 $PW = PW;
 $DB = 'interests';
 $conn = new mysqli($host, $UN, $PW, $DB);
 /*try {
 $_SESSION['DBlink'] = new PDO('mysql:host=' . $host . ';dbname=' . $DB . ';charset=utf8', $UN, $PW);
 $_SESSION['DBlink']->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 $_SESSION['DBlink']->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
 } catch (PDOException $e) {
 logDBerror($e->getMessage());
 }*/
?>
