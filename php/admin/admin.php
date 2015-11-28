<?php

session_start();

if(!isset($_SESSION['adminname']) && !isset($_SESSION['adminpass']))
{
	header("location:../../admin.php");

}

else if(isset($_SESSION['adminname']) && isset($_SESSION['adminpass']))
{
     $message = "Hello ".$_SESSION['adminname']." !";
}

else 
{
	$message = "Error processing your request, please try logging in again from admin page.";
}

?>
<!DOCTYPE html>
<html>
<head>
<title>Allcure admin</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" type="image/png" href="assets/img/favicon.png"/>
<link href='https://fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Play:400,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Tangerine:700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"> 
<link rel="stylesheet" type="text/css" href="assets/css/admin.css"/>
<link rel="stylesheet" type="text/css" href="assets/css/animate.css"/>
<link rel="stylesheet" type="text/css" href="assets/css/hover-min.css"/>
</head>
<body class="back-color-body" ng-app="adminapp">
<div class="container-fluid">
<nav class="navbar navbar-default navbar-fixed-top back-color drop-shadow lifted">
  <div class="container">
    <div><div class="col-md-6 col-sm-4 col-xs-3"><h2 style="font-family:raleway;color:white" class=""><a href="#" style="text-decoration:none;color:#A3D038">Allcure admin</a></h2></div><div class="col-md-6 col-sm-6 col-xs-8 padding-top-20"><div class="row"><div class="col-md-4 col-sm-4 col-xs-4"><input type="search" class="form-control" placeholder="Search" ng-model="searchKeyword"></div><div class="col-md-6 col-sm-6 col-xs-4"><p style="color:white;"><?php echo $message ?></p></div><div class="col-md-2 col-sm-2 col-xs-2"><form name="form2" method="post" action="logout.php">
	<input type="submit" name="Submit" value="Logout" class="btn bt-default hvr-shutter-in-vertical">
</form></div></div></div></div>
  </div>
</nav>
<div class="col-md-12 col-sm-12 col-xs-12" ng-view></div>
</div>

</body>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.5/angular.min.js"></script>			<!-- Angular JS CDN -->
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.28//angular-route.min.js"></script>	<!-- Angular routing sript -->
<script src="https://code.angularjs.org/1.0.3/angular-sanitize.js"></script>
<script src="assets/scripts/app.js"></script>
<script src="assets/scripts/controllers/adminhomectrl.js"></script>
<script src="assets/scripts/controllers/adminprodctrl.js"></script>
<script src="assets/scripts/controllers/admindelctrl.js"></script>
<script src="assets/scripts/validator.js"></script>
</html>