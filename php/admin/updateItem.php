<?php
include 'connection.php';
//form parameters
$pname=$_POST['pname']; 
$ptype=$_POST['ptype'];
$pstrength = $_POST['pstrength'];
$ppacksize = $_POST['ppacksize'];
$imgpath = $_POST['pimgname'];
$pid = $_POST['pid'];
$status = $_POST['pstatus'];

// Create connection
$conn = new mysqli($host, $username, $password, $db_name);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "UPDATE products SET pname ='$pname', type='$ptype', pstrength='$pstrength',ppacksize='$ppacksize',pimgpath='$imgpath',status='$status',updated_at=now() WHERE pid='$pid'";

if ($conn->query($sql) === TRUE) {
    echo "<script>
             window.location.replace('http://localhost/php/admin/admin.php#/products');
     		</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>