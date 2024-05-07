<?php 
	include("connection.php");
	include("logic/siteLogic.php");

	if (session_status() === PHP_SESSION_NONE) {
		session_start();
	}

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
// TODO test translation after done with functionality
// echo "English"._("Site")."English";
?>
<h1><?=echo_('Site name')?>:&nbsp;<?php printSiteName($siteData); ?><h1>
<h1><?=echo_('Network Name')?>:&nbsp;<?php printNetworkName($siteData); ?><h1>
<h1><?=echo_('Prefix Name')?>:&nbsp;<?php printPrefixName($siteData); ?><h1>
</body>
</html>
