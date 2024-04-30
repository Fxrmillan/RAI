<?php
    include('connection.php');
    session_start(); // needed at the beginning of EVERY php file
    // we only extract username and pw if the 'submit' button is pressed
    if (isset($_POST['submit'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        // $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";  
        // $result = mysqli_query($conn, $sql);

	$result = pg_query("SELECT * from users WHERE username='".pg_escape_string($username)."'");

        //$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
	

        $count = pg_num_rows($result);  
        
        if($count == 1){
		$row = pg_fetch_row($result);
		echo $row;
		if (password_verify($password, $row[2])) {
			$_SESSION['userName'] = $row["username"];
			$_SESSION['user_logged_in'] = true;
			header("Location: site.php");
		}
        }
        else{
		// echo $count;
		echo  '<script>
			alert("Invalid username or password")
                        window.location.href = "index.php";
		</script>';
        }
    }
?>