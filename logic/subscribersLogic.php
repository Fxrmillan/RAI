<?php
    include("connection.php");
    include("login.php");

    $siteDataQuery = "SELECT siteName, networkName, prefixName FROM siteinformation"; 
    $result = mysqli_query($conn, $siteDataQuery);

    $data = array();
    while($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }

    

    echo json_encode($data);
?>