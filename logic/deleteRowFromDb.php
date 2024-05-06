<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Check if the user is not logged in, redirect to login page
if (!isset($_SESSION['user_logged_in']) || $_SESSION['user_logged_in'] !== true) {
    header('Location: index.php');
    exit; // Important to prevent further script execution
}

include("connection.php"); // Include your database connection file

if(isset($_POST['siteName'])) {
    $siteName = $_POST['siteName'];
    
    // Prepare a delete statement
    $sql = "DELETE FROM siteinformation WHERE siteName = '$siteName'";
    $result = mysqli_query($conn, $sql);
    if($result) {
        echo "Record deleted successfully.";
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
    
}

?>