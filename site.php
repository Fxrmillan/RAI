<?php 
	include("connection.php");
	include("logic/siteLogic.php");
	session_start(); // has to be here to use $_SESSION
		    
	// Check if the user is not logged in, redirect to login page
	if (!isset($_SESSION['user_logged_in']) || $_SESSION['user_logged_in'] !== true) {
		header('Location: index.php');
		exit; // Important to prevent further script execution
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
include("navbar.php");
?>
<h1>Site Name:&nbsp;<?php printSiteName($siteData["siteName"]); ?><h1>
<h1>Network Name:&nbsp;<?php printNetworkName($siteData["networkName"]); ?><h1>
<h1>Prefix Name:&nbsp;<?php printPrefixName($siteData["prefixName"]); ?><h1>
</body>
</html>