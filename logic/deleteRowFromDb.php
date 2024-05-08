<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Check if the user is not logged in, redirect to login page
if (!isset($_SESSION['user_logged_in']) || $_SESSION['user_logged_in'] !== true) {
    header('Location: ../index.php');
    exit; // Important to prevent further script execution
}

include("../connection.php"); // Include your database connection file


// delete subscriber
if(isset($_POST['msisdn'])) {
    $msisdn = $_POST['msisdn'];
    
    // Check the referer to decide the table
    $referer = $_SERVER['HTTP_REFERER'];
    
    // Initialize the table variable
    $table = '';
    
    // Determine the table based on the referer
    if(strpos($referer, 'subscribers.php') !== false) {
        $table = 'subscribers';
    } else if(strpos($referer, 'resellers.php') !== false) {
        $table = 'resellers';
    } else if(strpos($referer, 'resellersCreditHistory.php') !== false) {
        $table = 'resellers_credit_history';
    } else if(strpos($referer, 'resellersTransactions.php') !== false) {
        $table = 'resellers_transactions';
    } else {
        // Referer does not match expected sources
        echo "Invalid request source.";
        exit;
    }
    
    // Ensure table is not empty
    if(!empty($table)) {
        // Prepare a delete statement
        $sql = "DELETE FROM $table WHERE msisdn = '$msisdn'";
        
        // Validate and sanitize input before executing
        // It's highly recommended to use prepared statements instead of directly injecting variables
        if(pg_prepare($conn, "delete_query", "DELETE FROM $table WHERE msisdn = $1")) {
            $result = pg_execute($conn, "delete_query", array($msisdn));
            if($result) {
                echo "Record deleted successfully.";
            } else {
                echo "Error deleting record: " . pg_last_error($conn);
            }
        } else {
            echo "Error preparing statement: " . pg_last_error($conn);
        }
    }
}


// // delete subscriber
// if(isset($_POST['msisdn'])) {
//     $msisdn = $_POST['msisdn'];
    
//     // Prepare a delete statement
//     $sql = "DELETE FROM subscribers WHERE msisdn = '$msisdn'";
//     $result = pg_query($conn, $sql);
//     if($result) {
//         echo "Record deleted successfully.";
//     } else {
//         echo "Error deleting record: " . pg_last_error($conn);
//     }
    
// }