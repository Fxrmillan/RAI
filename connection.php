<?php 
    $servername = "localhost";
    // TODO You might need to change the username and password below accordingly
    $username = "rhizomatica"; // default  from XAMPP
    $password = "rhizomatica"; // default from XAMPP
    $db_name = "rhizomatica";  
    // $conn = new mysqli($servername, $username, $password, $db_name, 3306); // 3306 is default port in XAMPP
	$conn = pg_connect(
		" host=".$servername.
		" dbname=".$db_name.
		" user=".$username.
		" password=".$password
	);
    if(!$conn){
        die("Connection failed". pg_last_error($conn));
    }
    echo "";
    
?>