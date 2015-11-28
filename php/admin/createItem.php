<?php
include 'connection.php';
//form parameters
$pname=$_POST['name']; 
$ptype=$_POST['type'];
$pstrength = $_POST['strength'];
$ppacksize = $_POST['packsize'];
$imgpath = $_POST['imgname'];
$status = $_POST['status'];

// Create connection
$conn = new mysqli($host, $username, $password, $db_name);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO products (pname, type, pstrength,ppacksize,pimgpath,status)
VALUES ('".$pname."','".$ptype."', '".$pstrength."','".$ppacksize."','".$imgpath."','".$status."')";

if ($conn->query($sql) === TRUE) {
    echo "<script>
             window.location.replace('http://localhost/php/admin/admin.php#/products');
     		</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>