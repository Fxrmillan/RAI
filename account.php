<?php 
    include("connection.php");
    include("logic/accountLogic.php");

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
<p>Authorised: <?=number_format($c_both)?> MXN</p>
<p>Not Authorised: <?=number_format($c_na)?> MXN</p>
<p>Not Paid, Authorised: <?=number_format($c_not_paid_auth)?> MXN</p>
<p>Total sold to authorised Users: <?=number_format($c_both + $c_not_paid_auth,2)?> MXN</p>
</div>
</body>
</html>