<?php 
    include("connection.php");
    include("siteLogic.php");
    session_start(); // has to be here to use $_SESSION
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
<h1>Site Name:<?php printSiteName($siteData["siteName"]); ?><h1>
<h1>Networ Name:<?php printNetworkName($siteData["networkName"]); ?><h1>
<h1>Prefix Name:<?php printPrefixName($siteData["prefixName"]); ?><h1>
</body>
</html>