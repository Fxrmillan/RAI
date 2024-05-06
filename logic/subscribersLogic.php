<?php
    include("connection.php");
    include("login.php");

    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
    // Check if the user is not logged in, redirect to login page
    if (!isset($_SESSION['user_logged_in']) || $_SESSION['user_logged_in'] !== true) {
        header('Location: index.php');
        exit; // Important to prevent further script execution
    }

    $siteDataQuery = "SELECT site_name, network_name, postcode FROM site"; 
    $result = mysqli_query($conn, $siteDataQuery);

    $data = array();
    while($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }

    

    echo json_encode($data);
?>