<?php 
    $servername = "localhost";
    // TODO You might need to change the username and password below accordingly
    $username = "root"; // default  from XAMPP
    $password = ""; // default from XAMPP
    $db_name = "database";  
    $conn = new mysqli($servername, $username, $password, $db_name, 3306); // 3306 is default port in XAMPP
    if($conn->connect_error){
        die("Connection failed".$conn->connect_error);
    }
    echo " ";
    
?>