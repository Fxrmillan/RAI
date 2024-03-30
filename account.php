<?php 
    include("connection.php");
    session_start(); // has to be here to use $_SESSION
    include("accountLogic.php");
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
<style>
img {
    padding-top: 200px;
}
p {
    margin: 0;
}
</style>
<div style="text-align:center"> 
<img src="assets\userIconTest.PNG">
<p>Credit Allocated </p>
<p>Authorised <?php printAuthorized($accountData["authorized"]); ?> MXN</p>
<p>Not Authorised <?php printNotAuthorized($accountData["notAuthorized"]); ?> MXN</p>
<p>Not Paid, Authorised <?php printNotPaied($accountData["notAuthorized"]); ?> MXN</p>
<p>Total sold to authorised Users <?php printTotalSold($accountData["totalSold"]); ?> MXN</p>
</div>
</body>
</html>