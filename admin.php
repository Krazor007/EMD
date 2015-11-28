<?php
error_reporting(0);
$msg = "";
if ($_SERVER['REQUEST_METHOD'] == 'POST')
	{

if( !$_POST['myusername'] == '' && !$_POST['mypassword'] == '')
{

$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="allcure_db"; // Database name 
$tbl_name="admns"; // Table name 

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

// username and password sent from form 
$myusername=$_POST['myusername']; 
$mypassword=$_POST['mypassword']; 

// To protect MySQL injection
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($mypassword);
$sql="SELECT * FROM $tbl_name WHERE aname='$myusername' and apass='$mypassword'";
$result=mysql_query($sql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){
	while($item = mysql_fetch_array($result))
	{
		$adminid = $item['pid'];
	}
session_start();
// Register $myusername, $mypassword and redirect
	$_SESSION['adminname'] = $myusername;
	$_SESSION['adminpass'] = $mypassword;
	$_SESSION['adminid'] = $adminid; 
header("location:/php/admin/admin.php");
	
}

else if($result == false)
{
  $msg = "<p style='color:red'>Something went wrong with the Database</p>";
}

else 
{

$msg =  "<p style='color:red'>Wrong Username or Password</p>";
//header("location:admin.html");
}

}

else
{
	$msg =  "<p style='color:red'>All fields are mandatory !</p>";
}


	}

?>

<html>
<head>
	<title>Allcure admin login</title>
</head>
<body style="background-color:#EEEEEE;position:realtive;height:100%;width:100%">
<div>
<h1>Allcure admin portal</h1>
<table width="300" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#2A3744" style="position:absolute;top:30%;left:37%">
<tr>
<form name="form1" method="post" action="admin.php">
<td>
<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#2A3744" style="color:#fff">
<tr>
<td colspan="3"><strong>Login:</strong></td>
</tr>
<tr>
<td width="78">Username</td>
<td width="6">:</td>
<td width="294"><input name="myusername" type="text" id="myusername"></td>
</tr>
<tr>
<td>Password</td>
<td>:</td>
<td><input name="mypassword" type="password" id="mypassword"></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td><input type="submit" name="Submit" value="Login"></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td><?php echo $msg ?></td></tr>
</table>
</td>
</form>
</tr>
</table>
</div>
</body>
</html>
