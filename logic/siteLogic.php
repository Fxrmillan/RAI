<?php
if (session_status() === PHP_SESSION_NONE) {
	session_start();
}

// Check if the user is not logged in, redirect to login page
if (!isset($_SESSION['user_logged_in']) || $_SESSION['user_logged_in'] !== true) {
	header('Location: index.php');
	exit; // Important to prevent further script execution
}

$siteDataQuerry = "SELECT * FROM site"; 
// $result = mysqli_query($conn,$siteDataQuerry);
$result = pg_query($conn, $siteDataQuerry);
//$siteData = mysqli_fetch_array($result, MYSQLI_ASSOC);
$siteData = pg_fetch_assoc($result);
function printSiteName($siteData){
	if(!$siteData){
		echo "Not available";	
	}
	else{
		echo $siteData["site_name"];
	}
    return;
}
function printNetworkName($siteData){
	if(!$siteData){
		echo "Not available";	
	}
	else{
		echo $siteData["network_name"];
	}
    return;
}
function printPrefixName($siteData){
	if(!$siteData){
		echo "Not available";	
	}
	else{
		echo $siteData["postcode"];
	}
    return;
}

?>
