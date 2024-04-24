<?php
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