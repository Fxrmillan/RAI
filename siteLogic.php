<?php 
$siteDataQuerry = "SELECT * FROM siteinformation"; 
$result = mysqli_query($conn,$siteDataQuerry);  
$siteData = mysqli_fetch_array($result, MYSQLI_ASSOC); 
function printSiteName($siteName){
    echo $siteName;
    return;
}
function printNetworkName($networkName){
    echo $networkName;
    return;
}
function printPrefixName($prefixName){
    echo $prefixName;
    return;
}

?>
