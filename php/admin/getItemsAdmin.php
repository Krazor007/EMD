<?php

	include 'connection.php';
    header("Access-Control-Allow-Origin: *");
	header("Content-Type: application/json; charset=UTF-8");
    $conn = new mysqli($host, $username, $password, $db_name);
	$result = mysqli_query($conn,"select * from products"); 
	$rows = array();
    while ($r = mysqli_fetch_assoc($result)) 
    {
    	$rows[] = $r;
    }
    echo json_encode($rows);
    $conn->close();
?>