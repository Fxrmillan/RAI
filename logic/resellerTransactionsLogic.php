<?php
    header('Content-Type: application/json');
    include("../connection.php");
    include("../login.php");

    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }

    // Check if the user is not logged in, redirect to login page
    if (!isset($_SESSION['user_logged_in']) || $_SESSION['user_logged_in'] !== true) {
        header('Location: index.php');
        exit; // Important to prevent further script execution
    }

    // $siteDataQuery = "SELECT created, msisdn, pin, balance, total_sales FROM resellers";
    $siteDataQuery = "SELECT * FROM resellers_transactions";
    $result = pg_query($conn, $siteDataQuery);

    $data = array();
    while($row = pg_fetch_assoc($result)) {
        $data[] = $row;
    }
    
echo json_encode($data);