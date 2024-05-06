<?php
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
    <style>
        .centered {
            text-align: center;
            margin-top: 50px; /* Adjust the value as needed */
        }
    </style>
</head>
<body>
<?php
include("navbar.php");
?>
<div class="centered">
        <a href="platformStats.php?a=12h">Last&nbsp;12&nbsp;Hours</a> |
        <a href="platformStats.php?a=1d">Daily</a> |
        <a href="platformStats.php?a=1w">Weekly</a> |
        <a href="platformStats.php?a=1m">Monthly</a>
</div>
<style>
img {
    padding-top: 20px;
}
</style>
<div style="text-align:center">
    <?php
        $age = (isset($_GET['a'])) ? $_GET['a'] : '12h';
        $graphs = array('loadaverage','cpu','memory','latency','voltage','temperature','disk','eth0_traffic','eth0_errors');
        foreach ($graphs as &$g) {
            echo "<img src='graphs/$g-$age.png' /><br/><br/>";
        }
    ?>
</div>
</body>
</html>