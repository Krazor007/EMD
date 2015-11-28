<?php
session_start();
if(isset($_SESSION['adminname']) && isset($_SESSION['adminpass']))
{
	session_unset();
	session_destroy();
	header("location:../../");
}


?>