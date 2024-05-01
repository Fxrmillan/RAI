<?php 
$siteDataQuerry = "SELECT * FROM siteinformation"; 
// $result = mysqli_query($conn,$siteDataQuerry);
$result = pg_query($conn, $siteDataQuerry);
//$siteData = mysqli_fetch_array($result, MYSQLI_ASSOC);
$siteData = pg_fetch_row($result);
function printSiteName($siteName){
	if(empty($siteName)){
		echo "Not available";	
	}
	else{
		echo $siteName;
	}
    return;
}
function printNetworkName($networkName){
	if(empty($networkName)){
		echo "Not available";	
	}
	else{
		echo $networkName;
	}
    return;
}
function printPrefixName($prefixName){
	if(empty($prefixName)){
		echo "Not available";	
	}
	else{
		echo $prefixName;
	}
    return;
}

?>
