<?php 
include 'connection.php';
session_start();

if(isset($_POST['content']) && isset($_SESSION['adminname']) && isset($_SESSION['adminpass']))
{
$data = json_decode($_POST['content']);
$conn = new mysqli($host, $username, $password, $db_name);
// Check connection
$pid = 0;
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 



  foreach($data as $d){
  	$pid = $d->pid;
    $query="delete from products where pid=$pid";
	$result= mysqli_query($conn, $query) or die("Error");
  }


  $conn->close();
}
?>